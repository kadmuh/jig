@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header font-weight-bold "><div class="text-capitalize">{{ __('Welcome') }} {{ Auth::user()->name }}</div> <p>{{ Auth::user()->email }}</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{ __('You are now logged in!') }}
                </div>
                <h3  class="card-body font-weight-bold text-capitalize">Users Details</h3>
                <div class="row">
                <div class="col-sm-12 container">
                       
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td colspan = 2>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a  class="btn btn-info text-light" href ='edit/{{ $user->id }}'>Edit</a>
                                <a class="btn btn-danger" href = 'delete/{{ $user->id }}'>Delete</a>
                            
                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
