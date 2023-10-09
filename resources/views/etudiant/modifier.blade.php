<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIFIER UN ETUDIANT-CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>MODIFIER UN ETUDIANT-CRUD</h1>
            <hr>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/modifier/traitement" method="POST" class="form-group">
                @csrf <!-- Ajoutons une protection CSRF -->

                <input type="text" name="id" style="display: none" value="{{ $etudiant->id }}">

                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiant->nom }}">
                </div>

                <div class="form-group">
                    <label for="Prenom">Prénom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiant->prenom }}">
                </div>

                <div class="form-group">
                    <label for="Classe">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiant->classe }}">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Modifier un étudiant</button>

                <br><br>

                <a href="/etudiant" class="btn btn-warning">Revenir à la liste des étudiants</a>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
