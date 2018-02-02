<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="citation" value="{{@citation.citation}}">

      <input type="radio" name="lg" value="fr">
      <input type="radio" name="lg" value="nl">
      <input type="radio" name="lg" value="en">

      <input type="radio" name="cat" value="techEducation">
      <input type="radio" name="cat" value="logement">
      <input type="radio" name="cat" value="sante">

      <input type="hidden" name="id" value="{{@citation.id}}">
    </form>
  </body>
</html>
