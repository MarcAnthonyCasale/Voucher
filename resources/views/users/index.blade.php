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
                        <h1>All Vouchers</h1>
                        <div class="lead">
                            Manage your vouchers here.
                            <a href="{{ url('/voucher/create')}}" class="btn btn-primary btn-sm offset-md-10">Create</a>
                        </div>
                        @if (session('status'))
                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">ID</th>
                                    <th scope="col" width="15%">Code</th>
                                    <th scope="col" width="20%">Time Created</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($vouchers as $voucher)
                                    <tr>
                                        <th scope="row">{{ $voucher->id }}</th>
                                        <td>{{ $voucher->code }}</td>
                                        <td>{{ $voucher->created_at }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{ route('voucher.show', $voucher->id) }}" class="btn btn-info btn-sm">Show</a> 
                                                </div>
                                                <div class="col">
                                                    <a href="{{ route('voucher.edit', $voucher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                </div>

                                                <div class="col">
                                                    <form method="POST" action="{{ url('delete-voucher',$voucher->id) }}">
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
