@extends('layout.master')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Biodata Manajemen</h3>
              </div>
              <!-- /.card-header -->
              @if (Session::has('success'))
              <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
              </div>
              @endif
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Biodata</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><p class="badge badge-info">@if($biodata) ada @else kosong @endif</p></td>

                    <td>

                      @if ($biodata)
                      <a href="{{ route('biodata.show', $biodata->id) }}" class="btn btn-block btn-info">Detail</a>
                      <a href="{{ route('biodata.edit', $biodata->id) }}" class="btn btn-block btn-warning">Edit</a>
                      @else
                      <a href="{{ route('biodata.create') }}" class="btn btn-block btn-success">Tambahkan</a>
                      @endif

                    </td>                  
                  </tr>
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