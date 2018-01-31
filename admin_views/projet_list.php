<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des projets</title>
  </head>
  <body>
    <repeat group="{{ @all_projects }}" value="{{ @project }}">
        <a href="/admin/projet/{{ @project.id}}/fr"> {{ @project.name}} </a>
        <br/>
    </repeat>
  </body>
</html>
