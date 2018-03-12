<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <include href="admin_views/project_tabs.php" with="tabname=info" />
      <form class="" action="/4wing-website/admin/projet/{{@id}}/editdata" method="post" >
        <input type="text" name="title" value="{{@project.title}}">
        <div class="form-group">

          <label for="techEducation">techEducation</label>
          <input type="radio" name="cat" id="techEducation" value="techEducation" {{@citation.categorie == "techEducation" ? 'checked' : '' }}>
          <label for="logement">logement</label>
          <input type="radio" name="cat" id="logement" value="logement" {{@citation.categorie == "logement" ? 'checked' : '' }}>
          <label for="sante">sante</label>
          <input type="radio" name="cat" id="sante" value="sante" {{@citation.categorie == "sante" ? 'checked' : '' }}>
          <div class="form-group">
            <input type="submit" name="" value="changer">
          </div>
        </div>
      </form>
      <form class="" action="{{@subrootpath}}/admin/projet/{{@id}}/logo/change" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{@id}}">
        <input id="file" type="file" name="file" value="choisir fichier" />
        <input type="submit" name="" value="changer logo">
      </form>
    </div>
  </body>
</html>
