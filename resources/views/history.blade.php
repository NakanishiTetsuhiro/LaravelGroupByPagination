@extends('layouts.layout')
@section('title', 'Laravel リンク集')
@section('content')
    <h1>{{ $user }}</h1>
    <ul class="listdesign design1">
        <li><a href="https://laravel.com/" target="_blank">Laravel公式サイト(英語)</a></li>
        <li><a href="http://laravel.jp/" target="_blank">Laravel公式サイト(日本語)</a></li>
        <li><a href="https://github.com/laravel/laravel" target="_blank">Laravel GitHub</a></li>
    </ul>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
@endsection