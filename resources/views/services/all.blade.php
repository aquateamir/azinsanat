@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')
    <!-- Start Services Area -->
    <section class="services-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>خدمات</span>
                <h2>خدمات مهندسی سورین آز</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">
                            <i class="flaticon-microscope"></i>
                        </div>
                        <h3>
                            <a href="#">تجهیز آزمایشگاه </a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">
                            <i class="flaticon-laboratory"></i>
                        </div>
                        <h3>
                            <a href="#">مشاوره و طراحی آزمایشگاه </a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Services Area -->
@stop
