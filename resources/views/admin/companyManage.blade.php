@extends('layouts.app')
@section('content')
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="{{request()->getPathInfo() == '/admin/companyManage'?'active':''}}">
                <a href="{{route('admin.companyManage')}}">公司客户管理<span class="sr-only">(current)</span></a>
            </li>
            <li class="{{request()->getPathInfo() == '/admin/clientManage'?'active':''}}">
                <a href="{{route('admin.clientManage')}}">个人客户管理<span class="sr-only">(current)</span></a>
            </li>
            <li class="{{request()->getPathInfo() == '/admin/companyRecordsManage'?'active':''}}">
                <a href="{{route('admin.companyRecordsManage')}}">公司订单管理<span class="sr-only">(current)</span></a>
            </li>
            <li class="{{request()->getPathInfo() == '/admin/clientRecordsManage'?'active':''}}">
                <a href="{{route('admin.clientRecordsManage')}}">个人订单管理 <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
@endsection

