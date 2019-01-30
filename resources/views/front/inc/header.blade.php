<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Cims Farm">
        <title>Projeto Kley</title>
        <link rel="stylesheet" href="{{ asset('site/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
        <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
        @yield('css')
    </head>
<body>