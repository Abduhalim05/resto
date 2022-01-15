@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        Meals / Create
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Meals Create</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.meals.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Meal Name" name="name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
               <textarea name="description" id="postBody" class="form-control" cols="30" rows="10" required></textarea>
              </div>
              <div class="form-group">
                <label>Short-Description</label>
                <input type="text" class="form-control" placeholder="Enter short description" name="shortDesc" required>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter the price" name="price" required>
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
              <div class="form-group">
                <label for="">Choose meal-type</label>
                <select name="status" class="form-control" id="">
                    <option value="0">Ordinary</option>
                    <option value="1">Special dish</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Choose one</label>
                <select name="meal_id" class="form-control" id="">
                    <option value="1">Breakfast</option>
                    <option value="2">Lunch</option>
                    <option value="3">Dinner</option>
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


