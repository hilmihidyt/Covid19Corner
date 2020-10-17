@extends('layouts.admin')

@section('content')
              <!-- Page Heading -->
              <h1 class="h3 mb-2 text-gray-800">Donasi</h1>
            
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="table-responsive col-md-8">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Jumlah</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                     
                      <tbody>
                        @foreach ($donasi as $donasi)
                        <tr>
                          <td>{{ $donasi->donor_name }}</td>
                          <td>{{ $donasi->donor_email }}</td>
                          <td>{{ $donasi->amount }}</td>
                          <td>{{ $donasi->status }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection