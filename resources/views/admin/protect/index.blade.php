@extends('layouts.admin')
@section('styles')
<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1 class="h3 mb-2 text-gray-800">Pencegahan</h1>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.protect.store') }}" method="POST">
            @csrf
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
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-7">
                    <select name="type" id="type" class="form-control {{$errors->first('type') ? "is-invalid" : "" }} ">
                        <option disabled selected>Pilih Type!</option>
                        <option value="1">Do</option>
                        <option value="2">Avoid</option>
                    </select>
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}    
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
        <div class="table-responsive col-md-6">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=0;
                    @endphp
                    @foreach ($protect as $protect)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $protect->title }}</td>
                        <td>{{ $protect->type == 1 ? 'Do' : 'Avoid' }}</td>
                        <td>
                            <a href="{{route('admin.protect.edit', [$protect->id])}}" class="btn btn-info btn-sm"> Edit </a>
                            <form method="POST" action="{{route('admin.protect.destroy', [$protect->id])}}" class="d-inline" onsubmit="return confirm('Delete this category permanently?')">
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