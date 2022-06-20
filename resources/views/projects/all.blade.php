@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>پروژه ها</h2>
                        <ul>
                            <li><a href="">صفحه اصلی</a></li>
                            <li>پروژه ها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Projects Area -->
    <section class="projects-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>پروژه های ما</span>
                <h2>آخرین پروژه های ما</h2>
            </div>

            <div class="row">
                @foreach($projects as $result)
                    <div class="col-lg-4 col-md-6">
                        <div class="projects-item two">
                            <div class="image">
                                <a href="#">
                                    <img src="{{asset($result->image)}}" alt="{{$result->image_alt}}">
                                </a>

                                <div class="icon">
                                    <a href="{{route('project.detail',$result)}}">
                                        <i class="las la-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="#">{{$result->title}}</a>
                                </h3>
                                @foreach($result->categories as $cat)
                                <span>{{$cat->name}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>
    <!-- End Projects Area -->

@stop
