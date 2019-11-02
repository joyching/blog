@extends('layouts.base')

@section('content')
    <div class="page-title" style="background-image: url('{{ asset('images/partner-bg.png') }}')">
        <h1>Welcome</h1>
    </div>

    <section id="blog">

        <div class="blog container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $post)
                    <div class="blog-item">
                        <div class="blog-content">
                            <a href="#" class="blog_cat">{{ $post->created_at }}</a>
                            <h2><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
                            <h3>{{ $post->summary }}</h3>
                            <a class="readmore" href="{{ route('post.show', $post->id) }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/.blog-item-->
                    @endforeach
                </div>
                <!--/.col-md-8-->

                @include('sections.side')
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-md-8 text-center">
                    <a class="btn btn-primary">More Posts</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@endsection
