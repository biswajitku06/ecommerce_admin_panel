@extends('adminlayout.design')

@section('content')


    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>User List</h1>
        </div>


        @include('adminlayout.message')

        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>User List</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $users)
                                    <tr class="gradeU">
                                        <td>{{$users->id}}</td>
                                        <td>{{$users->username}}</td>
                                        <td>{{$users->email}}</td>
                                        <td>
                                            @if($users->role == 1) Admin @elseif($users->role==2) User @else Super Admin @endif
                                        </td>
                                        <td>
                                            @if(!empty($users->image))
                                                <img src="{{asset('images/backend_images/users/small/'.$users->image)}} "
                                                     width="60" height="60">
                                                @else
                                                <p>null</p>
                                            @endif
                                        </td>
                                        <td class="center"> @if($users->role == 2)<a href="{{route('acceptUser',$users->id)}}" class="btn btn-success btn-mini">Accept</a>@endif
                                            <a rel="{{$users->id}}" rel1="delete-user" <?php /*href="{{route('deleteCategory',$categories->id)}}"*/?> href="javascript:" class="btn btn-danger btn-mini deleteRecord" id="clickdelete">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection
