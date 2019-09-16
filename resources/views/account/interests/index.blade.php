@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justfy-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Interests') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{route('interests.store')}}">
                            @csrf
                            <div class="form-group row">
                                <input type="checkbox" name="interests[]" value="1">
                                <label for="interestSports">Sporten</label>
                            </div>
                            <div class="form-group row">
                                <input type="checkbox" name="interests[]" value="2">
                                <label for="interestMusic">Muziek</label>
                            </div>
                            <div class="form-group row"></div>
                                <input type="checkbox" name="interests[]" value="3">
                                <label for="interestAnimals">Dieren</label>
                            <div class="form-group row">
                                <input type="checkbox" name="interests[]" value="4">
                                <label for="interestTechnology">Technologie</label>
                            </div>
                            <div class="form-group row">
                                <input type="checkbox" name="interests[]" value="5">
                                <label for="interestRecreation">Recreatie</label>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection