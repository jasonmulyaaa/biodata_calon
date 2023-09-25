@extends('layout.master')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Biodata Manajemen (Admin)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Tempat</th>
                    <th>Posisi yang Dilamar</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($biodata as $biodata)
                        
                  <tr>
                    <td>{{ $biodata->first_name }} {{ $biodata->last_name }}</td>
                    <td>{{ $biodata->city }}</td>
                    <td>{{ $biodata->applied_position }}</td>
                    <td>
                      <a href="{{ route('dashboard.show', $biodata->id) }}" class="btn btn-block btn-info">Detail</a>
                    </td>                  
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@endsection