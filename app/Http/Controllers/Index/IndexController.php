<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }
    public function login(){
        return view ('index.login');
    }
    public function logindo(){
        $data=request()->all();
        $name=request()->post('tel');
//        dd($name);
//        dd($data);
        $res=Users::where($data)->first();
//        dd($res);
        if($res){
            return view('index.indexdo');
        }else{
            echo "手机号或密码错误";
        }
    }
    public function zc(){
        return view('index.zc');
    }
    public function zcdo(){
//        echo 123;die;
        $data=[];
        $pwd=request()->post('pwd');
        $tel=request()->post('tel');

        if($pwd){
            $data['pwd']=$pwd;
        }else{
            echo '密码不能为空';die;
        }
//        if($tel){
//            $data[]=$pwd;
//        }else{
//            echo '密码不能为空';die;
//        }
        $reg='/^[1][35689][0-9]{9}$/';
        if($tel==null){
            echo '手机号不能为空';die;
        }elseif(preg_match($reg,$tel)){
            $data['tel']=$tel;
        }else{
            echo '手机号的格式不对';die;
        }
//        dd($data);
        $res=Users::insert($data);
        if($res){
            return redirect("/");
        }else{
            echo "注册失败";
        }
    }
    public function tc(){
        return view('index.index');
    }
}
