<?php
require_once "./libs.php";
printHeader();

$name = $_POST['name'];

//登録実行の時の処理
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$sth = $db->prepare("select * from users where name = ?");
	$sth->execute(array($name));
	if($sth->fetch() != null){
		echo $name."は既に登録されてまーす";
	}else{
		$sth = $db->prepare("insert into users(name) values(?)");
		$sth->execute(array($name));
		echo $name."を登録しました";
	}
	
	//header("Location: ./index.php");
	
	
	
}

?>

<h2>ユーザの新規登録</h2>
<form action="" method="POST">
	名前：<input type="text" name="name"><br>
	<input type="submit" value="送信">
</form>

<?php
printFooter();
?>
