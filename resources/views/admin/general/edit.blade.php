@extends('layouts.admin')

@section('styles')
<style>
   .picture-container {
  position: relative;
  cursor: pointer;
  text-align: center;
}
 .picture {
  width: 800px;
  height: 400px;
  background-color: #999999;
  border: 4px solid #CCCCCC;
  color: #FFFFFF;
  /* border-radius: 50%; */
  margin: 5px auto;
  overflow: hidden;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}
.picture:hover {
  border-color: #2ca8ff;
}
.picture input[type="file"] {
  cursor: pointer;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0 !important;
  position: absolute;
  top: 0;
  width: 100%;
}
.picture-src {
  width: 100%;
  height: 100%;
}

</style>

@endsection

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.general.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">

        <div class="form-group">

            <div class="picture-container">
    
                <div class="picture">
    
                    <img src="{{asset('storage/' . $general->logo)}}" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>
    
                    <input type="file" id="wizard-picture" name="logo" class="form-control {{$errors->first('logo') ? "is-invalid" : "" }} ">
    
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}    
                    </div>  
    
                </div>
    
                <h6>Pilih Logo</h6>
    
            </div>
    
        </div>

        <div class="form-group ml-5">

            <label for="favicon" class="col-sm-2 col-form-label">Favicon</label>

            <div class="col-sm-7">

                <img src="{{asset('storage/' . $general->favicon)}}" alt="">
                <input type="file" name='favicon' class="form-control {{$errors->first('favicon') ? "is-invalid" : "" }} " value="{{old('favicon') ? old('favicon') : $general->favicon}}" id="favicon" placeholder="Title">

                <div class="invalid-feedback">
                    {{ $errors->first('favicon') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="title" class="col-sm-2 col-form-label">Title</label>

            <div class="col-sm-7">

                <input type="text" name='title' class="form-control {{$errors->first('title') ? "is-invalid" : "" }} " value="{{old('title') ? old('title') : $general->title}}" id="title" placeholder="Title">

                <div class="invalid-feedback">
                    {{ $errors->first('title') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-7">

                <input type="text" name='name' class="form-control {{$errors->first('name') ? "is-invalid" : "" }} " value="{{old('name') ? old('name') : $general->name}}" id="name" placeholder="Name">

                <div class="invalid-feedback">
                    {{ $errors->first('name') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="address" class="col-sm-2 col-form-label">Address</label>

            <div class="col-sm-7">

                <input type="text" name='address' class="form-control {{$errors->first('address') ? "is-invalid" : "" }} " value="{{old('address') ? old('address') : $general->address}}" id="address" placeholder="Address">

                <div class="invalid-feedback">
                    {{ $errors->first('address') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="email" class="col-sm-2 col-form-label">E-mail</label>

            <div class="col-sm-7">

                <input type="email" name='email' class="form-control {{$errors->first('email') ? "is-invalid" : "" }} " value="{{old('email') ? old('email') : $general->email}}" id="email" placeholder="Email">

                <div class="invalid-feedback">
                    {{ $errors->first('email') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="phone" class="col-sm-2 col-form-label">Phone</label>

            <div class="col-sm-7">

                <input type="text" name='phone' class="form-control {{$errors->first('phone') ? "is-invalid" : "" }} " value="{{old('phone') ? old('phone') : $general->phone}}" id="phone" placeholder="098765432">

                <div class="invalid-feedback">
                    {{ $errors->first('phone') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>

            <div class="col-sm-7">

                <input type="text" name='twitter' class="form-control {{$errors->first('twitter') ? "is-invalid" : "" }} " value="{{old('twitter') ? old('twitter') : $general->twitter}}" id="twitter" placeholder="Twitter">

                <div class="invalid-feedback">
                    {{ $errors->first('twitter') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>

            <div class="col-sm-7">

                <input type="text" name='facebook' class="form-control {{$errors->first('facebook') ? "is-invalid" : "" }} " value="{{old('facebook') ? old('facebook') : $general->facebook}}" id="facebook" placeholder="Facebook">

                <div class="invalid-feedback">
                    {{ $errors->first('facebook') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>

            <div class="col-sm-7">

                <input type="text" name='instagram' class="form-control {{$errors->first('instagram') ? "is-invalid" : "" }} " value="{{old('instagram') ? old('instagram') : $general->instagram}}" id="instagram" placeholder="Instagram">

                <div class="invalid-feedback">
                    {{ $errors->first('instagram') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>

            <div class="col-sm-7">

                <input type="text" name='linkedin' class="form-control {{$errors->first('linkedin') ? "is-invalid" : "" }} " value="{{old('linkedin') ? old('linkedin') : $general->linkedin}}" id="linkedin" placeholder="Linkedin">

                <div class="invalid-feedback">
                    {{ $errors->first('linkedin') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="tawkto" class="col-sm-2 col-form-label">Tawk To</label>

            <div class="col-sm-7">
                <textarea name="tawkto" id="tawkto" class="form-control {{$errors->first('tawkto') ? "is-invalid" : "" }} " cols="30" rows="10">{{old('tawkto') ? old('tawkto') : $general->tawkto}}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('tawkto') }}    
                </div>   

            </div>

        </div>


        <div class="form-group ml-5">

            <label for="footer" class="col-sm-2 col-form-label">Footer</label>

            <div class="col-sm-7">

                <input type="text" name='footer' class="form-control {{$errors->first('footer') ? "is-invalid" : "" }} " value="{{old('footer') ? old('footer') : $general->footer}}" id="footer" placeholder="Footer">

                <div class="invalid-feedback">
                    {{ $errors->first('footer') }}    
                </div>   

            </div>

        </div>
        
        <div class="form-group ml-5">

            <label for="gverification" class="col-sm-2 col-form-label">Google Verification</label>

            <div class="col-sm-7">

                <input type="text" name='gverification' class="form-control {{$errors->first('gverification') ? "is-invalid" : "" }} " value="{{old('gverification') ? old('gverification') : $general->gverification}}" id="gverification" placeholder="google verification">

                <div class="invalid-feedback">
                    {{ $errors->first('gverification') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>

            <div class="col-sm-7">

                <input type="text" name='keyword' class="form-control {{$errors->first('keyword') ? "is-invalid" : "" }} " value="{{old('keyword') ? old('keyword') : $general->keyword}}" id="keyword" placeholder="Keyword">

                <div class="invalid-feedback">
                    {{ $errors->first('keyword') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="meta_desc" class="col-sm-2 col-form-label">Meta Desc</label>

            <div class="col-sm-7">

                <input type="text" name='meta_desc' class="form-control {{$errors->first('meta_desc') ? "is-invalid" : "" }} " value="{{old('meta_desc') ? old('meta_desc') : $general->meta_desc}}" id="meta_desc" placeholder="Meta Description">

                <div class="invalid-feedback">
                    {{ $errors->first('meta_desc') }}    
                </div>   

            </div>

        </div>
   
        <div class="form-group ml-5">
   
            <div class="col-sm-3">
   
                <button type="submit" class="btn btn-primary">Update</button>
   
            </div>
   
        </div>

    </div>      

  </form>
@endsection

@push('scripts')
<script>
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
      readURL(this);
  });
  //Function to show image before upload

function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
      }
      reader.readAsDataURL(input.files[0]);
  }
}
</script>
  
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
@endpush