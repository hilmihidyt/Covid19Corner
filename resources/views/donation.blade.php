@extends('layouts.front')

@section('content')
<div class="hero-v1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mr-auto text-center text-lg-left">
          <h1 class="heading mb-3">Donasi</h1>
          <p class="mb-5">Hasil donasi akan diberikan untuk saudara kita yang terdampak covid19, tenaga medis dan untuk pembelian alat kesehatan seperti masker, handsanitizer, APD untuk kemudian dibagikan.</p>
        </div>
        <div class="col-lg-6">
          <figure class="illustration">
            <img src="{{ asset('assets/images/illustration.png') }}" alt="Image" class="img-fluid">
          </figure>
        </div>   
      </div>
    </div>
  </div>
  <div class="site-section">
    <div class="container">
      <div class="row">
        <form action="#" id="donation_form">
            <legend>Donasi</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="donor_name" class="form-control" id="donor_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="donor_email" class="form-control" id="donor_email">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="amount">Jumlah</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Rp.</div>
                        </div>
                        <input type="number" name="amount" class="form-control" id="amount" placeholder="Jumlah Donasi">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Catatan (Opsional)</label>
                        <input name="note" cols="30" rows="3" class="form-control" id="note">
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

<script>
   $("#donation_form").submit(function (event) {
       event.preventDefault();
       $.post("/api/donation", {
           _method: 'POST',
           _token: '{{ csrf_token() }}',
           donor_name: $('input#donor_name').val(),
           donor_email: $('input#donor_email').val(),
           donation_type: $('select#donation_type').val(),
           amount: $('input#amount').val(),
           note: $('textarea#note').val(),
       },
       function (data, status) {
           snap.pay(data.snap_token, {
               onSuccess: function (result) {
                   location.reload();
               },
               onPending: function (result) {
                   location.reload();
               },
               onError: function (result) {
                   location.reload();
               }
               
           });
           return false;
       });
   });
</script>

@endpush