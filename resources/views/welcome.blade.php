@extends('layouts.front')

@section('styles')
<!-- Primary Meta Tags -->
<meta name="title" content="{{ $general->title }}">
<meta name="description" content="{{ $general->meta_desc }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://covid19corner.io">
<meta property="og:title" content="{{ $general->title }}">
<meta property="og:description" content="{{ $general->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://covid19corner.io">
<meta property="twitter:title" content="{{ $general->title }}">
<meta property="twitter:description" content="{{ $general->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">
@endsection

@section('content')
<div class="hero-v1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mr-auto text-center text-lg-left">
          <span class="d-block subheading">Covid-19 Awareness</span>
          <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
          <p class="mb-5">Coronavirus atau virus corona merupakan keluarga besar virus yang menyebabkan infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu. Banyak orang terinfeksi virus ini, setidaknya satu kali dalam hidupnya.</p>
          <p class="mb-4"><a href="#protect" class="btn btn-primary">Bagaimana Cara Mencegahnya ?</a></p>
        </div>
        <div class="col-lg-6">
          <figure class="illustration">
            <img src="{{ asset('assets/images/illustration.png') }}" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>
  </div>

  <div class="site-section stats">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Statistik Covid19 Indonesia</h2>
          <p>Statistik covid 19 Indonesia ini akan diupdate secara realtime setiap harinya.</p>
        </div>
      </div>
      <div class="row"> 
      @foreach ($iddata as $iddata)
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $iddata['positif'] }} Orang</strong>
            <span class="label">Positif</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $iddata['meninggal'] }} Orang</strong>
            <span class="label">Meninggal</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $iddata['sembuh'] }} Orang</strong>
            <span class="label">Sembuh</span>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="site-section bg-primary-light">
    <div class="container">
      <div class="row mb-3 align-items-center">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Statistik Covid19 Indonesia Per Provinsi</h2>
        </div>
      </div>
      <div class="row">
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Positif</th>
                  <th scope="col">Sembuh</th>
                  <th scope="col">Meninggal</th>
              </tr>
          </thead>
          <tbody>
              @php
                  $no = 0;
              @endphp
              @foreach ($data as $datas)   
              <tr>
                  <th scope="row">{{ ++$no }}</th>
                  <td>{{ $datas['attributes']['Provinsi'] }}</td>
                  <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                  <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                  <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
              </tr>
              @endforeach 
          </tbody>
      </table>
      </div>
    </div>
  </div>

  <div class="site-section" id="protect">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="mb-4 section-heading">Bagaimana Cara Melindungi Diri Dari Covid-19 ?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="row mt-5 pt-5">
            <div class="col-lg-6 do ">
              <h3>Yang Harus Dilakukan</h3>
              <ul class="list-unstyled check">
                @foreach ($do as $item)
                <li>{{ $item->title }}</li>
                @endforeach
              </ul>
            </div>
            <div class="col-lg-6 dont ">
              <h3>Yang Harus Dihindari</h3>
              <ul class="list-unstyled cross">
                @foreach ($avoid as $item)
                  <li>{{ $item->title }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('assets/images/protect.png') }}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-primary-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Gejala Covid-19</h2>
        </div>
      </div>
      <div class="row">
        @foreach ($symptom as $item)
        <div class="col-lg-6 mb-4">
          <div class="symptom d-flex">
            <div class="img">
              <img src="{{ asset('storage/'.$item->logo) }}" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <h3>{{ $item->title }}</h3>
              <p>{{$item->desc}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Berita & Artikel</h2>
        </div>
      </div>

      <div class="row">
        @foreach ($lblog as $blog)
        <div class="col-lg-4">
          <div class="post-entry">
            <a href="{{ route('blogshow',$blog->slug) }}" class="thumb">
              <span class="date">{{ Carbon\Carbon::parse($blog->created_at)->format("d F, Y") }}</span>
              <img src="{{asset('storage/'.$blog->cover)}}" alt="Image" class="img-fluid">
            </a>
            <div class="post-meta text-center">
              <a href="{{ route('blogshow',$blog->slug) }}">
                <span class="icon-user"></span>
                <span>{{ $blog->user->name }}</span>
              </a>
              <a href="{{ route('blogshow',$blog->slug) }}">
                <span class="icon-eye"></span>
                <span>{{ $blog->views }} Views</span>
              </a>
            </div>
            <h3><a href="{{ route('blogshow',$blog->slug) }}">{{ $blog->title }}</a></h3>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection