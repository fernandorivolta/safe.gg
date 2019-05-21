<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->summonerName = $request->input('summonerName');
        $user->steam = $request->input('steam');
        $user->birthday = $request->input('birthday');
        $user->save();
        return view('login');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->summonerName = $request->input('summonerName');
        $user->steam = $request->input('steam');
        $user->icon = $request->input('icon');
        $user->save();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    public function pre_register(Request $request){
        return view('account',[
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'name' => $request->input('name')
        ]);
    }

    public function set_icon(Request $request){
        $user = Auth::user();
        $image = $request->input('fileToUpload');
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10).'.'.'png';
        \File::put(storage_path(). '/app/public/' . $imageName, base64_decode($image));
        $user->icon = $imageName;
        $user->save();
        return redirect('/feed');
    }

    public function login(Request $request){
        $data = array(
            'username' => $request->input('username'),
            'password' => $request->input('password')
        );

        if(Auth::attempt($data)){
            return redirect('/feed');
        }else{
            return view('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return view('index');
    }
}
