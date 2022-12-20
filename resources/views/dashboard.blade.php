<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .top-bar{
            background: rgb(203, 193, 193);
            padding: 10px 70px;
        }
        .msg{
            width: 75%
        }
        button{
            background: black;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <h2 class="msg">You are Loged In !!!</h2>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </div>
</body>
</html>