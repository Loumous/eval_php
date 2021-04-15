<!doctype html>
<html lang="fr">
<head>
    <?php require "head.html.php"?>
    <title>Formulaire inscription</title>
</head>

<body>
<form method="POST">
        <fieldset class="border offset-3 col-6 my-2">
            <legend>Renseignez les informations</legend>
            <div class="form-group">
                <label for="last_name"> Nom : </label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="form-group">
                <label for="first_name"> Prénom : </label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="form-group">
                <label for="mail"> E-Mail : </label>
                <input type="email" class="form-control" id="mail" name="mail">
            </div>
            <button class="btn btn-primary mb-2">Valider</button>
        </fieldset>
    </form>
</body>