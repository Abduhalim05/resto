@extends('layouts.admin')

    @section('content')
        <x-breadcrumb>
            Meals / Show
        </x-breadcrumb->

        <div>
            <a class="btn btn-primary btn-sm col-md-1" href="{{route('admin.meals.create', $meal->id)}}">
                <i class="fas fa-plus-circle">
                </i>
                Create
            </a><br>
            <a class="btn btn-info btn-sm col-md-1" href="{{route('admin.meals.edit', $meal->id)}}">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <form action="{{route('admin.meals.destroy', $meal->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm col-md-1 ">
                    <i class="fas fa-trash"></i>
                    Delete
                </button>
            </form>
        </div>
        <br><br><br>
        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Name</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$meal->name}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Description</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$meal->description}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Short Description</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$meal->shortDesc}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Price</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$meal->price}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Image</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <img src="/admin/images/meals/{{$meal->image}}" width="100px">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Type</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">

                    @if($meal->status==1)
                        <span class="badge badge-success">Special</span>
                    @else
                        <span class="badge badge-danger">Ordinary</span>
                    @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Meal</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">

                    @if($meal->meal_id==1)
                        <span class="badge badge-success">Breakfast</span>
                    @elseif ($meal->meal_id==2)
                        <span class="badge badge-danger">Lunch</span>
                    @else
                        <span class="badge badge-warning">Dinner</span>
                    @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Created At</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$meal->created_at}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Updated At</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$meal->updated_at}}
                    </div>
                </div>
            </div>
        </div>

    @endsection
