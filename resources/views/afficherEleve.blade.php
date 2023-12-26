<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Info d'un eleve</title>
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
    <main>
        <div>
            <div class="row-md-10">
                Matricle : {{ $eleve->id }}<br>
                Nom : {{ $eleve->nom }}<br>
                Prénom : {{ $eleve->prenom }} <br>
                Date de naissance :{{ $eleve->date_naissance }}<br>
                Classe: {{ $eleve->classe }}<br>
                Sexe: {{ $eleve->sexe }} <br>
                <div style="display: flex;flex-direction:row; margin : 15px 10px 15px 0">
                    <a href="{{ route('modifierEleve', $eleve->id) }}" class="btn btn-info">Modifier</a><br>
                    <form action="{{ route('supprimerEleve', $eleve->id) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <a href="{{ route('supprimerEleve', $eleve->id) }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')"> Supprimer</a>
                    </form><br>
                    <a href="{{ route('ajouterNote') }}" class="btn btn-secondary">Ajouter une Note</a><br>
                </div><br><br>
            </div>
        </div>
        <div>

        </div>
    </main>
</body>
</html>