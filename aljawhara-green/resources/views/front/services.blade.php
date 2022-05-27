@extends('front.layout.partials')
@section('content')
   
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{asset('front/img/bg-img/1.jpg')}});"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2>التميز في تقديم خدمات و استشارات زراعية متكاملة ذات خدمة عالية و بأسعار منافسة باستخدام أفضل الكفاءات و التقنيات لتلبية احتياجات العملاء
                            </h2>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{asset('front/img/bg-img/2.jpg')}});"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2>التميز في تقديم خدمات و استشارات زراعية متكاملة ذات خدمة عالية و بأسعار منافسة باستخدام أفضل الكفاءات و التقنيات لتلبية احتياجات العملاء </h2>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ##### Hero Area End ##### -->






    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>خدماتنا </h2>
                        <p>نقدم العديد من الخدمات بجودة عالية</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">


            <div class="row">



            
                @foreach ($services as $service)
                    
                <div class="col-12 col-sm-6 col-lg-4 single_portfolio_item garden wow fadeInUp" data-wow-delay="200ms">
                    <div class="card" style="width: 22rem;">
                        <img src="{{asset('uploads/'.$service->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3>{{$service->title}}  </h3>
                            <h6>
                                {{Str::words($service->detailes,10)}}
                            </h6>
                            <a href="{{route('service-show',$service->id)}}" class="btn btn-primary">عرض التفاصيل</a>
                            <a href="https://api.whatsapp.com/send/?phone=966554000050" target="blank" class="btn  btn-success "><i class="fa fa-whatsapp m-1" aria-hidden="true"></i>طلب الخدمة </a>

                        </div>
                    </div>

                </div>
             
                @endforeach


             



            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->









    @endsection