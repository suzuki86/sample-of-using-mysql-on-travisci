<?php

$pdo = new PDO(
  'mysql:host=localhost;dbname=hoge;charset=utf8',
  'root',
  ''
);
$stmt = $pdo->query('show tables');
$results = $stmt->fetchAll();
foreach($results as $table_name){
  echo $table_name[0] . PHP_EOL;
}
