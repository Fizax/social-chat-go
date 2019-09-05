@extends('layouts.app')

@section('content')
    <!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="{{ route('chat.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="chattext">Vul hier je chatbericht in</label>
            <textarea rows="4" cols="50" class="input" name="chattext" id="chattext" required></textarea>
        </div>
        <div class="form-group">
            <input class="button" type="submit" value="Verzenden">
        </div>
    </form>

</div>

</body>

</html>
    @endsection

