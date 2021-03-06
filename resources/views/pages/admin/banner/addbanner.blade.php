@extends('adminlayout.design')
@section('after-style')
    <style>
        #status {
            opacity: 1 !important;
        }
    </style>
@endsection
@section('content')


    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>Banner Settings</h1>
        </div>


        @include('adminlayout.message')

        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Banner</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{route('addBanner')}}" name="basic_validate" id="add_banner">
                            {{csrf_field()}}



                            <div class="control-group">
                                <label class="control-label">Title</label>
                                <div class="controls">
                                    <input type="text" name="title" id="title">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Link</label>
                                <div class="controls">
                                    <input type="text" name="link" id="link">
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Banner Image</label>
                                <div class="controls">
                                    <input type="file" name="image" id="image" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Enable</label>
                                <div class="controls" >
                                    <input type="checkbox" name="status" id="status" value="2"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Add Banner" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
