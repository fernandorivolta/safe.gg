<?php

use Illuminate\Database\Seeder;
use App\ProPlayer;

class cria_proplayer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proplayer = new ProPlayer;
        $proplayer->nick = "TitaN";
        $proplayer->team = "Red Canids";
        $proplayer->region = "BR";
        $proplayer->position = "ADC";
        $proplayer->photo = "/images/proPlayer/kabum/titan.jpg";
        $proplayer->nationality = "BR";
        $proplayer->name = "Alexandre Lima";
        $proplayer->account_id = "vNNgOru3BD8yPWCk8xMvCRkFJ9jZsuirf-XMrNn_i5isp7ZEJL2xtWyGQesH7wOAwuf82Ja4FGHaQw";
        $proplayer->save();

        $proplayer = new ProPlayer;
        $proplayer->nick = "dyNquedo";
        $proplayer->team = "Kabum E-Sports";
        $proplayer->region = "BR";
        $proplayer->position = "MID";
        $proplayer->photo = "/images/proPlayer/kabum/dynquedo.jpg";
        $proplayer->nationality = "BR";
        $proplayer->name = "Matheus Rossini";
        $proplayer->account_id = "yIMqOgs7h1C2lSFcUwfx4GwqNhE-6Us4QxywpdpMMIxx595GMvL_d5dimfkJ66rf13L3iESLyHqExA";
        $proplayer->save();

        $proplayer = new ProPlayer;
        $proplayer->nick = "Shrimp";
        $proplayer->team = "Flamengo E-Sports";
        $proplayer->region = "BR";
        $proplayer->position = "JNG";
        $proplayer->photo = "/images/proPlayer/flamengo/shrimp.jpg";
        $proplayer->nationality = "KR";
        $proplayer->name = "Lee Byeong-hoon";
        $proplayer->account_id = "yIMqOgs7h1C2lSFcUwfx4GwqNhE-6Us4QxywpdpMMIxx595GMvL_d5dimfkJ66rf13L3iESLyHqExA";
        $proplayer->save();
    }
}
