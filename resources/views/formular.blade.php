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
    <h1>Create new post</h1>
    </div>
    <div class="style2">
    <form class="style" action="/create" method="post">
    <select class="style" type="enum" name="category" placeholder=" Category">
        <option value=" PHP"> PHP</option>
        <option value=" Javascript"> Javascript</option>
        <option value=" HTML"> HTML</option>
        <option value=" CSS"> CSS</option>
        <option value=" Bootstrap"> Bootstrap</option>
        <option value=" Useful Facts"> Useful Facts</option>
    </select><br>
    <br>
    <input class="style" type="text" name="title" placeholder=" Title"><br>
    <br>
    <input class="style3" type="text" name="description" placeholder=" Description"><br>
    <br>
    <input class="style" type="text" name="pearllinks" placeholder=" Pearl Links"><br>
    <br>
    <input class="style" type="text" name="author" placeholder=" Author">
    @csrf
    <br>
    <br>
    <br>
    <button class="btn" type="submit">Submit</button>
    </form>
</div>

</body>
</html>