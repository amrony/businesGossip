@extends('front-end.menubar.master')

@section('body')

    <section id="sec_two" class="section section-intro context-dark">
        <div class="intro-bg" style="background: url({{ asset('back-end/images') }}/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center; "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <h1 class="font-weight-bold wow fadeInLeft">er All Content</h1>
                    <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page.
                        We are always happy to help you!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="tabs_sec">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/latest/news') }}">Latest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('article-news') }}">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('article.buying-guides') }}">Buying Guides</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('article.expert-advice') }}">Expert Advice</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">


                        <div class="container first_tab">

                            <a href="{{ route('view-news', $firstNews->id) }}">
                                <img src="@if($firstNews){{ url('storage/news/'.$firstNews->image) }}@endif" alt="Notebook"
                                     style="width:100%;">

                                <div class="top-text">
                                    <h3>@if($firstNews){{ $firstNews->title }}@endif</h3>
                                    <p>@if($firstNews){{ str_limit($firstNews->body, 200) }}@endif</p>
                                </div>
                            </a>

                            <div class="text_secL">
                                @foreach($news as $new)
                                    <div class="text_l  1" >
                                        <a href="{{ route('view-news', $new->id) }}">
                                            <img src="{{ url('storage/news/'.$new->image) }}" alt="Pineapple" style="width: 105px; float: left;height: 89px;margin-right: 15px;">
                                            <h4>{{ $new->title }}</h4>
                                            {{ $new->body }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
                <div class="col-md-4 box_right">
                    <div class="container">
                        <div class="text_secL">
                            <h4>Buying Advice</h4><br>
                            <div class="text_l  1" >
                                @foreach($communities as $community)
                                    <h4>{{ $community->question }}</h4>
                                    <p>{{ str_limit($community->description, 80) }}</p><br>
                                    <p style="color: #ec950e;line-height: 0.1;margin-bottom: 8px;">{{ $community->answers->count() }} answers</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{--            <button class="tablinks" onclick="openCity(event, 'London')">Ask a Question</button>--}}
                </div>
            </div>
        </div>
    </section>


    <!-- About page about section-->




@endsection