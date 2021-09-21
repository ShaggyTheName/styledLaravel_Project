<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">

    <h1>Opportunity Infomation Table</h1>
    
</div>
<div class="create">
<a class="createPost" href="/formular">Create new post!</a><br>
</div>
<!--<input type="radio" id="Javascript" value="Javascript" checked>
<label for="Javascript">Javascript</label>
<input type="radio" id="CSS" value="CSS">
<label for="CSS">CSS</label>
<input type="radio" id="HTML" value="HTML">
<label for="HTML">HTML</label>
<input type="radio" id="Bootstrap" value="Bootstrap">
<label for="Bootstrap">Bootstrap</label>
<input type="radio" id="Useful Facts" value="Useful Fact">
<label for="Useful Facts">Useful Facts</label>
-->



<div class="post">
    <h2>All Posts</h2>
    <ul>
        @foreach ($posts as $post)  
        <li>
            <b><a href="/home/{{$post->id}}">{{$post->title}}</a></b>
            <h4>{{$post->description}}</h4><br>
            <h5>More Information:</h5>
            <h5>{{$post->pearllinks}}</h5>
            <h3>{{$post->category}} - created by {{$post->author}}</h3>   
            <hr><br>
        </li>
        @endforeach
    </ul>
    <div>

@extends('master')
@section('title', 'Message List')
@section('content')
    
@endsection


</body>
</html>