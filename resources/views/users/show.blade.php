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
              
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <input name="code" type="text" class="form-control" value="{{$voucher->code}}" readonly>
                                        
                                    </div>
                                   
                                </div>
                              
                            </div>
                        </div>

                      
                        <div class="row mb-0">
                            <div class="col-md-6 offset-sm-8">
                               
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection