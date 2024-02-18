<?php
namespace app\controller;

use app\BaseController;
use Ramsey\Uuid\Uuid;
use think\facade\Session;

class Index extends BaseController
{
    public function index()
    {
        $user = 1;
        $token = uniqid();
        $tokens = "1".$token;

        session($user."token",$tokens);
        $respone = [
            "code" => 0,
            "msg" => "success",
            "data" => $tokens,
        ];
        return json_encode($respone);
    }

    public function home(){
        $user = 2;

        $token = uniqid();
        $tokens = "2".$token;

        session($user."token",$tokens);
        $respone = [
            "code" => 1,
            "msg" => "success",
            "data" => $tokens,
        ];
        return json_encode($respone);
    }

    public function getUuid(){
        $user = 1;
        $respone = [
            "code" => 1,
            "msg" => "success",
            "data" => session($user."token"),
        ];
        return json_encode($respone);
    }

    public function getSession(){
        $user = 2;
        $respone = [
            "code" => 1,
            "msg" => "success",
            "data" => session($user."token"),
        ];
        return json_encode($respone);
    }

    public function getAllSession(){
        $allSession = Session::All();
        $respone = [
            "code" => 3,
            "msg" => "success",
            "data" => $allSession,
        ];
        return json_encode($respone);
    }

    public function text(){
        echo 1;
    }
}
