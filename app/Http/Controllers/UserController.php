<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){//usercontroller가 불러와 질대 기본적으로 실행하는 함수
        $this->middleware('auth');//미들웨어 사용하는 방법1

        //$this->middleware('can') -> only('show');
        //미들웨어가 해당 메소드 요청에만 동작
        //$this->middleware('can') -> except('edit');
        //미들웨어가 해당 메소드 요청을 제외한 다른 동작만 동작

    }//여기에 미들웨어 설정을 하면 아래의 함수들이 실행 될때 기본적으로 이 미들웨어를 다거치게 된다.

    public function show($id){
        return $id;
    }

    public function edit(){
        return 'Edit';
    }
}
