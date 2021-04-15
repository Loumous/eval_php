
<body>
<h1>Liste des chambres</h1>
  <table class="table table-hover">
      <thead>
          <tr>
              <th>Numero</th>
              <th>Capacité</th>
          </tr>
      </thead>
      <tbody>
            <?php foreach($listeChambres as $ChambreChoisie):?>
              <tr>
                  <td><?=$ChambreChoisie->Numero_chbr?></td>
                  <td><?=$ChambreChoisie->Capacite?></td>
                  <td><a href="?page=chambreAdetailler&id=<?= $ChambreChoisie->id?> class="btn btn-info">Voir les détails de la chambre</a></td>
              </tr>
              <?php endforeach; ?>
      </tbody>
  </table>

</body>