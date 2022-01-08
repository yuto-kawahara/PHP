<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample01</title>
</head>

<body>
  <?php
  $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
  $db->query('drop table if exists test');
  $success = $db->query('create table test(id INT)');
  if ($success) {
    echo 'テーブルを削除して作成しました';
  } else {
    'SQLが正常に作成されませんでした';
    echo $db->error;
  }


  ?>
</body>

</html>