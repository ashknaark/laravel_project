@extends("_master.main")
@section("left_sidebar")
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h2 class="lg-title">Posts</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                      @if(isset($user->article[0]))
                            @foreach($user->article as $article)
                                <div class="col-lg-6 col-md-6">
                                    <article class="post-grid mb-5">
                                        <div class="post-thumb mb-4">
                                            <img src="{{$article->thumbnail}}" alt="" class="img-fluid w-100">
                                        </div>
                                        <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">Travel</span>
                                        <h3 class="post-title mt-1"><a href="{{route("single" , ["slug" => $article->slug])}}">{{\Illuminate\Support\Str::limit($article->title , 20)}}</a></h3>

                                        <span class=" text-muted  text-capitalize">{{$article->date}}</span>

                                    </article>
                                </div>


                            @endforeach
                        @else
                          <div class="alert alert-warning">
                              <span class="close">
                                  &times;
                              </span>
                              <p class="lead">
                                  No Media For This Author!
                              </p>
                          </div>


                        @endif
                    </div>


                </div>
@endsection

@section("right_sidebar")
    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
        <div class="sidebar sidebar-right">
            <div class="sidebar-wrap mt-5 mt-lg-0">
                <div class="sidebar-widget about mb-5 text-center p-3">
                    <div class="about-author">
                        <img src="{{$user->thumbnail}}" alt="" class="img-fluid">
                    </div>
                    <h4 class="mb-0 mt-4">{{$user->name}}</h4>
                    <p>Travel Blogger</p>
                    <p>I'm {{$user->name}}, last year I decided to quit my job and travel the world. You can follow my journey on this
                        blog!</p>
                </div>

                <div class="sidebar-widget follow mb-5 text-center">
                    <h4 class="text-center widget-title">Follow Me</h4>
                    <div class="follow-socials">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-youtube"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>

                <div class="sidebar-widget mb-5 ">
                    <h4 class="text-center widget-title">Trending Posts</h4>

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
                            <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                            <h4><a href="single.blade.php">Vivamus molestie gravida turpis.</a></h4>
                        </div>
                    </div>
                </div>


                <div class="sidebar-widget category mb-5">
                    <h4 class="text-center widget-title">Authors</h4>
                    <ul class="list-unstyled">

                        @foreach($users as $key => $user)


                            <li class="align-items-center d-flex justify-content-between">
                                <a href="{{route("profile" , ["userName" => $user->name])}}">{{$user->name}}</a>
                                <span>{{$key+1}}</span>
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

