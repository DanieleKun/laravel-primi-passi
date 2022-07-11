<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saturno</title>
</head>
<body>
    <section>
        <div>
        <img src="{{URL::asset('/img/saturn.png')}}" alt="">
        </div>
        <div>
        <h1>Saturno ha 82 lune!</h1>
        </div>
    </section>

    <style>
        body{
            background-color: #23272a;
        }
        h1{
            text-align: center;
            font-size: 4rem;
            color: white;
        }

        section{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;

        }

        img{
            width: 350px;
        }
    </style>
</body>
</html>