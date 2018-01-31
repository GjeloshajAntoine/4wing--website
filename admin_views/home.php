<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
  </head>
  <body>
    <a href="#">pages</a>
    <a href="#">citations</a>
    <a href="#">projet</a>
    <check if="{{ @is_admin }}">
      <true>
        <a href="#">users</a>          
      </true>
      <false>

      </false>
    </check>
  </body>
</html>
