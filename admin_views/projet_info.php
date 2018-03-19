<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <h1>traduction page: {{@project.title}}</h1>
      <include href="admin_views/breadcrumb.php"/>
      <include href="admin_views/project_tabs.php" with="tabname=info" />

      <form class="" action="/4wing-website/admin/projet/{{@id}}/info/editdata" method="post" >
        <div class="form-group">
          <label for="title">titre</label>
          <input type="text" id="title"  name="title" value="{{@project.title}}">
        </div>
        <div class="form-group">
          <label for="link">lien</label>
          <input type="text" id="link"  name="link" class="form-control" value="{{@project.link}}">
        </div>
        <div class="form-group">
          <label for="techEducation">techEducation</label>
          <input type="radio" name="cat" id="techEducation" value="techEducation" {{@project.category == "techEducation" ? 'checked' : '' }}>
          <label for="logement">logement</label>
          <input type="radio" name="cat" id="logement" value="logement" {{@project.category == "logement" ? 'checked' : '' }}>
          <label for="sante">sante</label>
          <input type="radio" name="cat" id="sante" value="sante" {{@project.category == "sante" ? 'checked' : '' }}>
        </div>

          <div class="form-group">
            <input type="hidden" name="id" value="{{@project.id}}">
            <input type="submit" name="changer" value="changer">
          </div>
      </form>

      <form class="inline-form" action="{{@subrootpath}}/admin/projet/{{@id}}/logo/change" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{@id}}">
        <img src="{{@subrootpath}}/projects_logo/{{@project.logo_file_name}}" style="height:90px;" >
        <div class="form-group">
          <input id="file" type="file" name="file" value="choisir fichier"  >
        </div>
        <div class="form-group">
          <input type="submit" name="" value="changer logo" class="btn btn-default">
        </div>
      </form>
    </div>
  </body>
</html>
