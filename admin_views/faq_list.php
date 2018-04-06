<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>Faq</h2>
      <include href="admin_views/breadcrumb.php"/>
      <ul class="nav nav-tabs">
        <li role="presentation" class="{{@lg == 'fr' ? 'active': ''}}"><a href="{{@subrootpath}}/admin/faq/list/fr">FR</a></li>
        <li role="presentation" class="{{@lg == 'nl' ? 'active': ''}}"><a href="{{@subrootpath}}/admin/faq/list/nl">NL</a></li>
        <li role="presentation" class="{{@lg == 'en' ? 'active': ''}}"><a href="{{@subrootpath}}/admin/faq/list/en">EN</a></li>
      </ul>
      <div class="list-group">
        <repeat group="{{ @faqliste }}" value="{{ @coffee }}" counter="{{ @ctr }}">
          <a href="{{@subrootpath}}/admin/faq/{{ trim(@coffee.id) }}" class="{{ @ctr%2?'odd':'even' }} list-group-item">{{ trim(@coffee.questions) }}</a>
        </repeat>
      </div>
    </div>

  </body>
</html>
