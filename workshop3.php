<?php include "connect.php"?>
<html>
<head><meta charset="utf8"></head>
<body>
        
<?php

$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
?> 

ชื่อสมาชิก:  <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
อีเมล: <?=$row ["email"]?><br>
<img src='/img/member_photo/<?=$row["password"]?>.jpg' width='100'><br><hr>

<?php } ?>
</body>
</html>