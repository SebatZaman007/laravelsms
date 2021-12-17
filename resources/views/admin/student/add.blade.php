@extends('admin.common.master')

  <!-- Content Wrapper. Contains page content -->
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif

        <form action="{{route('addData')}}" method="POST">

            @csrf


        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Information</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <div class="form-group">
                    <label for="inputName">Student Name</label>
                    <input type="text" name="student_name" id="inputName" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputName">ID</label>
                    <input type="text" name="id_number" id="inputName" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputStatus">Subject</label>
                    <select id="inputStatus" class="form-control custom-select" name="subject">
                      <option selected="" disabled="">Select one</option>
                      <option value="CSE">CSE</option>
                      <option value="EEE">EEE</option>
                      <option value="Civil">Civil</option>
                      <option value="Arcitechture">Arcitechture</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Semister</label>
                    <input type="text" id="inputName" name="semister" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputStatus">Section</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="section"name="Reguler">
                      <label class="form-check-label">Reguler</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="section" name="Evening" checked="">
                      <label class="form-check-label">Evening</label>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="inputDescription">Address</label>
                  <textarea id="inputDescription" name="address" class="form-control" rows="4"></textarea>
                </div>
                <input type="submit" value="Save" class="btn btn-success float-right">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </form>
      </section>

    <!-- /.content -->
  </div>

  @endsection
  <!-- /.content-wrapper -->

