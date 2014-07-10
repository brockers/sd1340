<!DOCTYPE html>

<html lang="en">
  <head>
		<meta charset="utf-8" />
    <title>A Simple PHP and MySQL</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
  	<div id="page-wrap">
    <?php

      include_once('_class/simple.php');
      $obj = new simple();

	  /* CHANGE THESE SETTINGS FOR YOUR OWN DATABASE */
      $obj->host = 'localhost';
      $obj->username = 'mysql_username';
      $obj->password = 'mysql_password';
      $obj->table = 'mysql_tablename';
      $obj->connect();

      if ( $_POST )
        $obj->write($_POST);

      echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

    ?>
	</div>
  </body>

</html>
