<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
</head>

<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<div>
    <div>
        <h2>ชื่อ-นามสกุล:<?= $row["name"] ?></h2>
        ชื่อสมาชิก:<?= $row["username"]?><br>
        รหัสผ่าน:<?= $row["password"]?> <br>
        ที่อยู่:<?= $row["address"]?><br>
        มือถือ:<?= $row["mobile"]?><br>
        อีเมล:<?= $row["email"]?><br>

    </div>
</div>
</body>

</html>