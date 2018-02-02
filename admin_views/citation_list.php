<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <repeat group="{{ @all_citations }}" value="{{ @citation }}">
        <a href="/admin/projet/{{ @citation.id}}"> {{ @citation.citation}} </a>
        <br/>
    </repeat>
  </body>
</html>
