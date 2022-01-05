<?php
$return = file_put_contents('data/news.txt', 'ホームページをリニューアルしました');

if ($return == true) {
  echo '書き込み完了';
} else {
  echo '書き込み失敗';
}
