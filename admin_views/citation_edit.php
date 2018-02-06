<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
    <form class="" action="edit/data" method="post">
      <input type="text" name="citation" value="{{@citation.citation}}">
      <br/>
      <div class="form-group">
        <label for="fr">fr</label>
        <input type="radio" name="lg" value="fr" id="fr" {{@citation.ln == fr ? 'checked' : '' }}>
      </div>
      <div class="form-group">
      <label for="nl">nl</label>
      <input type="radio" name="lg" value="nl" id="nl" {{@citation.ln == nl ? 'checked' : '' }}>
    </div>
    <div class="form-group">
      <label for="en">en</label>
      <input type="radio" name="lg" value="en" id="en" {{@citation.ln == en ? 'checked' : '' }}>
    </div>
      <br/>
      <label for="techEducation">techEducation</label>
      <input type="radio" name="cat" id="techEducation" value="techEducation" {{@citation.categorie == "techEducation" ? 'checked' : '' }}>
      <label for="logement">logement</label>
      <input type="radio" name="cat" id="logement" value="logement" {{@citation.categorie == "logement" ? 'checked' : '' }}>
      <label for="sante">sante</label>
      <input type="radio" name="cat" id="sante" value="sante" {{@citation.categorie == "sante" ? 'checked' : '' }}>

      <input type="hidden" name="id" value="{{@citation.id}}">
      <input type="submit" name="" value="enregistrer">
    </form>
  </body>
</html>
