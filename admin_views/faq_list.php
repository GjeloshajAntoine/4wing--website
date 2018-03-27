<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h2>Faq</h2>
      <include href="admin_views/breadcrumb.php"/>
      <div class="list-group">
        <repeat group="{{ @pageliste }}" value="{{ @coffee }}" counter="{{ @ctr }}">
          <a href="tradpage/{{ trim(@coffee.page_name) }}/fr" class="{{ @ctr%2?'odd':'even' }} list-group-item">{{ trim(@coffee.page_name) }}</a>
        </repeat>
      </div>
    </div>

  </body>
</html>
