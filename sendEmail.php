<?php
$to = "arizo1987@gmail.com";
$subject = "My subject";

$txt = "Организация ".$_POST["orgName"] . "\n" . " в лице " . $_POST["person"] . " из города " . $_POST["city"] . "\n" . " контактный телефон " . $_POST["phone"] . " e-mail " . $_POST["email"] . "\n" . " ищут для " . "\n" . $_POST["producer"] . $_POST["serial"] . $_POST["year"] . " года " . "\n" . " следующие детали: " . "\n" . $_POST["partsNeeded"];

mail($to,$subject,$txt);
?>
<script type="text/javascript">replace.href = 'index.html';</script>