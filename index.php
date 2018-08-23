<?php
require_once "./libs.php";

//記録の取得
$sth = $db->prepare("select * from records inner join users on records.user_id = users.id order by time desc");
$sth->execute();
$records = $sth->fetchALL();

printHeader();

//記録の列挙
echo "<table><tr><th>日時</th><th>記録者</th><th>トリック</th><th>回数</th><th>コメント</th></tr>";
foreach($records as $loop){
	echo "<tr>";
	echo "<td>".$loop[time]."</td>";
	echo "<td>".$loop[name]."</td>";
	echo "<td>".$loop[trick_name]."</td>";
	echo "<td>".$loop[num]."</td>";
	echo "<td>".$loop[comment]."</td>";
	echo "</tr>";
};
echo "</table>";

?>


<?php
printFooter();
?>
