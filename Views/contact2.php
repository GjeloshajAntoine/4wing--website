<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery.jscrollpane.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../stylesheets/style_carousel.css" />
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery.jscrollpane.css" media="all" />
    <link rel="stylesheet" href="../stylesheets/footer.css">
    <link rel="stylesheet" href="../stylesheets/icomoon.css">
    <link rel="stylesheet" href="../stylesheets/nav.css">
    <link rel="stylesheet" href="../stylesheets/mobile.css">
    <link rel="stylesheet" href="../stylesheets/contact.css">
  <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact</title>
  </head>
  <body>
    <div class="container">
        <h1>Contact</h1>
        <div class="coordonnees">
          <div class="bureaux">
              <h2>Nos bureaux sont situés à</h2>
              <p>Chaussée de Vleurgat 282a bte 1,<br/> 1050 Bruxelles – Belgique</p>
              <div class="formulair">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.807466527299!2d4.364990790081717!3d50.818205418127654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4f1d5335325%3A0xf802aed73c373f7e!2sChauss%C3%A9e+de+Vleurgat+282%2C+1050+Ixelles!5e0!3m2!1sen!2sbe!4v1516973992071" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="formu">
                  <form class="formulaire" action="contact.php" method="post" enctype="multipart/form-data">
                    <label>Votre Nom</label>
                    <input type="text" name="Nom" size="20" placeholder="Ex: Dupont">
                    <label> Votre Prénom </label>
                    <input type="text" name="Prenom" size="27" placeholder="Ex: Billy"><br/>
                    <label>Votre email</label>
                    <input type="email" name="mail" size="30" placeholder="Ex: DupontBilly@exemple.com"><br/>
                    <label>Votre message</label>
                    <textarea type="text" name="message"></textarea><br/>
                    <label>Votre projet</label>
                    <input type="file" name="file[]" size "30" maxlength="100" accept="text/*">

                    <br/>
                    <input type="submit" name="button" value="Envoyer">
                  </form>
                </div>
              </div>
          </div>
        </div>
    </div>

  </body>
</html>
