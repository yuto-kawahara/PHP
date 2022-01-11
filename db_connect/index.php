<?php
require('db_connect.php');

// ユーザー入力なし query
$sql = 'select * from contacts where id = 1';
$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();
// echo '<pre>';
// var_dump($result);
// echo '<pre>';

// ユーザー入力あり prepare, bind, execute 悪意あるユーザーに操作されないようにセキュリティ対策を徹底
$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 2, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetchAll();
echo '<pre>';
var_dump($result);
echo '<pre>';

// トランザクション　まとまって処理
$pdo->beginTransaction();

try {
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue('id', 2, PDO::PARAM_INT);
  $stmt->execute();
  $pdo->commit();
} catch (PDOException $e) {
  $pdo->rollBack();
}
