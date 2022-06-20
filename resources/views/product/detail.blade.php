@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>جزئیات محصولات</h2>
                        <ul>
                            <li><a href="index.html">صفحه اصلی</a></li>
                            <li>جزئیات محصولات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{asset($blog->image)}}" alt="{{$blog->img_alt}}">
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <span>نوشته شده در:</span>
                                        <a href="#">{{Verta::instance($blog->created_at)->formatDifference()}}</a>
                                    </li>
                                    <li>
                                        <span>ارسال شده توسط:</span>
                                        <a href="#">سورین آز</a>
                                    </li>
                                </ul>
                            </div>

                            <h3>
                                {{$blog->title}}
                            </h3>
                            <div>
                                {!! $blog->fulltext !!}
                            </div>
                        </div>


                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">

                                </div>
                                <div class="nav-next">

                                </div>

                            </div>
                            </div>
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
    <!-- End Blog Details Area -->



@stop
