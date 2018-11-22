@extends('adminlayout.design')

@section('content')


    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>User Profile</h1>
        </div>


        @include('adminlayout.message')


        <div class="row-fluid">
            <div class="span12">
                <img src="" style="border-radius: 50%" alt="Avatar" style="width:200px">
            </div>
        </div>
        </div>

    </div>

@endsection
