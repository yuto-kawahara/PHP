<?php
$file = $_FILES['picture'];

if ($file['type'] === 'image/png' || $file['type'] === 'image/jpeg') {
  $pass = 'images/' . $file['name'];
  $success = move_uploaded_file($file['tmp_name'], $pass);
  if ($success) {
    echo '成功しました';
  } else {
    echo '失敗しました';
  }
} else {
  echo 'ファイル形式が不正です';
}
