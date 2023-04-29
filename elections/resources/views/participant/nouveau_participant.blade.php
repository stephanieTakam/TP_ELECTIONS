<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elections</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Enregistrez - Vous</h2>
        <form method="POST" action="new_participant">
            @csrf
                <div class="form-floating mb-3 mt-3" style="width: 30%">
                    <input type="number" minlength="9" maxlength="9" class="form-control" id="email"
                        name="cni" required>
                    <label for="email">Numero de CNI</label>
                </div>
                <div class="form-floating mb-3 mt-3" style="width: 30%">
                    <input type="text" class="form-control" id="email" name="nom" required>
                    <label for="email">Nom</label>
                </div>
            <div class="form-floating mb-3 mt-3" style="width: 30%">
                <input type="text" class="form-control" id="email" name="prenom">
                <label for="email">Prenom</label>
            </div>
            <div class="form-floating mb-3 mt-3" style="width: 30%">
                <input type="number" minlength="2" maxlength="2" class="form-control" id="email" name="age"
                    required>
                <label for="email">Age</label>
            </div><br>
            <p>Sexe</p>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="sexe" value="masculin">
                <label class="form-check-label" for="radio1">Masculin</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="sexe" value="feminin">
                <label class="form-check-label" for="radio2">Feminin</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="sexe" value="autres">
                <label class="form-check-label">Autre...</label>
            </div>
            <br>
            <p>
                Statut
            </p>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="statut" value="candidat">
                <label class="form-check-label" for="radio2">Candidat</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="statut" value="electeur">
                <label class="form-check-label">Electeur</label>
            </div>
            <br>
            <p>Region</p>
            <select class="form-select" id="sel1" name="region" style="width: 30%">
                @foreach ($region as $r)
                    <option>{{ $r->label }}</option>
                @endforeach
            </select><br>
            <p>Vote</p>
            <select class="form-select" id="sel1" name="vote" style="width: 30%">
                @foreach ($vote as $v)
                    <option>{{ $v->date }}</option>
                @endforeach
            </select>
            <div class="form-floating mb-3 mt-3" style="width: 30%">
                <input type="email" class="form-control" id="email" name="etat" required>
                <label for="email">Etat</label>
            </div>
            <div class="form-floating mb-3 mt-3" style="width: 30%">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3 mt-3" style="width: 30%">
                <input type="text" class="form-control" id="email" name="login" required>
                <label for="email">UserName</label>
            </div>
            <div class="form-floating mb-3 mt-3" style="width: 30%">
                <input type="password" class="form-control" id="email" name="password" required>
                <label for="email">Password</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="number" minlength="9" style="width: 30%" class="form-control" id="email" name="telephone" required>
                <label for="email">Telephone</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
