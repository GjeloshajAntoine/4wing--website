<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
  </head>
  <body>
    <a href="admin/list_page_trad">pages</a>
    <a href="admin/citation/list">citations</a>
    <a href="admin/list_projet">projet</a>
    <?php if ($is_admin): ?>
      
        <a href="#">users</a>
      
      <?php else: ?>

      
    <?php endif; ?>
  </body>
</html>
