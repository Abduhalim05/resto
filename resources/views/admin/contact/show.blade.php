@extends('layouts.admin')

    @section('content')
        <x-breadcrumb>
            Contact / Show
        </x-breadcrumb->

        <div>
            <a class="btn btn-info btn-sm col-md-1" href="{{route('admin.contact.edit', $contact->id)}}">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <form action="{{route('admin.contact.destroy', $contact->id)}}" method="post">
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
                        {{$contact->name}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Email</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$contact->email}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Phone</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$contact->phone}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Data</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$contact->data}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Time</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$contact->time}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Person</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$contact->person}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Message</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        {{$contact->message}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex p-3">
                <h4>Activation</h4>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                    @if($contact->status==1)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Inactive</span>
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
                        {{$contact->created_at}}
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
                        {{$contact->updated_at}}
                    </div>
                </div>
            </div>
        </div>

    @endsection
