@extends("_master.main")


@section("banner")


    <section class="banner">
        <div class="container">
            <div class="banner-img">
                <a href="single.blade.php"><img src="/images/fashion/bg-banner-2.jpg" alt="" class="img-fluid w-100"></a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if(\Illuminate\Support\Facades\Session::has("status"))
                        <div class="alert alert-success">
                            Entered successfully !
                        </div>

                    @endif
                    <div class="banner-content text-center">
                        <div class="meta-cat">
                            <span class="text-capitalize letter-spacing-1 cat-name font-extra text-color">سفر</span>
                        </div>
                        <div class="post-title">
                            <h2><a href="single.blade.php">جاهای دیدنی جذاب برای تابستان امسال</a></h2>
                        </div>

                        <div class="post-meta footer-meta">
                            <ul class="list-inline">
                                <li class="post-like list-inline-item">
                                    <span class="count">197</span> Likes
                                </li>
                                <li class="post-read list-inline-item">2 mins read</li>
                                <li class="post-view list-inline-item">189 Views</li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربرد، شناخت فراوان جامعه و متخصصان را می طلبد.</p>
                            <a href="single.blade.php" class="btn btn-grey mt-3"> بیشتر </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("left_sidebar")

    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

        @foreach($articles as $article)
            <article class="post-list mb-5 pb-4 border-bottom">
                <a class="post-thumb mb-3 d-block" href="single.blade.php">
                    <img src="{{$article->thumbnail}}" alt="" class="img-fluid w-100" style="height: 400px;">
                </a>
                <div class="meta-cat">
                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">Experience</span>
                </div>
                <h3 class="post-title mt-2"><a href="{{route("single" , ["slug" => $article->slug])}}">{{\Illuminate\Support\Str::replace("-" , "  " , $article->slug)}}</a></h3>

                <div class="post-meta footer-meta">
                    <ul class="list-inline">
                        <li class="post-like list-inline-item">
                            <span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i> دقیقه زمان برای خواندن2</span>
                        </li>
                        <li class="post-view list-inline-item letter-spacing-1">{{$article->view}} Views</li>
                    </ul>
                </div>
                <div class="post-content">
                    <p>{{$article->body}}</p>

                </div>
            </article>

        @endforeach




        <div class="pagination mt-5 pt-4">
            <ul class="list-inline">
                <li class="list-inline-item">{{$articles->links()}}</li>
            </ul>
        </div>
    </div>

@endsection

@section("right_sidebar")
    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
        <div class="sidebar sidebar-right">
            <div class="sidebar-wrap mt-5 mt-lg-0">

                <div class="sidebar-widget mb-5 ">
                    <h4 class="text-center widget-title">پست های ترند</h4>

                    <div class="sidebar-post-item-big">
                        <a href="single.blade.php"><img src="/images/news/img-1.jpg" alt="" class="img-fluid"></a>
                        <div class="mt-3 media-body">
                            <span class="text-muted letter-spacing text-uppercase font-sm">اسفند 10, 1402</span>
                            <h4><a href="single.blade.php">ارتباط با اشکان رحیمی طراح این سایت</a></h4>
                        </div>
                    </div>

                    @foreach($popular as $pop)
                        <div class="media border-bottom py-3 sidebar-post-item">
                            <a href="#"><img class="mr-4" src="{{$pop->thumbnail}}" alt=""></a>
                            <div class="media-body">
                                <span class="text-muted letter-spacing text-uppercase font-sm">{{$pop->date}}</span>
                                <h4><a href="{{route("single" , ["slug" => $pop->slug])}}">{{\Illuminate\Support\Str::replace("-" , "   " , $pop->slug )}}</a></h4>
                            </div>
                        </div>
                    @endforeach


                <div class="sidebar-widget category mb-5">
                    <h4 class="text-center widget-title">نویسندگان</h4>
                    <ul class="list-unstyled">
                        @foreach($users as $key => $user)


                            <li class="align-items-center d-flex justify-content-between">
                                <span>{{$key+1}}</span>
                                <a href="{{route("profile" , ["userName" => $user->name])}}">{{$user->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="sidebar-widget subscribe mb-5">
                    <h4 class="text-center widget-title">نامه های جدید</h4>
                    <input type="text" class="form-control" placeholder="Email Address">
                    <a href="#" class="btn btn-primary d-block mt-3">ثبت نام</a>
                </div>

                <div class="sidebar-widget sidebar-adv mb-5">
                    <a href="#"><img src="/images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
                </div>

            </div>
        </div>
    </div>
@endsection
