@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        About / Edit
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">About Edit</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.abouts.update', $item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
               <textarea name="body" id="postBody" class="form-control" cols="30" rows="10" required>{{$item->body}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" id="">
                    <option  {{$item->status==1 ? 'selected' : ''  }} value="1">Active</option>
                    <option {{$item->status==0 ? 'selected' : ''  }}  value="0">Inactive</option>
                </select>
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

