@extends('adminlayout.design')

@section('content')


    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>Product Settings</h1>
        </div>


        @include('adminlayout.message')


        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Edit Product</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{route('editProduct',$product_details->id)}}" name="basic_validate" id="edit_product">
                            {{csrf_field()}}

                            <div class="control-group">
                                <label class="control-label">Under Category</label>
                                <div class="controls">
                                    <select name="cat_id" id="cat_id" style="width:220px">
                                        {{--<option value="0">Main Category</option>--}}
                                        <?php echo $categories_dropdown ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Product Name</label>
                                <div class="controls">
                                    <input type="text" name="product_name" id="product_name" value="{{$product_details->product_name}}">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Product Code</label>
                                <div class="controls">
                                    <input type="text" name="product_code" id="product_code" value="{{$product_details->product_code}}">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Color</label>
                                <div class="controls">
                                    <input type="text" name="product_color" id="product_color" value="{{$product_details->product_color}}">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price</label>
                                <div class="controls">
                                    <input type="text" name="price" id="price" value="{{$product_details->price}}">
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea name="description" id="description" >{{$product_details->description}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Material & Care</label>
                                <div class="controls">
                                    <textarea name="care" id="care" >{{$product_details->care}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">File upload input</label>
                                <div class="controls">
                                    <input type="file" name="image" id="image" />
                                    <input type="hidden" name="current_image" value="{{$product_details->image}}"/>
                                    @if(!empty($product_details->image))
                                        <img src="{{asset('images/backend_images/product/small/'.$product_details->image)}} "
                                             width="60" height="60"><a class="btn btn-danger" href="{{route('deleteimage',$product_details->id)}}">Delete</a>
                                    @endif
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Enable</label>
                                <div class="controls" >
                                    <input type="checkbox" name="status" id="status" value="2" @if($product_details->status==2) checked @endif/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Update Product" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection