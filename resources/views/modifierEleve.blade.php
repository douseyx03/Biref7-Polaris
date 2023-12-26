<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modifier d'eleves</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/listeEleves"><h1>Polaris</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/ajouterEleve">Ajouter Eleve</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/listeEleves">Liste des élèves</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <h2>Ajouter l'eleve</h2>
    <div>
        <form action="{{ route('modifierEleve', $eleve->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="">Nom</label><br>
                <input type="text" id="email" name="nom" value="{{old('nom', $eleve->nom)}}">
            </div>
            <div>
                <label for="">Prénom</label><br>
                <input type="text" id="email" name="prenom" value="{{old('prenom', $eleve->prenom)}}">
            </div>
            <div>
                <label for="">Date de naissance</label><br>
                <input type="text" id="email" name="date_naissance" value="{{old('date_naissance', $eleve->date_naissance)}}">
            </div>
            <div>
                <label for="">Classe</label><br>
                <input type="text" id="email" name="classe" value="{{old('classe', $eleve->classe)}}">
            </div>
            <div>
                <label for="">Sexe</label><br>
                <input type="text" id="email" name="sexe" value="{{old('sexe', $eleve->sexe)}}">
            </div>
            <div>
                <button type="submit">Effectuer l'enregistrement</button>
            </div>
        </form>
    </div>
</body>
</html>