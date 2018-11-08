<?php
include_once('./php/db.php');

$stmt = $db->query("select * from users");
$users = $stmt->fetchall();