@extends('layouts.front')

@section('styles')
    <!-- Primary Meta Tags -->
<meta name="title" content="{{ $post->title }}">
<meta name="description" content="{{ $post->meta_desc }}">
<meta name="keywords" content="{{ $post->keyword }}" >

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://covid19corner.io/blog/{{ $post->slug }}">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:description" content="{{ $post->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$post->cover) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://covid19corner.io/blog/{{ $post->slug }}">
<meta property="twitter:title" content="{{ $post->title }}">
<meta property="twitter:description" content="{{ $post->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$post->cover) }}">
@endsection
@section('content')
<div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center mx-auto">
          <span class="d-block subheading">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}, by <a href="#">{{ $post->user->name }}</a></span>
          <h1 class="heading mb-3">{{ $post->title }}</h1>
        </div>
        
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-content">
          <div class="row">
            <div class="col-lg-12">
              <figure>
                  <img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}" class="img-fluid">
              </figure>
              </div>
              </div>
              <p class="lead">
                 {!! $post->body !!}
              </p>
              <div class="pt-5">
                <p>
                    Categories:  <a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a> 
                    Tags:
                    @foreach ($post->tags as $tag)
                    <a href="{{ route('tag',$tag->slug) }}">#{{ $tag->name }}</a>
                    @endforeach
                </p>
              </div>


              {{-- <div class="pt-5">
                <h3 class="mb-5">6 Comments</h3>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Free Website Template by Free-Template.co">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>

                  <li class="comment">
                    <div class="vcard bio">
                      <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>

                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>


                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>Jean Doe</h3>
                              <div class="meta">January 9, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Jean Doe</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li class="comment">
                    <div class="vcard bio">
                      <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
                </ul>
                <!-- END comment-list -->

                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn btn-primary">
                    </div>

                  </form>
                </div>
              </div> --}}

            </div>
            <div class="col-md-4 sidebar">
              <div class="sidebar-box">
                <form action="{{ route("search") }}" method="GET" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" name="query" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <div class="sidebar-box">
                <div class="categories">
                  <h3>Categories</h3>
                  @foreach ($categories as $category)
                  <li><a href="{{ route('category',$category->slug) }}">{{ $category->name }} <span>({{ $category->posts()->count() }})</span></a></li>
                  @endforeach
                </div>
                <hr>
                <div class="categories">
                    <h3>Artikel Terbaru</h3>
                    @foreach ($lblog as $blog)
                    <li><a href="{{ route('blogshow',$blog->slug) }}">{{ substr($blog->title,0,50) }}....</a></li>
                    @endforeach
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection