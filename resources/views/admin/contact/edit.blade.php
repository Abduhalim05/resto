@extends('layouts.admin')

@section('content')

    <x-breadcrumb>
        Contact / Edit
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Contact Edit</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.contact.update', $contact->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$contact->name}}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" value="{{$contact->email}}" name="email" >
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="phone" name="phone" value="{{$contact->phone}}" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
               <textarea name="message" id="postBody" class="form-control" cols="30" rows="10" >{{$contact->message}}</textarea>
              </div>
              <div class="form-group">
                <label for="">Activasion</label>
                <select name="status" class="form-control" id="">
                    <option  {{$contact->status==1 ? 'selected' : ''  }} value="1">Active</option>
                    <option {{$contact->status==0 ? 'selected' : ''  }}  value="0">Inactive</option>
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
