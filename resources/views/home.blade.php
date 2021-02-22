<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            background-color:grey;
            position:absolute;
        }
        button{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="text-center" style = "width:72px;height:72px;text-align:center;display:flex;flex-direction:row;">
    <a href="{{route('about')}}" class="btn btn-outline-warning" style="font-size:36px;top:50%;left:70%;position:relative;">About me</a>
    <a href="{{route('message')}}" class="btn btn-outline-success" style="font-size:36px;top:50%;left:70%;position:relative">Message</a>
    </div>
</body>
</html>