@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')
    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{asset('sorenaz/assets/img/about/about-1.jpg')}}" alt="سورین آز">
                        <img src="{{asset('sorenaz/assets/img/about/about-2.jpg')}}" alt="سورین آز">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <h3>ما از پیشرفته ترین و جدید ترین تجهیزات و فناوری روز دنیا استفاده می کنیم</h3>
                        <p>شرکت سورین آز تکنام مفتخر است اعلام بدارد در سال 1399 با تشکیل تیم مهندسی ، متخصص و با تجربه
                            شروع به فعالیت در زمینه تجهیزات آزمایشگاهی، بیمارستانی ، صنعتی و مبلمان اداری نموده است.
                            اولین و مهمترین هدف تیم کاری شرکت سورین آز تکنام
                            همواره این بوده است که خلاء بزرگی که در این حوزه در کشور وجود داشته است را بطرف نماید.خلائی
                            که باعث شده بود تا در این عرصه علم ، تخصص و تکنیک مهندسی جایگاه اصلی خود را از دست بدهد و
                            متاسفانه صرفا با انگیزه سرمایه گذاری و درآمدنجومی
                            فقط صرفا بر اساس تجربه و بدون هیچ داده و پشتیبانی مهندسی در این عرصه فعالیت می نمایند،لذا با
                            اطمینان و افتخار اعلام میکنیم شرکت فنی و مهندسی سورین آز تکنام ( سهامی خاص ) با تکیه بر دانش
                            فنی و مهندسی و استانداردهای روز دنیا
                            پا در این راه مهم گذاشته و تمام تلاش و سعی خود را خواهد نمود تا بیت المال و سرمایه ملی و بخش
                            خصوصی با بالاترین کیفیت و طول عمر بالابه بهره برداری برسد .
                        </p>
                        <p>مشخصات فنی : شرکت فنی و مهندسی سورین آز تکنام براساستحقیق وتخصص و دانش مهندسی در سطح
                            استانداردهای به روز دنیا مشخصات فنی خاص و منحصر بفرد خود با طول عمر حداقل 15 سال ( تضمین )به
                            شرح زیر ارائه مینماید. شایان ذکر است که جزئیات این
                            مشخصات با توجه به اینکه انحصاری می باشد در مذاکرات درخصوص پروژه های شما اراِئه خواهد شد.
                        </p>
                        <ul class="about-list">
                            <li>
                                <i class="las la-check-circle"></i> متخصصان با تجربه
                            </li>
                            <li>
                                <i class="las la-check-circle"></i> تجهیزات پیشرفته
                            </li>
                            <li>
                                <i class="las la-check-circle"></i> بسته های مقرون به صرفه
                            </li>
                        </ul>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                اطلاعات بیشتر
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="{{asset('sorenaz/assets/img/about/shape.png')}}" alt="سورین آز">
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="25">00</span>
                        </h3>
                        <p>برنده جایزه</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="55">00</span>
                        </h3>
                        <p>تجهیزات</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="425">00</span>
                        </h3>
                        <p>پرونده کامل</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-fun-fact-two">
                        <h3>
                            <span class="odometer" data-count="125">00</span>
                        </h3>
                        <p>تجربه</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

@stop
