<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter d'eleves</title>
</head>
<body>
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