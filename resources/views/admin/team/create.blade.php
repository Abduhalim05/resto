@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        Team / Create
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add new teamer</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.teams.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" required>
              </div>

              <div class="form-group">
                <label>Job</label>
                <input type="text" class="form-control" placeholder="Enter job" name="job" required>
              </div>

              <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control" placeholder="Enter facebook link" name="facebook" >
              </div>

              <div class="form-group">
                <label>Twitter</label>
                <input type="text" class="form-control" placeholder="Enter twitter link" name="twitter" >
              </div>

              <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" placeholder="Enter instagram link" name="instagram" >
              </div>

              <div class="form-group">
                <label>Google</label>
                <input type="text" class="form-control" placeholder="Enter google link" name="google" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
@endsection


