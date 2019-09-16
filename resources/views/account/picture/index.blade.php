@extends('layouts.app')

@section

    <div class="container">
        <div class="row justfy-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Interests') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{route('interests.store')}}">
                            @csrf
                            <div class="form-group row">


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection