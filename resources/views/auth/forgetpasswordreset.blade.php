

@include('auth.header')
@section('after-style')
    <style>
        .register {
            margin-left: 124px;
        }

    </style>
@endsection
@if (session('success'))
    <div id="showmessage" class="myalert alert-float alert alert-success alert-dismissable custom-success-box" style="margin: 15px;
    border-radius: 10px;
    width: 306px;
    margin-left: 468px;">
        <button  type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ session('success') }}
    </div>
@endif


<div id="loginbox">
     <div  class="form-vertical">
         <div class="control-group normal_text"> <h3 style="color:green"> FORGOT PASSWORD SENT MESSAGE</h3></div>
        <p class="normal_text from-vertical">You will receive an email with further instructions if your account exists. Please check your email.</p>

        <div class="controls">
        </div>

        <div class="form-actions">
            <a href= {{ route('login') }}>
                <button type="submit" class="btn btn-block btn-primary btn-rounded">{{__('Back')}}  </button>
            </a>
        </div>
     </div>
</div>

@section('script')
    <script>
        $(document).ready(function(){
            $("#showmessage").delay(5000).slideUp(300);
        });
    </script>
@endsection

@include('auth.footer')



