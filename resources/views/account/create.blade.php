@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('account.store')}}" method="post">
            @csrf
            <div class="flex-form-group form-group">
                <label for="profile_picture">Profiel afbeelding</label>
                <input type="file" name="profile_picture" value="image">
            </div>
            <div class="flex-form-group form-group">
                <label for="profile_name">Naam</label>
                <input class="input-text-small" type="text" name="profile_name" placeholder="Je naam">
            </div>
            <div class="form-group">
                <label for="">Interesses</label>
                <div>
                    <input type="checkbox" name="interest_sports" value="Sporten">
                    <label for="interest_sports">Sporten</label>
                </div>
                <div>
                    <input type="checkbox" name="interest_music" value="Muziek">
                    <label class=" " for="interestMusic">Muziek</label>
                </div>
                <div>
                    <input type="checkbox" name="interest_animal" value="Dieren">
                    <label for="interest_animals">Dieren</label>
                </div>
                <div>
                    <input type="checkbox" name="interest_technology" value="Technologie">
                    <label for="interest_technology">Technologie</label>
                </div>
                <div>
                    <input type="checkbox" name="interest_recreation" value="Recreatie">
                    <label for="interest_recreation">Recreatie</label>
                </div>
            </div>
            <div class="flex-form-group form-group">
                <label for="profile_biography">Biografie</label>
                <input class="input-text-big" type="text" name="profile_biography">
            </div>
            <input type="submit">
        </form>
    </div>
@endsection