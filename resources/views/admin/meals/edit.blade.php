@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        Meals / Edit
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Meals Edit</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.meals.update', $meal->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Meal Name" name="name" value="{{$meal->name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
               <textarea name="description" id="postBody" class="form-control" cols="30" rows="10" >{{$meal->description}}</textarea>
              </div>
              <div class="form-group">
                <label>Short-Description</label>
                <input type="text" class="form-control" placeholder="Enter short description" value="{{$meal->shortDesc}}" name="shortDesc" >
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter the price" name="price" value="{{$meal->price}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
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
                    <option  {{$meal->status==1 ? 'selected' : ''  }} value="1">Special dish</option>
                    <option {{$meal->status==0 ? 'selected' : ''  }}  value="0">Ordinary</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Choose one</label>
                <select name="meal_id" class="form-control" id="">
                    <option  {{$meal->meal_id==1 ? 'selected' : ''  }} value="1">Breakfast</option>
                    <option {{$meal->meal_id==2 ? 'selected' : ''  }}  value="2">Lunch</option>
                    <option {{$meal->meal_id==3 ? 'selected' : ''  }}  value="3">Dinner</option>
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


