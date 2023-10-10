@extends("_master.main")
@section("left_sidebar")
    @if($errors->any())

        <div class="errorWrapper" style="width: 350px ; box-shadow: 0 0 10px #333 ; position: absolute ; top: 30px ; right: 0 ;">

            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <p class="lead">
                        {{$error}}
                    </p>
                </div>

            @endforeach

        </div>

    @endif
    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-post text-right">
                        <div class="post-header mb-5 text-center">
                            <div class="meta-cat">
                                <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                   href="#">سلامتی ,</a>
                                <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                   href="#">لایف استایل</a>
                            </div>
                            <h2 class="post-title mt-2">
                                {{$article->title}}
                            </h2>

                            <div class="post-meta">
                                <span class="text-uppercase font-sm letter-spacing-1 mr-3">از {{$article->user->name}}</span>
                                <span class="text-uppercase font-sm letter-spacing-1">{{$article->date}}</span>
                            </div>
                            <div class="post-featured-image mt-5">
                                <img src="{{$article->thumbnail}}" class="img-fluid w-100" alt="featured-image">
                            </div>
                        </div>
                        <div class="post-body">
                            <div class="entry-content">
                                <p> {{$article->body}}</p>
                                <p> {{$article->body}}</p>
                                <h2 class="mt-4 mb-3">دیزاین عالی و طراحی کد بی نظیر در دستان شما</h2>

                                <blockquote>
                                    <i class="ti-quote-left mr-2"></i>A wise girls knows her limit to touch the
                                    sky.Repellat sapiente neque iusto praesentium adipisci.The question gave me an idea,
                                    so I answered quickly before Perry could say anything.<i
                                        class="ti-quote-right ml-2"></i>
                                </blockquote>

                                <div class="row">

                                </div>
                                <h3 class="mt-5 mb-3">از تابستان خود لذت ببرید</h3>

                            </div>

                            <div class="post-tags py-4">
                                <a href="#">#سلامتی</a>
                                <a href="#">#گیم</a>
                                <a href="#">#تور مسافرتی</a>
                            </div>


                            <div
                                class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

                                <span class="single-comment-o"><i class="fa fa-comment-o"></i>0 comment</span>

                                <div class="post-share">
                                    <span class="count-number-like">2</span>
                                    <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>
                                </div>

                                <div class="list-posts-share">
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-author d-flex my-5">
                        <div class="author-img">
                            <img alt="" src="/images/author.jpg" class="avatar avatar-100 photo" width="100"
                                 height="100">
                        </div>

                        <div class="author-content pl-4">
                            <h4 class="mb-3"><a href="#" title="" rel="author" class="text-capitalize">Themefisher</a>
                            </h4>
                            <p>Hey there. My name is Liam. I was born with the love for traveling. I also love taking
                                photos with my phone in order to capture moment..</p>

                            <a target="_blank" class="author-social" href="#"><i class="ti-facebook"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-twitter"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-google-plus"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-instagram"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-pinterest"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-tumblr"></i></a>
                        </div>
                    </div>
                    <nav class="post-pagination clearfix border-top border-bottom py-4">
                        <div class="prev-post">
                            <a href="blog-single.html">
                                <span class="text-uppercase font-sm letter-spacing">بعدی</span>
                                <h4 class="mt-3"> لورم ایپسوم یک متن ساختگی برای تست در سایت ها </h4>
                            </a>
                        </div>
                        <div class="next-post">
                            <a href="blog-single.html">
                                <span class="text-uppercase font-sm letter-spacing">قبلی</span>
                                <h4 class="mt-3">لورم ایپسوم یک متن ساختگی برای تست در سایت ها </h4>
                            </a>
                        </div>
                    </nav>
                    <div class="related-posts-block mt-5">
                        <h3 class="news-title mb-4 text-center">
                            پست های مرتبط با علایق شما
                        </h3>
                        <div class="row">
                            @foreach($popular as $pop)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="post-block-wrapper mb-4 mb-lg-0">
                                        <a href="{{route("single" , ["slug" => $pop->slug])}}">
                                            <img class="img-fluid img-thumbnail" src="{{$pop->thumbnail}}" alt="post-thumbnail" />
                                        </a>
                                        <div class="post-content mt-3">

                                            <h5>
                                                <a href="{{route("single" , ["slug" => $pop->slug])}}">{{\Illuminate\Support\Str::limit($pop->title , 20)}}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                            @endforeach








                        </div>
                    </div>

                    <div class="comment-area my-5">
                        <h3 class="mb-4 text-center">{{count($article->comment)}} کامنت ها</h3>



                        @if(isset($article->comment[0]))
                            @foreach($article->comment  as $key=>$comment)
                                <div class="comment-area-box media mt-5">
                                    <img alt="" src="/images/blog-user-3.jpg" class="mt-2 img-fluid float-left mr-3">

                                    <div class="media-body ml-4">
                                        <h4 class="mb-0 ">{{$comment->name}}</h4>
                                        <span class="date-comm font-sm text-capitalize text-color"><i
                                                class="ti-time mr-2"></i>{{$comment->date}}</span>

                                        <div class="comment-content mt-3">
                                            <p>{{$comment->body}} </p>
                                        </div>
                                        <div class="comment-meta mt-4 mt-lg-0 mt-md-0">
                                            <a href="#" class="text-underline reply" id="number{{($key+1)}}">ریپلای </a>
                                        </div>
                                    </div>
                                </div>


                            @endforeach


                        @endif

