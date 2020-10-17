@extends('layouts.admin')
@section('styles')
<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1 class="h3 mb-2 text-gray-800">Gejala</h1>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.symptom.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="logo" class="col-sm-2 col-form-label">Thumbnail</label>
                <div class="col-sm-7">
                    <input type="file" name='logo' class="form-control {{$errors->first('logo') ? "is-invalid" : "" }} " value="{{old('logo')}}" id="logo" placeholder="logo">
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-7">
                    <input type="text" name='title' class="form-control {{$errors->first('title') ? "is-invalid" : "" }} " value="{{old('title')}}" id="title" placeholder="Title">
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="desc" class="col-sm-2 col-form-label">Desc</label>
                <div class="col-sm-7">
                    <input type="text" name='desc' class="form-control {{$errors->first('desc') ? "is-invalid" : "" }} " value="{{old('desc')}}" id="desc" placeholder="Description">
                    <div class="invalid-feedback">
                        {{ $errors->first('desc') }}    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive col-md-10">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=0;
                    @endphp
                    @foreach ($symptom as $symptom)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$symptom->logo) }}" width="100px" height="100px" alt="">
                        </td>
                        <td>{{ $symptom->title }}</td>
                        <td>{{ $symptom->desc }}</td>
                        <td>
                            <a href="{{route('admin.symptom.edit', [$symptom->id])}}" class="btn btn-info btn-sm"> Edit </a>
                            <form method="POST" action="{{route('admin.symptom.destroy', [$symptom->id])}}" class="d-inline" onsubmit="return confirm('Delete this category permanently?')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endpush