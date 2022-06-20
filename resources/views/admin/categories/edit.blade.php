@extends('admin.layouts.app')
@section("script")

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("richtext.min.css")}}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset("jquery.richtext.min.js")}}"></script>
@stop
@section('route')
    افزودن دسته بندی
@stop
@section('container')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif @if(session()->has('err'))
        <div class="alert alert-danger">
            {{session()->get('err')}}
        </div>
    @endif
    <!-- general form elements -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"> افزودن دسته بندی </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="post" action="{{route('panel.store_cat')}}" role="form" >
            @csrf
            @if($errors->any())
                {!!  implode('', $errors->all('<div class="alert alert-danger">:message</div>'))  !!}
            @endif
            <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                           placeholder="عنوان دسته بندی">
                </div>


            </div> <!-- /.card-body -->

            <div class="card-footer d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary py-3 w-75">ارسال</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@stop




