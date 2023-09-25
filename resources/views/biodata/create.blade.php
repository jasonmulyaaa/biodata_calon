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
                <h3 class="card-title">Tambahkan Biodata</h3>
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
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required >
                  </div>
                  <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="address" class="form-control" id="alamat" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="city">City/State/Zip</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                  </div>
                  <div class="form-group">
                    <label for="home_phone">Home Phone</label>
                    <input type="tel" name="home_phone" class="form-control" id="home_phone" placeholder="Home Phone" required>
                  </div>
                  <div class="form-group">
                    <label for="cell_phone">Cell Phone</label>
                    <input type="tel" name="cell_phone" class="form-control" id="cell_phone" placeholder="Cell Phone" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label for="applied_position">Applied Position</label>
                    <input type="text" name="applied_position" class="form-control" id="applied_position" placeholder="Applied Position" required>
                  </div>
                  <div class="form-group">
                    <label for="salary">Expected Salary (Rp)</label>
                    <input type="number" name="salary" class="form-control" id="salary" placeholder="Salary" required>
                  </div>
                <!-- /.card-body -->
                <div class="form-group">
                  <label for="education">Education</label>
                  <table class="table" id="table_pendidikan">
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
                      <tr>
                        <td>
                          <select name="inputs[0][pendidikan_terakhir]" class="form-control" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </td>
                        {{-- <td>
                    <input type="text" name="inputs[0][pendidikan_terakhir]" class="form-control" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
                        </td> --}}
                        <td>
                    <input type="text" name="inputs[0][intuisi_akademik]" class="form-control" id="intuisi_akademik" placeholder="Intuisi Akademik" required>
                        </td>
                        <td>
                    <input type="text" name="inputs[0][jurusan]" class="form-control" id="jurusan" placeholder="Jurusan" required>
                        </td>
                        <td>
                    <input type="number" name="inputs[0][tahun_lulus]" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" required>
                        </td>
                        <td>
                    <input type="text" name="inputs[0][ipk]" class="form-control" id="ipk" placeholder="IPK" required>
                        </td>
                        <td>
                  <button type="button" name="add" id="add_pendidikan" class="btn btn-success">Add</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <label for="education">Riwayat Pelatihan</label>
                  <table class="table" id="table_pelatihan">
                    <thead class="table-danger">
                      <tr>
                        <td>Nama Kursus / Seminar</td>
                        <td>Sertifikat (ada/tidak)</td>
                        <td>Tahun</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                    <input type="text" name="inputs1[0][nama_pelatihan]" class="form-control" id="nama_pelatihan" placeholder="Nama Pelatihan" required>
                        </td>
                        <td>
                          <select name="inputs1[0][sertifikat]" class="form-control" required>
                            <option value="ada">Ada</option>
                            <option value="tidak">Tidak</option>
                          </select>
                        </td>
                        <td>
                    <input type="text" name="inputs1[0][tahun]" class="form-control" id="tahun" placeholder="Tahun" required>
                        </td>
                        <td>
                  <button type="button" name="add" id="add_pelatihan" class="btn btn-success">Add</button>
                        </td>
                      </tr>
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
                      <tr>
                        <td>
                    <input type="text" name="inputs2[0][nama_perusahaan]" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
                        </td>
                        <td>
                          <input type="text" name="inputs2[0][posisi]" class="form-control" id="posisi" placeholder="Posisi Terakhir" required>
                        </td>
                        <td>
                    <input type="number" name="inputs2[0][pendapatan]" class="form-control" id="pendapatan" placeholder="Pendapatan Terakhir" required>
                        </td>
                        <td>
                          <input type="number" name="inputs2[0][tahun]" class="form-control" id="tahun" placeholder="Tahun" required>
                        </td>
                        <td>
                  <button type="button" name="add" id="add_pekerjaan" class="btn btn-success">Add</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="form-group">
                  <label for="skill">Skill</label>
                  <textarea type="text" name="skill" class="form-control" id="skill" placeholder="Skill" required></textarea>
                </div>
                <div class="form-group">
                  <strong>Gambar</strong>
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  <div class="input-group mb-3">
                      <input type="file" class="form-control" @error('gambar') is-invalid @enderror name="gambar" id="image" onchange="previewImage()">
                      @error('gambar')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('biodata.index') }}" class="btn btn-default">Back</a>
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