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
@extends('master')

@section('title', 'Message Details')

@section('content')
<div class="header">
<h1>{{$post->title}}</h1>
</div>
<div class="post">
    <h2>{{$post->title}}</h2><br>
    <p class="fontxy">Description:<br></p><h6>{{$post->description}}</h6><br>
    <p class="fontxy">Pearllinks:<br></p><h6>{{$post->pearllinks}}</h6><br>
    <p class="fontxy">Author:<br></p><h6>{{$post->author}}</h6><br>
    <p class="fontxy">Category:<br></p><h6>{{$post->category}}</h6><br>
    <p class="fontxy">Created:<br></p><h6>{{$post->created_at->diffForHumans()}}</h6><br>  
<div class="alignright">  
<form class="form" action="/home/{{$post->id}}" method="post">
    @csrf
    @method('delete')
    <br>
    <br>
    <button class= "btn1" type="submit">Delete</button>
</form>
</div>
</div>


<br>

@endsection


</body>
</html>