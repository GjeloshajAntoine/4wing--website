<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Créer une ciation</title>
  </head>
  <body>
    <h1>Nouvelle citation</h1>
    <form class="" action="/4wing-website/admin/citation/new/data" method="post">
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
