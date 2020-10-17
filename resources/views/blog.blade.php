@extends('layouts.front')

@section('styles')
@isset($category)
<!-- Primary Meta Tags -->
<meta name="title" content="{{ $category->name }}">
<meta name="description" content="{{ $category->meta_desc }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://covid19corner.io/categories/{{ $category->slug }}">
<meta property="og:title" content="{{ $category->name }} - {{ $general->title }}">
<meta property="og:description" content="{{ $category->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://covid19corner.io/categories/{{ $category->slug }}">
<meta property="twitter:title" content="{{ $category->name }} — {{ $general->title }}">
<meta property="twitter:description" content="{{ $category->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">
@endisset

@isset($tag)
<!-- Primary Meta Tags -->
<meta name="title" content="{{ $tag->name }}">
<meta name="description" content="{{ $tag->meta_desc }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://covid19corner.io/tags/{{ $tag->slug }}">
<meta property="og:title" content="{{ $tag->name }} - {{ $general->title }}">
<meta property="og:description" content="{{ $tag->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://covid19corner.io/tags/{{ $tag->slug }}">
<meta property="twitter:title" content="{{ $tag->name }} — {{ $general->title }}">
<meta property="twitter:description" content="{{ $tag->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">
@endisset

@if (!isset($tag) && !isset($category))
<!-- Primary Meta Tags -->
<meta name="title" content="{{ $general->title }}">
<meta name="description" content="{{ $general->meta_desc }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://covid19corner.io/blog">
<meta property="og:title" content="{{ $general->title }}">
<meta property="og:description" content="{{ $general->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://covid19corner.io/blog">
<meta property="twitter:title" content="{{ $general->title }}">
<meta property="twitter:description" content="{{ $general->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">
@endif
@endsection
@section('content')
<div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center mx-auto">
          @isset($category)
          <h1 class="heading">Kategori: {{ $category->name }}</h1>
          @endisset

          @isset($tag)
          <h1 class="heading">Tag: {{ $tag->name }}</h1>
          @endisset

          @if (!isset($tag) && !isset($category))
          <h1 class="heading">Artikel</h1>
          @endif
        </div>
        
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Berita & Artikel Terbaru</h2>
        </div>
      </div>

      <div class="row">
        @foreach ($posts as $blog)
  
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
          <div class="post-entry">
            <a href="{{ route('blogshow',$blog->slug) }}" class="thumb">
              <span class="date">{{ Carbon\Carbon::parse($blog->created_at)->format("d F, Y") }}</span>
              <img src="{{ asset('storage/'.$blog->cover) }}" alt="Image" class="img-fluid">
            </a>
            <div class="post-meta text-center">
              <a href="">
                <span class="icon-user"></span>
                <span>{{ $blog->user->name }}</span>
              </a>
              <a href="{{ route('blogshow',$blog->slug) }}">
                <span class="icon-comment"></span>
                <span>3 Comments</span>
              </a>
            </div>
            <h3><a href="{{ route('blogshow',$blog->slug) }}">{{ $blog->title }}</a></h3>
          </div>
        </div>

        @endforeach
      </div>

      <div class="row">
        <div class="col-lg-12 text-center">
       
            {{ $posts->links() }}
          
        </div>
      </div>
    </div>
  </div>
@endsection