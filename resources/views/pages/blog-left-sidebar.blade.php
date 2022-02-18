@extends('index')
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Blog</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="sidebar">
                    <div class="widget widget-subscription">
                        <h4 class="widget-title">Get notified updates</h4>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email Address">
                            </div>
                            <button type="submit" class="btn btn-main">I am in</button>
                        </form>
                    </div>

                    <!-- Widget Latest Posts -->
                    <div class="widget widget-latest-post">
                        <h4 class="widget-title">Latest Posts</h4>
                        @if($latestPost)
                            @foreach($latestPost as $item)
                                <div class="media">
                                    <a class="pull-left" href="#!">
                                        <img class="media-object" src="images/blog/post-thumb.jpg" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#!">{{$item -> title}}</a></h4>
                                        <p>{{$item -> content}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- End Latest Posts -->

                    <!-- Widget Category -->
                    <div class="widget widget-category">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="widget-category-list">
                            @if($post)
                                @foreach($post as $item)
                                    <li><a href="#!">{{$item -> cateName}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div> <!-- End category  -->

                    <!-- Widget tag -->
                    <div class="widget widget-tag">
                        <h4 class="widget-title">Tag Cloud</h4>
                        <ul class="widget-tag-list">
                            @if($post)
                                @foreach($post as $item)
                                    <li><a href="#!">{{$item -> tagName}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div> <!-- End tag  -->

                </aside>
            </div>
            <div class="col-md-8">
                @if($post)
                    @foreach($post as $item)
                        <div class="post">
                            <div class="post-media post-thumb">
                                <a href="#">
{{--                                    @php--}}
{{--                                        $image = json_decode($item['image']);--}}
{{--                                    @endphp--}}
                                    <img src="{{asset('assets/images/blog/blog-post-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <h2 class="post-title"><a href="#">{{$item ->title}}</a></h2>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <i class="tf-ion-ios-calendar"></i> {{$item -> created_at}}
                                    </li>
                                    <li>
                                        <i class="tf-ion-android-person"></i>{{$item ->userName}}
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-ios-pricetags"></i>{{$item -> tagName}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-content">
                                <p>{{$item -> content}} </p>
                                <a href="{{route("blog-detail",[$item->post_id])}}" class="btn btn-main">Continue Reading</a>
                            </div>

                        </div>
                    @endforeach
                @endif

                <div class="text-center">
                    <ul class="pagination post-pagination">
                        <li><a href="#!">Prev</a>
                        </li>
                        <li class="active"><a href="#!">1</a>
                        </li>
                        <li><a href="#!">2</a>
                        </li>
                        <li><a href="#!">3</a>
                        </li>
                        <li><a href="#!">4</a>
                        </li>
                        <li><a href="#!">5</a>
                        </li>
                        <li><a href="#!">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

