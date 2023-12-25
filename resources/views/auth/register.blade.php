<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Inscription</title>
    <style>
        body {
            /* height: 100vh; */
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            padding: 10px 5px 10px 40%;
            border: 3px solid green;
            margin: 10px 10px 10px 10px;
            align-items: center;
        }

        #centered-form {
            max-width: 400px;
            width: 100%;
            border-width: 5px green;
            align-content: center;
        }
    </style>
</head>
<body>
    <h2>
        S'inscrire à Polaris
    </h2>
    @if ($errors->any())
        <div>
            <div>Quelque chose ne s'est pas bien passer! </div>
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>({$error})</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="centered-form">
        <form action="/register" method="post">
            @csrf

            <div>
                <label for="name">Nom : </label><br>
                <input type="text" id="name" name="name" value="{{old('name')}}"><br/>
            </div>
            <div>
                <label for="email">Email : </label><br>
                <input type="email" id="email" name="email" value="{{old('email')}}"><br/>
            </div>
            <div>
                <label for="password">Mot de passe : </label><br>
                <input type="password" id="password" name="password" value="{{old('password')}}">
            </div>
            <div>
                <label for="password_confirmation">Confirmation de mot de passe:</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
            </div>
            <div>
                <button type="button" class="btn btn-success">S'inscrire</button>
            </div>
        </form>
    </div>
</body>
</html>