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
    <div class="chat">
        <div class="chatbox">
            <form method="POST" action="/devicesaction">
            <textarea name="email" rows="4" cols="50"></textarea>
            <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

</div>

</body>

</html>
    @endsection

