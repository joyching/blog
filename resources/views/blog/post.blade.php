@extends('layouts.base')

@section('content')
<div class="page-title" style="background-image: url('{{ asset('images/page-title.png') }}')">
    <h1>Single Blog</h1>
</div>

<section id="blog">
    <div class="blog container">
        <div class="row">
            <div class="col-md-8">

                <div class="blog-item">
                    <div class="blog-content">
                        <a href="#" class="blog_cat">UI/UX DESIGN</a>
                        <h2><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
                        <div class="post-meta">
                            <p>By <a href="#">{{ $post->user->name }}</a></p>
                            <p><i class="fa fa-clock-o"></i> <a href="#">{{ $post->created_at }}</a></p>
                            <p><i class="fa fa-comment"></i> <a href="#" id="comment-amount">{{ $post->comments->count() }}</a></p>
                        </div>
                        <h3>{{ $post->body }}</h3>

                        <div class="inner-meta">
                            <ul class="tags">
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Donation</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">People</a></li>
                            </ul>
                            <div class="social-btns">
                                <a href="#"> <i class="fa fa-heart"></i> Like</a>
                                <a href="#" class="tweet-bg"> <i class="fa fa-twitter"></i> tweet</a>
                                <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> facebook</a>
                            </div>
                        </div>

                        <div class="comments">
                            <h2>Comments</h2>
                            @foreach($post->comments as $comment)
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="{{ asset('images/graverter.jpg') }}" alt="author">
                                </div>
                                <div class="comment-content">
                                    <h5>{{ $comment->user->name }}</h5>
                                    <p>{{ $comment->body }}</p>
                                </div>
                                <div class="comment-count">
                                    <!-- <a href="#"><i class="fa fa-reply"></i> Reply</a> -->
                                    <a href="#"><i class="fa fa-clock-o"></i> {{ $comment->created_at }}</a>
                                </div>
                            </div>
                            @endforeach
                            <div class="single-comment" id="div-reply">
                                <div class="comment-img">
                                    <img src="{{ asset('images/graverter.jpg') }}" alt="author">
                                </div>
                                <div class="comment-content comment-form">
                                    <form action="#">
                                        <textarea id="commentBody"></textarea>
                                        <input type="button" class="btn btn-primary" value="Comment" id="btnComment">
                                        <input type="hidden" value="{{ $post->id }}" id="postId">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="hide" id="comment-template">
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="{{ asset('images/graverter.jpg') }}" alt="author">
                                </div>
                                <div class="comment-content">
                                    <h5></h5>
                                    <p></p>
                                </div>
                                <div class="comment-count">
                                    <!-- <a href="#"><i class="fa fa-reply"></i> Reply</a> -->
                                    <a href="#" class="comment-at"><i class="fa fa-clock-o"></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/.blog-item-->
            </div>
            <!--/.col-md-8-->

            @include('sections.side')
        </div>
        <!--/.row-->
    </div>
</section>
<!--/#blog-->
@endsection

@section('scripts')
  <script src="{{ mix('js/post.js') }}"></script>
@endsection
