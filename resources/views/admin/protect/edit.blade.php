@extends('layouts.admin')

@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<form action="{{ route('admin.protect.update',$protect->id) }}" method="POST">
    @csrf
    <div class="container">
        <div class="form-group ml-5">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name='title' class="form-control {{$errors->first('title') ? "is-invalid" : "" }} " value="{{old('title') ? old('title') : $protect->title}}" id="title" placeholder="Title">
                <div class="invalid-feedback">
                    {{ $errors->first('title') }}    
                </div>
            </div>
        </div>
        <div class="form-group ml-5">
            <label for="type" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <select name="type" id="type" class="form-control {{$errors->first('type') ? "is-invalid" : "" }} ">
                    <option disabled selected>Pilih Type!</option>
                    <option {{$protect->type == '1' ? 'selected' : ''}} value="1">Do</option>
                    <option {{$protect->type == '2' ? 'selected' : ''}} value="2">Avoid</option>
                </select>
                <div class="invalid-feedback">
                    {{ $errors->first('desc') }}    
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
