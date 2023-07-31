@extends('layouts.app')
@extends('layouts.nav')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">   
                    {{ __('Dashboard') }}

                </div>

                <div class="card-body">
                    <div class="bg-light p-4 rounded">
                        <h1>Group Member</h1>
                        <div class="lead">
                            Manage your members here.
                        </div>
                        @if (session('status'))
                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">ID</th>
                                    <th scope="col" width="15%">User Name</th>
                                    <th scope="col" width="20%">Time Joined</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <th scope="row">{{ $member->id }}</th>
                                        <td>{{ $member->user()->first()->name }}</td>
                                        <td>{{ $member->created_at }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <form method="POST" action="{{ url('delete-member',$member->id) }}">
                                                    @csrf
                                                        @method('delete')
                                                        <button type='submit' class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')"  data-toggle="tooltip">
                                                        <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
