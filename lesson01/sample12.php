<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if ($time < 11) : ?>
  <p>※営業時間外です</p>
<?php else : ?>
  <p>ようこそ</p>
<?php endif; ?>