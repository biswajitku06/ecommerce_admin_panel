@extends('adminlayout.design')

@section('content')
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> </a></div>
            <h1>Dashboard Settings</h1>
        </div>
        <!--End-breadcrumbs-->
        @include('adminlayout.message')

        <!--Action boxes-->
        <div class="container-fluid">
            <div class="quick-actions_homepage" style="margin-top: 50px;margin-left: 30px">
                <ul class="quick-actions">
                    <li class="bg_lb"> <a href="{{route('addCategory')}}"> <i class="icon-dashboard"></i> Add Category </a> </li>
                    <li class="bg_lg span3"> <a href="{{route('addProduct')}}"> <i class="icon-signal"></i>Add Product</a> </li>
                    <li class="bg_ly"> <a href="{{route('addBanner')}}"> <i class="icon-inbox"></i>Add Banner </a> </li>
                    <li class="bg_lo"> <a href="{{route('addCoupon')}}"> <i class="icon-th"></i>Add Coupon</a> </li>
                    <li class="bg_ls"> <a href="{{route('userlist')}}"> <i class="icon-fullscreen"></i> User List</a> </li>
                    <li class="bg_lo span3"> <a href="{{route('viewCategory')}}"> <i class="icon-th-list"></i> Category List</a> </li>
                    <li class="bg_ls"> <a href="{{route('viewProduct')}}"> <i class="icon-tint"></i> Product List</a> </li>
                    <li class="bg_lb"> <a href="{{route('viewCoupon')}}"> <i class="icon-pencil"></i>Coupon List</a> </li>
                    <li class="bg_lg"> <a href="{{route('addBanner')}}"> <i class="icon-calendar"></i> Banner List</a> </li>
                    <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

                </ul>
            </div>


        </div>
    </div>
@endsection
