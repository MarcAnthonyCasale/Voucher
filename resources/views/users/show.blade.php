@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="top: 150px">
                <div class="card-header">
                    <h4>Voucher Show
                        <a href="{{ url('voucher') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body" style="padding:50px">
                    <div class="card-body" style="padding:50px">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="col-md-4">ID</td>
                                    <td><?= $voucher->id; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Voucher Code</td>
                                    <td><?= $voucher->code; ?></td>
                                </tr>
                                
                                <tr>
                                    <td class="col-md-4">Voucher Created</td>
                                    <td><?= $voucher->created_at; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Voucher Updated</td>
                                    <td><?= $voucher->updated_at; ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection