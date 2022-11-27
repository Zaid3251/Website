<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <title>About Page </title>

    </head>
    <body>
        <h2>This is a About Page from Controller</h2>
        <a href="{{ route('contact.page') }}">Contact</a>

    </body>


</html>
