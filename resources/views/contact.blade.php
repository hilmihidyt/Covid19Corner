@extends('layouts.front')

@section('content')
<div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center mx-auto">
          <h1 class="heading mb-3">Hubungi Kami</h1>
        </div>
        
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          @if (session('failed')) 
          <div class="alert alert-danger">
            {{ session('failed') }}
          </div>
          @endif    
          @if (session('sended'))
          <div class="alert alert-success">
            {{ session('sended') }}
          </div>
          @endif
          <form action="{{ route('message') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control {{$errors->first('name') ? "is-invalid" : "" }} " id="name" placeholder="Your Name" value="{{old('name')}}">
                  <div class="invalid-feedback">
                    {{ $errors->first('name') }}    
                  </div> 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control {{$errors->first('email') ? "is-invalid" : "" }} " id="email" placeholder="Your Email" value="{{old('email')}}">
                  <div class="invalid-feedback">
                    {{ $errors->first('email') }}    
                  </div> 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" name="subject" class="form-control {{$errors->first('subject') ? "is-invalid" : "" }} " id="subject" placeholder="Subject" value="{{old('subject')}}">
                  <div class="invalid-feedback">
                    {{ $errors->first('subject') }}    
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control {{$errors->first('body') ? "is-invalid" : "" }} " name="body" rows="5" placeholder="Message">{{old('body')}}</textarea>
                  <div class="invalid-feedback">
                    {{ $errors->first('body') }}    
                  </div> 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <input type="submit" class="btn btn-primary" value="Send Message">
              </div>
            </div>

          </form>
        </div>

        <div class="col-lg-5 ml-auto">
          <h3 class="mb-3 side-title">Quick info</h3>
          <div class="quick-contact">

            <div class="d-flex">
              <span class="icon-room"></span>
              <address>
                {{ $general->address }}
              </address>
            </div>
            <div class="d-flex">
              <span class="icon-phone"></span>
              <a href="#">{{ $general->phone }}</a>
            </div>
            <div class="d-flex">
              <span class="icon-envelope"></span>
              <a href="mailto: {{ $general->email }}">{{ $general->email }}</a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection