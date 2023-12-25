<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Polaris</h1>
    <h3>Liste des élèves.</h3>
    <div class="div container my-4 ">
        <div class="row d-flex m-4 justify-content-center align-items-center">
        <div >
            @foreach($eleves as $eleve)
                <div class="row-md-10">
                    Matricle : {{ $eleve->id }}<br>
                    Nom : {{ $eleve->nom }}<br>
                    Prénom : {{ $eleve->prenom }} <br>
                    Date de naissance :{{ $eleve->date_naissance }}<br>
                    Classe: {{ $eleve->classe }}<br>
                    Sexe: {{ $eleve->sexe }} <br>
                    <div style="display: flex;flex-direction:row; margin : 15px 10px 15px 0">
                        <a href="" class="btn btn-info">Modifier</a><br>
                        <a href="" class="btn btn-danger">Supprimer</a><br>
                        <a href="" class="btn btn-secondary">Notes</a><br>
                    </div><br><br>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</body>
</html>