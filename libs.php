<?php


$db = new PDO("mysql:dbname=testboard;host=localhost", "testboard2", "testboard2",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

function h($str, $flags = ENT_COMPAT, $charset = "UTF-8") {
  return htmlspecialchars($str, $flags, $charset);
}

function printHeader($name=null){
  $title = "TEST Board";
  echo <<<EOM
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./css/pure.css" type="text/css" />
    <link rel="stylesheet" href="./css/main.css" type="text/css" />
    <title>{$title}</title>
  </head>
  <body>
  <h1>TEST BOARD</h1><!--
    <nav>
      <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a href="./index.php" class="pure-menu-link">Home</a></li>
          <li class="pure-menu-item"><a href="./monsterbattle.php" class="pure-menu-link">魔物と戦う</a></li>
          <li class="pure-menu-item"><a href="./userbattle.php" class="pure-menu-link">他のユーザと戦う</a></li>
          <li class="pure-menu-item"><a href="./logout.php" class="pure-menu-link">Logout</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
    <div class="pure-g">
      <div class="pure-u-1-24"></div>
      <div class="pure-u-22-24">
-->
EOM;
}

function printFooter(){
echo <<<EOM

      </div>
      <div class="pure-u-1-24"></div>
    </div>
    </div>
	<a href="index.php">トップ</a><br>
	<a href="regist.php">記録の登録</a><br>
	<a href="user_regist.php">ユーザの登録</a><br>
  </body>
</html>
EOM;
}

?>

