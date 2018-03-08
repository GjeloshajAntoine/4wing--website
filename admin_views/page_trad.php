<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <script src="/4wing-website/wysihtml.min.js"></script>

    <script src="/4wing-website/wysihtml-toolbar.min.js"></script>
    <script src="/4wing-website/advanced_and_extended.js"></script>

  </head>
  <body class="container">
    <h1>traduction page: {{@pagename}}</h1>
    <include href="admin_views/breadcrumb.php"/>

    <!-- onglets -->

    <ul class="nav nav-tabs">
      <li role="presentation" class="{{@lg == 'fr' ? 'active': ''}}"><a href="/4wing-website/admin/tradpage/{{@pagename}}/fr">FR</a></li>
      <li role="presentation" class="{{@lg == 'nl' ? 'active': ''}}"><a href="/4wing-website/admin/tradpage/{{@pagename}}/nl">NL</a></li>
      <li role="presentation" class="{{@lg == 'en' ? 'active': ''}}"><a href="/4wing-website/admin/tradpage/{{@pagename}}/en">EN</a></li>
    </ul>
    <div class="container">
    <form class="" action="http://localhost/4wing-website/admin/page_trad_changes/{{@pagename}}/{{@lg}}" method="post">
      <repeat group="{{ @all_trad }}" value="{{ @trad }}" counter="{{ @ctr }}" >
          <!-- <input type="text" value="{{ @trad.string_origin }}" disabled>
          <input type="text" value="{{ @trad.string_trad}}" name="{{ @trad.id }}" > -->
          <label for="{{ @ctr }}" >{{ @trad.string_origin }}</label>


          <div class="panel panel-default">
            <div class="panel-heading">
              <div id="toolbar-{{@ctr}}">
                <a data-wysihtml5-command="bold">bold</a>
                <a data-wysihtml5-command="italic">italic</a>
                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">H1</a>
                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p">P</a>
              </div>
            </div>
            <div class="panel-body">
              <textarea class="form-control" id="{{@ctr}}"  name="{{ @trad.id }}" rows="3">{{ @trad.string_trad |raw}}</textarea>

            </div>
          </div>
          <br/>
      </repeat>
      <input type="submit" class="btn btn-default">
    </form>
    <div id="nbrOfEditor" data-total="{{ @ctr }}"></div>
    </div>
    <script>
      var editor = new wysihtml5.Editor('1', {toolbar: 'toolbar-1',parserRules:  wysihtml5ParserRules});
      var editArray=[];
      var nrbOfEditor=document.getElementById('nbrOfEditor') ;
      console.log(nbrOfEditor.dataset.total);
      for (var i = 1; i < nbrOfEditor.dataset.total; i++) {
        editArray.push( new wysihtml5.Editor(''+i, {toolbar: 'toolbar-'+i,parserRules:  wysihtml5ParserRules}) );
      }
    </script>
  </body>
</html>
