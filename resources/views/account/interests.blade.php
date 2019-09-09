@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="">
            <div class="interests-form-group">
                <input type="checkbox" name="interestSports" value="Sporten">
                <label for="interestSports">Sporten</label></div>
            <div class="interests-form-group">
                <input type="checkbox" name="interestMusic" value="Muziek">
                <label for="interestMusic">Muziek</label></div>
            <div class="interests-form-group">
                <input type="checkbox" name="interest" value="Dieren">
                <label for="interestAnimals">Dieren</label></div>
            <div class="interests-form-group">
                <input type="checkbox" name="interestTechnology" value="Technologie">
                <label for="interestTechnology">Technologie</label></div>
            <div class="interests-form-group">
                <input type="checkbox" name="interestRecreation" value="Recreatie">
                <label for="interestRecreation">Recreatie</label>
            </div>
            <input type="submit" value="Bewerk">
        </form>
    </div>
    @endsection