<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
    			  src="http://code.jquery.com/jquery-3.3.1.min.js"
    			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    			  crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h1>Utilisateurs
        <a type="button" href="new" class="btn btn-success">Nouvel utilisateur</a>
      </h1>
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
            <div class="form-group">
              <button type="button" onclick="reinitPasswordModal(this)" data-userid="<?= $user['id'] ?>"  class="btn btn-primary">Changer mot de passe</button>
            </div>
            <button type="button" onclick="changeAuthModal(this)" data-userid="<?= $user['id'] ?>" class="btn btn-primary">Enregistrer</button>

      </form>
    </div>
  <?php endforeach; ?>

    </div>

    <div id="passwordChange" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Changer le mot de passe</h4>
          </div>
          <div class="modal-body">
            <p>Un nouveau mot de passe genéré aléatoirement sera envoyé par email à l'utilisateur/p>
          </div>
          <div class="modal-footer">
            <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" onclick="reinitPassword()" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="authChange" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Changer le niveau d'autorisation</h4>
          </div>
          <div class="modal-body">
            <p>Cet utilisateur vera ses droits d'accès modifiés</p>
          </div>
          <div class="modal-footer">
            <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" onclick="changeAuth()" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript">
      var currentClickedReinitPasswordUserId=null;
      var currentClickedChangeAuthUserId=null;

      function reinitPasswordModal(element) {
        currentClickedReinitPasswordUserId=element.dataset.userid;
        $("#passwordChange").modal("show");
      }
      function reinitPassword() {
        $.post('<?= $subrootpath ?>admin/user/recreate_password',{user_id:currentClickedReinitPasswordUserId},function (data) {
          console.log(data);
        });
      }
      function changeAuthModal(element) {
        currentClickedChangeAuthUserId=element.dataset.userid;
        $("#authChange").modal("show");
      }
      function changeAuth() {
        $.post('<?= $subrootpath ?>/admin/user/change_auth',{user_id:currentClickedChangeAuthUserId},function (data) {
          console.log(data);
        });
      }
      $('#myModal')
    </script>
  </body>
</html>
