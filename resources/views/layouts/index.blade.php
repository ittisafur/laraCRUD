@extends('master')


@section('content')



  <div class="blog-header">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
  </div>

  <div class="row">

    <div class="col-sm-8 blog-main">
      
      @foreach($posts as $post)
      <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}} </h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
    
        <p>{{$post->body}}</p>
        {{-- <div class="dev">
          <a href="{{$post->id}}"><button class="btn btn-danger">Delete</button></a>
          <a href="{{$post->id}}"><button class="btn btn-primary">Edit</button></a>
        </div> --}}
        <form action="/posts/{{$post->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('delete')}}
            <button>Delete</button>
        </form>
        <a href="/posts/edit/{{$post->id}}"><button class="btn btn-danger">Edit</button></a>
      </div><!-- /.blog-post -->
      @endforeach

      <nav>
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>

    </div><!-- /.blog-main -->

    @include('layouts.sidebar')

  </div><!-- /.row -->




@stop