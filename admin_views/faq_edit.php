<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1>traduction page: {{@project.title}}</h1>
      <include href="admin_views/breadcrumb.php"/>
      <include href="admin_views/project_tabs.php" with="tabname=images" />

      <form class="" action="{{@subrootpath}}/admin/projet/{{@id}}/image/add" method="post" enctype="multipart/form-data">
        <input type="hidden" id="questionId" value="{{questionId.id}}">
        <input type="submit" name="" value="ajouter">
      </form>
    </div>
  </body>
</html>
