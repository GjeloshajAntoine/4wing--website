<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h1>Question</h1>
      <include href="admin_views/breadcrumb.php"/>

      <form class="" action="{{@subrootpath}}/admin/faq/edit/data" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" name="questions"  class="form-control" value="{{@question.questions}}">
        </div>
        <div class="form-group">
          <input type="text" name="reponses"  class="form-control" value="{{@question.reponses}}">
        </div>

        <div class="form-group">
            <label for="fr">fr</label>
              <input type="radio" name="lg" value="fr" id="fr" {{@question.lg == fr ? 'checked' : '' }}>
            <label for="nl">nl</label>
              <input type="radio" name="lg" value="nl" id="nl" {{@question.lg == nl ? 'checked' : '' }}>
            <label for="en">en</label>
              <input type="radio" name="lg" value="en" id="en" {{@question.lg == en ? 'checked' : '' }}>
        </div>
        <input type="hidden" id="questionId" value="{{@question.id}}">ajouter
        <input type="submit" name="" value="changer">
      </form>
    </div>
  </body>
</html>
