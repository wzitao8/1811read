<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.admin');
    }
    public function add(){
        return view('admin.orderlist');
    }
    public function bookadd(){
//        echo '123';die;
        return view('admin/bookadd');
    }
    public function fileadd(Request $request){
//        $filename = $request->input('filename');
//        dd($filename);
    }
}
