@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="top: 150px">
                <div class="card-header">
                    <h4>Edit & Update Group
                        <a href="{{ url('group') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-body" style="padding:50px">
              
                    <form method="POST" action="{{url('update-group/'.$group->id)}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <input name="name" type="text" class="form-control" value="{{$group->name}}"">
                                        
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                              
                            </div>
                        </div>

                      
                        <div class="row mb-0">
                            <div class="col-md-6 offset-sm-8">
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection