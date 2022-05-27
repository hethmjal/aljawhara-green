
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




    <section class="container mt-5 mb-5">
        <h4 class=" mb-3" style="color: green;">شرح الخدمة</h4>
        <div>
            <h3>
                {{$service->title}}
            </h3>
        </div>
        <p>
            {{$service->detailes}}
        </p>
        <div class="row mb-5">


            <div>
                <div class=" d-flex align-items-center justify-content-center py-4  rounded">
                    <img src="img/bg-img/20.jpg" width="300px" class="card-img-top" alt="...">
                </div>
                <h5 class="text-center">هل أنت مستعد للاشتراك؟</h5>
                <div class="d-flex justify-content-center my-3">
                    <a href="https://api.whatsapp.com/send/?phone=966554000050" target="blank" class=" btn btn btn-lg btn-shadow  rounded-pill px-3 btn-success  mx-1"><i class="fa fa-whatsapp m-1" aria-hidden="true"></i>طلب الخدمة </a>
                    <a href="../content/contact_us.html" class="btn btn-lg btn-shadow btn-primary rounded-pill px-3">تواصل معنا</a>
                </div>
            </div>
    </section>





@endsection