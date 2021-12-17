@extends('admin.common.master')

  <!-- Content Wrapper. Contains page content -->
  @section('content')
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <table id="studentlisting" class="table">
            <thead>
              <tr>
                <th scope="col">Student Name</th>
                <th scope="col">ID</th>
                <th scope="col">Subject</th>
                <th scope="col">Semister</th>
                <th scope="col">Section</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
          </table>

      </section>

    <!-- /.content -->
  </div>



  <script>
      $(document).ready( function () {
          $.noConflict();
    $('#studentlisting').DataTable();
    } );
  </script>

  @endsection
  <!-- /.content-wrapper -->

