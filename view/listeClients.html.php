<!doctype html>
<html lang="fr">
<head>
    <?php require "head.html.php"?>
    <title>Affichage clients</title>
</head>

<body>
<h1>Liste des clients</h1>
  <table class="table table-hover">
      <thead>
          <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Email</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
            <?php foreach($affichageClients as $clientsChoisis):?>
              <tr>
                  <td><?=$clientsChoisis->nom?></td>
                  <td><?=$clientsChoisis->prénom?></td>
                  <td><?=$clientsChoisis->email?></td>
                  <td><a href="?page=infosClientsAdetailler&idClient=<?= $clientsChoisis->id?> class="btn btn-info">Voir les détails</a></td>
              </tr>
              <?php endforeach; ?>
      </tbody>
  </table>

</body>