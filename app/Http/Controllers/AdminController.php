<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //个人客户管理
    public function clientManage(Request $request){
        return view("admin.clientManage");
    }

    //公司客户管理
    public function companyManage(Request $request){
        return view("admin.companyManage");
    }

    //公司订单管理
    public function companyRecordsManage(Request $request){
        return view("admin.companyRecordsManage");
    }

    //个人订单管理
    public function clientRecordsManage(Request $request){
        return view("admin.clientRecordsManage");
    }
}
