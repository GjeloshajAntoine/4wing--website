<ol class="breadcrumb">
  <li><a href="{{@subrootpath}}/admin">Admin</a></li>
  <repeat group="{{ @breadcrumb }}" key="{{ @ikey }}" value="{{ @idiv }}">
    <li><a href="{{@subrootpath}}{{ @idiv }}">{{@ikey}}</a></li>
  </repeat>
    <check if="{{ @active }}">
      <true> <li class="active"> {{@active}}</li>  </true>
    </check>
</ol>
