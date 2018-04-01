<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fondation 4WINGS - Titre dynamique de la page</title>

  <link rel="shortcut icon" href="<?= $subrootpath ?>/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= $subrootpath ?>/img/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- CSS carousel -->
  <link rel="stylesheet" type="text/css" href="<?= $subrootpath ?>/stylesheets/carousel.css" />
  <link rel="stylesheet" type="text/css" href="<?= $subrootpath ?>/stylesheets/jquery.jscrollpane.css" media="all" />
<!-- CSS carousel -->

  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/index.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/footer.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/icomoon.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/nav.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/tech.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/logement.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/sante.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/contact.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/faq.css">
<!-- CSS page projet -->
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/projet_logement.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/projet_tech.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/projet_sante.css">

  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/equipes.css">
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/formulaireSelection.css">




  <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre" rel="stylesheet">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS MOBILE -->
  <link rel="stylesheet" href="<?= $subrootpath ?>/stylesheets/mobile.css">

</head>


<body>
<div class="container header">
  <div class="container contenu">
    <header>
      <nav>
        <div class="row">
          <div class="logo col-4">
            <a href="index_lucile.php">
              <img src="<?= $subrootpath ?>/img/logo_blanc.png" alt="">
            </a>
          </div>
          <div>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown list-inline-item menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $menu_a_propos ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/missions"> <?= $element_mission ?></a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/valeurs"> <?= $element_valeurs ?></a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/selection_projets"><?= $element_selections_projet ?></a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/equipes"> <?= $element_equipes ?></a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/faq"> <?= $element_faq ?></a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/reseaux_partenaires"><?= $element_reseau_partenaires ?></a></li>
                      </ul>
                </li>
                <li class="dropdown list-inline-item menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $menu_projets ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/logement">Logement</a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/techEducation">Tech Éducation</a></li>
                        <li><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/santeNutrition">Santé et nutrition</a></li>
                      </ul>
                </li>
                <li class="dropdown list-inline-item menu"><a href="<?= $subrootpath ?>/<?= $PARAMS['lg'] ?>/contact">Contact</a></li>
                <li class="dropdown list-inline-item menu langues">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $PARAMS['lg'] ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu lang">
                        <?php foreach ((@['fr','nl','en']?:[]) as $one_language): ?>
                          <?php if ($one_language!= $PARAMS['lg']): ?>
                              
                                <li ><a href="<?= $subrootpath ?>/<?= $one_language ?>/<?= $page_name ?>" class="lang"> <?= $one_language ?></a></li>
                              
                          <?php endif; ?>
                        <?php endforeach; ?>

                      </ul>
                </li>



            </ul>
          </div>
        </div>

      </nav>

    </header>
