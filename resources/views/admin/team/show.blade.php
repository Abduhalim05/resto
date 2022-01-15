@extends('layouts.admin')

    @section('content')
        <x-breadcrumb>
            Team / Show
        </x-breadcrumb->

        <div>
            <a class="btn btn-primary btn-sm col-md-1" href="{{route('admin.teams.create', $team->id)}}">
                <i class="fas fa-plus-circle">
                </i>
                Create
            </a><br>
            <a class="btn btn-info btn-sm col-md-1" href="{{route('admin.teams.edit', $team->id)}}">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <form action="{{route('admin.teams.destroy', $team->id)}}" method="post">
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
                        {{$team->name}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Job</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$team->job}}
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
                        <img src="/admin/images/team/{{$team->image}}" width="100px">
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Facebook</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$team->facebook}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Twitter</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$team->twitter}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Instagram</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$team->instagram}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Google</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$team->google}}
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
                        {{$team->created_at}}
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
                        {{$team->updated_at}}
                    </div>
                </div>
            </div>
        </div>

    @endsection
