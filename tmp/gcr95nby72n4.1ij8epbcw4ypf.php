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
        <a type="button"  data-toggle="modal" data-target="#createUser" class="btn btn-success">Nouvel utilisateur</a>
      </h1>
      <?php echo $this->render('admin_views/breadcrumb.php',NULL,get_defined_vars(),0); ?>

      <div class="alert alert-info" role="alert">
        Les comptes 'admin' ont accès à 2 interfaces d'administrations supplémentaires:<br/>
        Une interface pour gerer les Utilisateurs de l'administrations du site (cette page ).<br/>
        Une autre interface pour ajouter des membre à la page 'équipe'.
      </div>
      <?php foreach (($all_users?:[]) as $user): ?>
        <div class="list-group-item">

      <form class="" id="form_<?= $user['id'] ?>" action="#" method="">
            <div class="form-group">
            <!--  <span>nom d'utilisateurs: </span> -->
              <span><?= $user['name'] ?></span>
              <span><?= $user['email'] ?></span>
            </div>
            <div class="form-group">
              <button type="button" onclick="reinitPasswordModal(this)" data-userid="<?= $user['id'] ?>"  class="btn btn-primary">Réinitailiser le mot de passe</button>
              <?php if ($user['auth']==0): ?>
                  
                    <button type="button" onclick="changeAuthModal(this)" data-userid="<?= $user['id'] ?>" data-newauth="1" class="btn btn-primary">Changer en utilisateur normal</button>
                  
                  <?php else: ?>
                    <button type="button" onclick="changeAuthModal(this)" data-userid="<?= $user['id'] ?>" data-newauth="0" class="btn btn-primary">Changer en administrateur</button>
                  
              <?php endif; ?>
           </div>
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
    <div id="createUser" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Créer un nouvel utilisateur</h4>
          </div>
          <div class="modal-body">
            <p>Entrez  l'adress mail de l'utilisateur que vous souhaitez creer.</p>
            <p>Cet utilisateur recevra un mail avec mot de passe définit aléatoirement qui pourra être changé par la suite.</p>
            <label for="NewUseremail">email:</label>
            <input type="mail" id="NewUseremail" name="email" value="">
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
          </div>
          <div class="modal-footer">
            <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" onclick="CreatNewUser()" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript">
      var currentClickedReinitPasswordUserId=null;
      var currentClickedChangeAuthUserId=null;
      var currentClickedNewAuth=null;
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
        currentClickedNewAuth=element.dataset.newauth;
        $("#authChange").modal("show");
      }
      function changeAuth() {
        $.post('<?= $subrootpath ?>/admin/user/change_auth',{id:currentClickedChangeAuthUserId,auth:currentClickedNewAuth},function (data) {
          console.log(data);
          location.reload();
        });
      }
      function CreatNewUser() {
        var mail=$("#NewUseremail").val();
        var auth=$('input[name=auth]:checked').val()
        $.post('<?= $subrootpath ?>/admin/user/change_auth',{email:email,auth:auth},function (data) {
          console.log(data);
          $("#createUser").modal("hide");
        });
      }
    </script>
  </body>
</html>
