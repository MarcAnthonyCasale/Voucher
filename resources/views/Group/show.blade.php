@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="top: 150px">
                <div class="card-header">
                    <h4>Group Show
                        <a href="{{ url('group') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body" style="padding:50px">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td class="col-md-4">ID</td>
                                <td><?= $group->id; ?></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Group Name</td>
                                <td><?= $group->name; ?></td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-4">Created_at</td>
                                <td><?= $group->created_at; ?></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Updated_at</td>
                                <td><?= $group->updated_at; ?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection