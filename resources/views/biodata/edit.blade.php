@extends('layout.master')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Biodata Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif
  
                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                  <p>{{ Session::get('success') }}</p>
                </div>
                @endif

                <div class="card-body">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required value="{{ $biodata->first_name }}">
                  </div>
                  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required value="{{ $biodata->last_name }}">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="address" class="form-control" id="alamat" placeholder="Alamat" required value="{{ $biodata->address }}">
                  </div>
                  <div class="form-group">
                    <label for="city">City/State/Zip</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City" required value="{{ $biodata->city }}">
                  </div>
                  <div class="form-group">
                    <label for="home_phone">Home Phone</label>
                    <input type="tel" name="home_phone" class="form-control" id="home_phone" placeholder="Home Phone" required value="{{ $biodata->home_phone }}">
                  </div>
                  <div class="form-group">
                    <label for="cell_phone">Cell Phone</label>
                    <input type="tel" name="cell_phone" class="form-control" id="cell_phone" placeholder="Cell Phone" required value="{{ $biodata->cell_phone }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" required value="{{ $biodata->email }}">
                  </div>
                  <div class="form-group">
                    <label for="applied_position">Applied Position</label>
                    <input type="text" name="applied_position" class="form-control" id="applied_position" placeholder="Applied Position" required value="{{ $biodata->applied_position }}">
                  </div>
                  <div class="form-group">
                    <label for="salary">Expected Salary (Rp)</label>
                    <input type="number" name="salary" class="form-control" id="salary" placeholder="Salary" required value="{{ $biodata->salary }}">
                  </div>
                <div class="form-group">
                  <table class="table" id="table">
                    <thead class="table-danger">
                      <tr>
                        <td>Jenjang Pendidikan Terakhir</td>
                        <td>Nama Intitusi Akademik</td>
                        <td>Jurusan</td>
                        <td>Tahun Lulus</td>
                        <td>IPK</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($biodata->pendidikan as $pendidikan)
                      <tr>
                        <td>
                    <input type="text" name="inputs[0][pendidikan_terakhir]" class="form-control" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required value="{{ $pendidikan->pendidikan_terakhir }}">
                        </td>
                        <td>
                    <input type="text" name="inputs[0][intuisi_akademik]" class="form-control" id="intuisi_akademik" placeholder="Intuisi Akademik" required value="{{ $pendidikan->intuisi_akademik }}">
                        </td>
                        <td>
                    <input type="text" name="inputs[0][jurusan]" class="form-control" id="jurusan" placeholder="Jurusan" required value="{{ $pendidikan->jurusan }}">
                        </td>
                        <td>
                    <input type="number" name="inputs[0][tahun_lulus]" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" required value="{{ $pendidikan->tahun_lulus }}">
                        </td>
                        <td>
                    <input type="number" name="inputs[0][ipk]" class="form-control" id="ipk" placeholder="IPK" required value="{{ $pendidikan->ipk }}">
                        </td>
                        <td>
                  <button type="button" name="add" id="add_pendidikan" class="btn btn-success">Add</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <table class="table" id="table">
                    <thead class="table-danger">
                      <tr>
                        <td>Nama Kursus / Seminar</td>
                        <td>Sertifikat (ada/tidak)</td>
                        <td>Tahun</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($biodata->pelatihan as $pelatihan)
                      <tr>
                        <td>
                    <input type="text" name="inputs1[0][nama_pelatihan]" class="form-control" id="nama_pelatihan" placeholder="Nama Pelatihan" required value="{{ $pelatihan->nama_pelatihan }}">
                        </td>
                        <td>
                    <input type="text" name="inputs1[0][tahun]" class="form-control" id="sertifikat" placeholder="Sertifikat" required value="{{ $pelatihan->sertifikat }}">
                        </td>
                        <td>
                    <input type="text" name="inputs1[0][tahun]" class="form-control" id="tahun" placeholder="Tahun" required value="{{ $pelatihan->tahun }}">
                        </td>
                        <td>
                            <button type="button" name="add" id="add_pelatihan" class="btn btn-success">Add</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                    <label for="education">Riwayat Pekerjaan</label>
                    <table class="table" id="table_pekerjaan">
                      <thead class="table-danger">
                        <tr>
                          <td>Nama Perusahaan</td>
                          <td>Posisi Terakhir</td>
                          <td>Pendapatan Terakhir</td>
                          <td>Tahun</td>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($biodata->pekerjaan as $pekerjaan)
                        <tr>
                          <td>
                      <input type="text" name="inputs2[0][nama_perusahaan]" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" required value="{{ $pekerjaan->nama_perusahaan }}">
                          </td>
                          <td>
                            <input type="text" name="inputs2[0][posisi]" class="form-control" id="posisi" placeholder="Posisi Terakhir" required value="{{ $pekerjaan->posisi }}">
                          </td>
                          <td>
                      <input type="number" name="inputs2[0][pendapatan]" class="form-control" id="pendapatan" placeholder="Pendapatan Terakhir" required value="{{ $pekerjaan->pendapatan }}">
                          </td>
                          <td>
                            <input type="number" name="inputs2[0][tahun]" class="form-control" id="tahun" placeholder="Tahun" required value="{{ $pekerjaan->tahun }}">
                          </td>
                        <td>
                            <button type="button" name="add" id="add_pekerjaan" class="btn btn-success">Add</button>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </form>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('biodata.index') }}" class="btn btn-info">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

                  </div>
                  <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection