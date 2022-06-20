@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-6">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{$project->title}}</h2>
                        <ul>
                            <li><a href="index.html">صفحه اصلی</a></li>
                            <li>{{$project->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Projects Details Area -->
    <section class="projects-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="projects-details-header">
                        <h3>{{$project->title}}</h3>
                    </div>

                    <div class="projects-details-image">
                        <img src="{{asset($project->image)}}" alt="{{$project->image_alt}}">
                    </div>

                    <div class="projects-details-desc">
                       {!! $project->fulltext !!}
                    </div>

                    <div class="row">

                        @foreach($other as $result)
                        <div class="col-lg-6 col-md-6">
                            <div class="projects-item two">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{$result->image}}" alt="{{$result->image_alt}}">
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
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_contact">
                            <div class="text">
                                <span>اضطراری</span>
                                <a href="tel:021-12345678">021-12345678</a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Details Area -->
@stop
