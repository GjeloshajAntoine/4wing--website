<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <h1>Utilisateurs</h1>
    <div class="container">
      <div class="alert alert-info" role="alert">
        Les comptes 'admin' ont accès à 2 interfaces d'administrations supplémentaires:<br/>
        Une interface pour gerer les Utilisateurs de l'administrations du site (cette page ).<br/>
        Une autre interface pour ajouter des membre à la page 'équipe'.
      </div>
      <?php foreach (($all_users?:[]) as $user): ?>
        <div class="list-group-item">

      <form class="" id="form_<?= $user['id'] ?>" action="#" method="">
            <div class="form-group">
              <span>nom d'utilisateurs: </span>
              <span><?= $user['name'] ?></span>
            </div>
            <div class="form-group">
              <div class="radio">
                  <label for="admin">
                    <input type="radio" id="admin" name="auth" value="0" <?= $user['auth'] == 0 ? "checked" :"" ?>>
                    admin
                  </label>
                  <label for="regular">
                    <input type="radio" id="regular" name="auth" value="1" <?= $user['auth'] == 1 ? "checked" :"" ?>>
                    normal
                  </label>
              </div>
            </div>
            <button type="button" class="btn btn-primary">Enregistrer</button>
      </form>
    </div>
  <?php endforeach; ?>

    </div>



  </body>
</html>
