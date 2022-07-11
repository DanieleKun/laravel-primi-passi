<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel!</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('/nettuno')}}">Nettuno</a></li>
                <li><a href="{{route('/saturno')}}">Saturno</a></li>
                <li><a href="{{route('/giove')}}">Giove</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Hello world!</h1>
        </section>
    </main>
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav ul{
            display: flex;
            justify-content: center;
        }

        a{
            text-decoration: none;
        }

        li{
            list-style-type: none;
            margin: 10px 10px;
            font-size: 2rem;
        }
        section{
            text-align: center;
            padding-top: 50px;
        }
        h1{
            font-size: 5rem;
        }
    </style>
</body>
</html>