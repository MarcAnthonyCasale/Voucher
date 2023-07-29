@extends('layouts.app')
@extends('layouts.nav')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="bg-light p-4 rounded">
                        <h1>Users</h1>
                        <div class="lead">
                            Manage your users here.
                        </div>
                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">#</th>
                                    <th scope="col" width="15%">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" width="10%">Roles</th>
                                    <th scope="col" width="1%" colspan="3"></th>    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach($user->roles as $role)
                                                <span class="badge bg-primary">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex">
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
