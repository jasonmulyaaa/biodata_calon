<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biodata</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('') }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('') }}assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Manajemen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('') }}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if(Auth::user()->role == 'user')
          <li class="nav-item">
            <a href="{{ route('biodata.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Biodata
              </p>
            </a>
          </li>
          @elseif(Auth::user()->role == 'admin')
          <li class="nav-item">
            <a href="{{ route('dashboard.index') }}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                List Biodata
              </p>
            </a>
          </li>
          @endif
          <li class="nav-header">Lainnya</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Data</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @yield('content')


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('') }}assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('') }}assets/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('') }}assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('') }}assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('') }}assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('') }}dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  var i = 0;
  $('#add_pendidikan').click(function(){
    ++i;
    $('#table_pendidikan').append(
      `
      <tr>
        <td>
                          <select name="inputs[`+i+`][pendidikan_terakhir]" class="form-control" required>
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
                    <td>
                <input type="text" name="inputs[`+i+`][intuisi_akademik]" class="form-control" id="intuisi_akademik" placeholder="Intuisi Akademik" required>
                    </td>
                    <td>
                <input type="text" name="inputs[`+i+`][jurusan]" class="form-control" id="jurusan" placeholder="Jurusan" required>
                    </td>
                    <td>
                <input type="number" name="inputs[`+i+`][tahun_lulus]" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" required>
                    </td>
                    <td>
                <input type="text" name="inputs[`+i+`][ipk]" class="form-control" id="ipk" placeholder="IPK" required>
                    </td>
                    <td>
              <button type="submit" class="btn btn-danger remove-table-pendidikan">Remove</button>
                    </td>
      </tr>
      `
    );
  });

  $(document).on('click', '.remove-table-pendidikan', function(){
    $(this).parents('tr').remove();
  });


</script>
<script>
    var x = 0;
  $('#add_pelatihan').click(function(){
    ++x;
    $('#table_pelatihan').append(
      `
      <tr>
                        <td>
                    <input type="text" name="inputs1[`+x+`][nama_pelatihan]" class="form-control" id="nama_pelatihan" placeholder="Nama Pelatihan" required>
                        </td>
                        <td>
                          <select name="inputs1[`+x+`][sertifikat]" class="form-control">
                            <option value="ada">Ada</option>
                            <option value="tidak">Tidak</option>
                          </select>
                        </td>
                        <td>
                    <input type="text" name="inputs1[`+x+`][tahun]" class="form-control" id="tahun" placeholder="Tahun" required>
                        </td>
                        <td>
                  <button type="button" name="add" id="add_pelatihan" class="btn btn-danger remove-table-pelatihan">Remove</button>
                        </td>
      </tr>
      `
    );
  });

  $(document).on('click', '.remove-table-pelatihan', function(){
    $(this).parents('tr').remove();
  });
</script>
<script>
  var y = 0;
$('#add_pekerjaan').click(function(){
  ++y;
  $('#table_pekerjaan').append(
    `
    <tr>
                        <td>
                    <input type="text" name="inputs2[`+y+`][nama_perusahaan]" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
                        </td>
                        <td>
                          <input type="text" name="inputs2[`+y+`][posisi]" class="form-control" id="posisi" placeholder="Posisi Terakhir" required>
                        </td>
                        <td>
                    <input type="number" name="inputs2[`+y+`][pendapatan]" class="form-control" id="pendapatan" placeholder="Pendapatan Terakhir" required>
                        </td>
                        <td>
                          <input type="number" name="inputs2[`+y+`][tahun]" class="form-control" id="tahun" placeholder="Tahun" required>
                        </td>
                        <td>
                  <button type="button" name="add" id="add_pekerjaan" class="btn btn-danger remove-table-pekerjaan">Remove</button>
                        </td>
                      </tr>
    `
  );
});

$(document).on('click', '.remove-table-pekerjaan', function(){
  $(this).parents('tr').remove();
});
</script>
<script>
  function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function (oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
  }

</script>
</body>
</html>
