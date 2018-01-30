<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet</title>
  </head>
  <body>
    <form class="" action="http://localhost/4wing-website/admin/page_trad_changes/{{@pagename}}/{{@lg}}" method="post">
      <repeat group="{{ @all_trad }}" value="{{ @trad }}">
          <input type="text" value="{{ @trad.string_origin }}" disabled>
          <input type="text" value="{{ @trad.string_trad}}" name="{{ @trad.id }}" >
          <br/>
      </repeat>
      <input type="submit">

    </form>
  </body>
</html>