{{--                        @if(\Illuminate\Support\Facades\Session::has("status"))--}}
{{--                            <div class="alert alert-success">--}}
{{--                                <span class="close">&times;</span>--}}
{{--                                <p class="lead">--}}
{{--                                    {{\Illuminate\Support\Facades\Session::flash("status" , 'comment suubmited successfully')}}--}}
{{--                                </p>--}}
{{--                            </div>--}}

{{--                        @endif--}}



                    </div>

                    <form class="comment-form mb-5 gray-bg p-5" id="comment-form" action="{{route("insert_comment" , ["slug" => $article->slug])}}" method="post">
                        @csrf
                        <h3 class="mb-4 text-center">کامنت کنید</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea class="form-control mb-3" name="message" id="message" cols="30" rows="5"
                                          placeholder="کامنت">{{old("message")}}</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="نام:">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" id="mail" placeholder="ایمل:">
                                </div>
                            </div>
                        </div>

                        <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact"
                               value="ارسال پیام">
                    </form>

                </div>


@endsection

@section("right_sidebar")
    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
        <div class="sidebar sidebar-right">
            <div class="sidebar-wrap mt-5 mt-lg-0">
                <div class="sidebar-widget about mb-5 text-center p-3">
                    <div class="about-author">
                        <img src="{{$article->user->thumbnail}}" alt="" class="img-fluid">
                    </div>
                    <h4 class="mb-0 mt-4"><a href="{{route("profile" , ["userName" => $article->user->name ])}}">{{$article->user->name}}</a></h4>
                    <p> بلاگر</p>
                    <p>من  {{$article->user->name}}, هستم نویسند این پست میتوانید سفرنامه و دیگر پست های من رو در این صفحه و در !</p>
                </div>

                <div class="sidebar-widget follow mb-5 text-center">
                    <h4 class="text-center widget-title">دنبال کردن </h4>
                    <div class="follow-socials">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-youtube"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>

                <div class="sidebar-widget mb-5 ">
                    <h4 class="text-center widget-title">پست های ترند</h4>

                    <div class="sidebar-post-item-big">
                        <a href="single.blade.php"><img src="/images/news/img-1.jpg" alt="" class="img-fluid"></a>
                        <div class="mt-3 media-body">
                            <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                            <h4><a href="single.blade.php">Meeting With Clarissa, Founder Of Purple Conversation App</a></h4>
                        </div>
                    </div>

                    <div class="media border-bottom py-3 sidebar-post-item">
                        <a href="#"><img class="mr-4" src="/images/news/thumb-1.jpg" alt=""></a>
                        <div class="media-body">
                            <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                            <h4><a href="single.blade.php">Thoughtful living in los Angeles</a></h4>
                        </div>
                    </div>

                    <div class="media py-3 sidebar-post-item">
                        <a href="#"><img class="mr-4" src="/images/news/thumb-2.jpg" alt=""></a>
                        <div class="media-body">
                            <span class="text-muted letter-spacing text-uppercase font-sm">اسفند 10, 1402</span>
                            <h4><a href="single.blade.php">Vivamus molestie gravida turpis.</a></h4>
                        </div>
                    </div>
                </div>


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


                <div class="sidebar-widget sidebar-adv mb-5">
                    <a href="#"><img src="/images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
                </div>

            </div>
        </div>
    </div>
@endsection
