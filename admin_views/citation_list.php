<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>all_citations  <a type="button" href="new/form" class="btn btn-success">Nouvelle citation</a></h2>
      <include href="admin_views/breadcrumb.php"/>

      <ul class="nav nav-tabs">
        <li role="presentation" class="{{@lg == 'fr' ? 'active': ''}}"><a href="/4wing-website/admin/citation/list/fr">FR</a></li>
        <li role="presentation" class="{{@lg == 'nl' ? 'active': ''}}"><a href="/4wing-website/admin/citation/list/nl">NL</a></li>
        <li role="presentation" class="{{@lg == 'en' ? 'active': ''}}"><a href="/4wing-website/admin/citation/list/en">EN</a></li>
      </ul>
      <div class="list-group">
        <repeat group="{{ @all_citations }}" value="{{ @citation }}">
          <a href="{{ @citation.id}}" class="list-group-item"> {{ @citation.citation}} </a>
       </repeat>
      </div>
    </div>
  </body>
</html>
