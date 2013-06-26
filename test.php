<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>シャキンあんてな</title>
<body>
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
if ($val = $m->get('key')) {
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}
?>
</body>
</html>