<?php include "connect.php"; ?>
<?php
	$stmt = $pdo->prepare("SELECT * FROM member WHERE username =?");
	$stmt->bindParam(1,$_GET['username']);
	$stmt->execute();
	$row = $stmt->fetch();
?>


<html>
<head><meta charset="UTF-8"></head>
<body>

	<form action="edit_member.php" method="post">
	Username: <input type="text" name="username" value = "<?=$row["username"]?>"><br><br><br>
	Password: <input type="Password" name="password" value = "<?=$row["password"]?>"><br><br>
	Name: <input type="text" name="name" value = "<?=$row["name"]?>"><br><br>
	Address: <br><br>
	<textarea name="address" rows="3" cols="40" value = "<?=$row["address"]?>"></textarea><br><br>
	Tel.: <input type="Tel" name="mobile" value = "<?=$row["mobile"]?>"><br><br>
	Email: <input type="text" name="email" value = "<?=$row["email"]?>"><br><br>
	<input type="submit" value="สมัครสมาชิก ">
	</form>
</body>
</html>