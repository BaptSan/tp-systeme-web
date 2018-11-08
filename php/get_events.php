<?php
include_once('./php/db.php');

$stmt = $db->query("select * from events");
$events = $stmt->fetchall();