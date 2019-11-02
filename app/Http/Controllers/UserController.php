<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\UserFollowUser;
use App\Post;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $list_followed_user = [];
        $user = Auth::user();
        $list_users = User::where('username', '!=', $user->username)->where('username', 'like', '%'.$request->input('user').'%')->orderBy('username', 'asc')->limit(10)->get();
        $aux_followed = DB::table('userfollowuser')->where('user_id', '=', $user->id)->pluck('user_id_followed');
        foreach ($aux_followed as $follow){
            $list_followed_user [] = $follow;
        }
        return view('user', [
            'users' => $list_users,
            'followed_users' => $list_followed_user
        ]);
    }

    public function index_api()
    {
        $list_users = User::all();
        return response()->json($list_users);
    }

    public function create(Request $request){
        $uservalidation = User::where('email', $request->input('email'))->first();
        $uservalidation2 = User::where('username', $request->input('username'))->first();
        if($uservalidation){
            return view('account', [
                "message_code" => "NOK",
                "message" => "Email <u>" . $request->input('email') .  "</u> já cadastrado!",
                "username" => $request->input('username'),
                "name" => $request->input('name'),
                "email" => $request->input('email')
            ]);
        }elseif ($uservalidation2) {
            return view('account', [
                "message_code" => "NOK",
                "message" => "Usuario <u>" . $request->input('username') . "</u> já cadastrado!",
                "username" => $request->input('username'),
                "name" => $request->input('name'),
                "email" => $request->input('email')
            ]);
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->summonerName = $request->input('summonerName');
        $user->steam = $request->input('steam');
        $user->birthday = $request->input('birthday');
        $user->admin = 0;
        $user->save();
        return view('login', [
            "message_code" => "OK",
            "message" => "Usuario <u>" . $request->input('username') . "</u> criado com sucesso!"
        ]);
    }

    public function show()
    {
        
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->input('id'));
        $user->name = $request->input('name');
        $user->summonerName = $request->input('summonerName');
        $user->steam = $request->input('steam');
        $user->save();
        return response()->json([
            'message' => 'success' 
        ]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    public function pre_register(Request $request){
        $checked = $request->has('username') ? true: false;

        if($checked){
            return view('account',[
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'name' => $request->input('name')
            ]);
        }else{
            return view('account',[
                'username' => "",
                'email' => "",
                'name' => ""
            ]);
        }
    }

    public function set_icon(Request $request){
        $user = User::findOrFail($request->input('id'));
        $image = $request->input('photo');
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10).'.'.'png';
        \File::put(storage_path(). '/app/public/' . $imageName, base64_decode($image));
        $user->icon = $imageName;
        $user->save();
        return response()->json([
            'message' => 'success'
        ]);
    }

    public function login(Request $request){
        $data = array(
            'username' => $request->input('username'),
            'password' => $request->input('password')
        );

        if(Auth::attempt($data)){
            return redirect('/feed');
        }else{
            return view('login', [
                'message' => "Usuário Inválido",
                'message_code' => "NOK"
            ]);
        }
    }

    public function set_admin($username){
        $user = User::where('username', $username)->first();
        if(!$user){
            return response()->json([
                'message' => "user not found"
            ]);
        }
        $user->admin = 1;
        $user->save();
        return response()->json([
            'message' => "success"
        ]);
    }

    public function unset_admin($username){
        $user = User::where('username', $username)->first();
        if(!$user){
            return response()->json([
                'message' => "user not found"
            ]);
        }
        $user->admin = 0;
        $user->save();
        return response()->json([
            'message' => "success"
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        return view('index');
    }

    public function user_info(){
        $user = Auth::user();
        $num_posts = Post::where('user_id', "=", $user->id)->count();
        $num_following = UserFollowUser::where("user_id", "=", $user->id)->count();
        $num_followers = UserFollowUser::where("user_id_followed", "=", $user->id)->count();
        
        return view('feed', [
            'user' => $user,
            'num_posts' => $num_posts,
            'num_following' => $num_following,
            'num_followers' => $num_followers
        ]);
    }

    public function users_info($id){
        $user = User::find($id);
        $posts = Post::where('user_id', "=", $id)->get();

        return view('profileuser',[
            "user" => $user,
            "posts" => $posts
        ]);
    }
}
