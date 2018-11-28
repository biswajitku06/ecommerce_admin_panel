@extends('adminlayout.design')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>Admin Settings</h1>
        </div>

        @include('adminlayout.message')

        <div class="row-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Update Password</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{route('updatePassword')}}" name="password_validate" id="password_validate" novalidate="novalidate">
                                {{csrf_field()}}
                                <div class="control-group">
                                    <label class="control-label">Current Password</label>
                                    <div class="controls">
                                        <input type="password" name="cur_password" id="current_pwd" />
                                        <span id="checkpwd"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">New Password</label>
                                    <div class="controls">
                                        <input type="password" name="new_pwd" id="new_pwd" />
                                    </div>

                                </div>
                                <div class="control-group">
                                    <label class="control-label">Confirm password</label>
                                    <div class="controls">
                                        <input type="password" name="confirm_pwd" id="confirm_pwd" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <input type="submit" value="Update Password" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@section('script')
    <script>
        $(document).ready(function() {

            $('#current_pwd').keyup(function () {

                var current = $('#current_pwd').val();
                $.ajax({
                    type: 'get',
                    url: '/admin/check_password',
                    data: {current_pwd: current},
                    datatype: 'json',
                    success: function (resp) {
                        if (resp == "false")
                            $('#checkpwd').html("<font color:red>Current Password is incorrect</font>")
                        else if (resp == "true")
                            $('#checkpwd').html("<font color:green>Current Password is correct</font>")
                    },
                    error:function (resp) {
                       alert('error');
                    }
                });

            });
        })

    </script>
@endsection




@endsection



