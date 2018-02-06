<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des pages</title>
  </head>
  <body>
    <repeat group="{{ @pageliste }}" value="{{ @coffee }}" counter="{{ @ctr }}">
        <a href="tradpage/{{ trim(@coffee.page_name) }}/fr" class="{{ @ctr%2?'odd':'even' }}">{{ trim(@coffee.page_name) }}</a>
    </repeat>
  </body>
</html>
