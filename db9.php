<?php include "connect.php"; ?>
<html>
<head><meta charset="utf-8">

</head>
<body>
	
	<?php
	$stmt = $pdo->prepare("SELECT * FROM member");
	$stmt->execute();	

	while ($row = $stmt->fetch()) { ?>
		
		ชื่อสมาชิก: <?=$row["name"]?><br>
		ที่อยู่: <?=$row["address"]?><br>
		อีเมล์: <?=$row["email"]?><br>
		<a href= "edit_form.php?username=<?=$row["username"]?>">แก้ไข<br></a>
		<hr>

		
	<?php } ?>
	
</body>
</html>