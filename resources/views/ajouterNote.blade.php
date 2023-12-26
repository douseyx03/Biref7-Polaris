<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Ajout de note</title>
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
        <h2>Ajouter une note pour {{$eleve->prenom}}</h2>
        <form action="ajouterNote" method="post">
            @csrf
            <label for="matiere">Matiere</label><br/>
            <input type="text" id="matiere" name="matiere" value="{{old('matiere')}}"/><br/><br/>
            <label for="note">Note</label><br/>
            <input type="number" min="0" max="10" id="note" name="note" value="{{old('note')}}"/><br/><br/>
            <button type="submit">Effectuer l'enregistrement</button>
        </form>
    </main>
</body>
</html>