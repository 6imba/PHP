@extends('main')

@section('title', '| Home')

@section('content')

    <!--  Row Jombotron Bootstrap -->
    <div class="row">
        <div class="jumbotron mb-5">
            <h1 class="display-4">Welcome to My Blog</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                featured content or information.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Read more</a>
        </div>
    </div> <!-- Close row  -->

    <!-- Row Post Grid System Bootstrap -->
    <div class="row">
        <!--  Col Post -->
        <div class="col-md-8">

            <!-- column  1   -->
            @foreach ($allposts as $post)
                <div class="post">
                    <h3> {{ $post->title }} </h3>
                    <p>{{ substr($post->description, 0 ,150) }} {{ strlen($post->description)>150 ? "...Read More" : "" }} </p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr>
            @endforeach

        </div>
        <!-- Col SideBar -->
        <div class="sidebar col-md-3 offset-md-1">
            <!-- column  2   -->
            <h2>SideBar</h2>
        </div>
    </div> <!-- Close row  -->

@endsection
