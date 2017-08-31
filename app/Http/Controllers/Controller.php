<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\UserRepository;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user_gestion;

    public function __construct(UserRepository $user_gestion)
    {
        $this->user_gestion = $user_gestion;
    }

    /*115.159.69.193*/
    public function home()
    {
        $list = $this->user_gestion->all();

        return view('backend.meun.index');
    }


    public function meunModel()
    {

        return view('backend.meun.list');
    }

    public function getList(){
        $modelArr = array();

        for ($i=0;$i<10;$i++){
            $modelArr[] = array(
                'id'  =>    rand(1, 999),
                'numberID' =>   rand(10000000, 99999999),
                'numberDate' => date('Y-m-d H:i:s', time()),
                'num' => rand(1, 999),
                'name' => $this->get_rand_str(),
                'status' => $this->get_rand_str(4),
                'money' => '$'.rand(1, 999)
            );
        }


        echo json_encode($modelArr);
    }

    function get_rand_str($len=8){
        $randArr=array_merge(range('a','z'),range('A','Z'));
        shuffle($randArr);
        $rs=array_slice($randArr,0,$len);
        return implode($rs);
    }
}
