<?php
require_once "./libs.php";
printHeader();

$sth = $db->query("select name from users");
$result = $sth->fetchALL(PDO::FETCH_COLUMN,0);


//登録実行の時の処理
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['name'];
	$trick_name = $_POST['trick_name'];
	$num = $_POST['num'];
	$comment = $_POST['comment'];
	
	//nameからuser_idを引っ張ってくる
	$sth = $db->prepare("select id from users where name = ?");
	$sth->execute(array($name));
	$array = $sth->fetch();
	$user_id = intval($array["id"]);
	
	//insert!
	$sth = $db->prepare("insert into records(user_id,trick_name,num,comment) values(?,?,?,?)");
	$sth->execute(array($user_id,$trick_name,$num,$comment));
	
	
	
}

?>

<h2>記録の新規登録</h2>
<form action="" method="POST">
	名前：<select name="name">
	<?php
	foreach($result as $a){
		print_r("<option value='$a'>$a</option>");
	} 
	?></select><br>
	トリック：<input type="text" name="trick_name"><br>
	回数：<input type="number" name="num"><br>
	コメント：<input type="text" name="comment"><br>
	<input type="submit" value="送信">
</form>

<?php
printFooter();
?>
