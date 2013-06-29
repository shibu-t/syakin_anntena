<?php
require_once("Smarty.class.php");
$smarty = new Smarty;

$m = new Memcached();
$m->addServer('localhost', 11211);
if ($val = $m->get('key')) {
    $smarty->assign('entries', $val);
    // echo '<pre>';
    // var_dump($val);
    // echo '</pre>';
}
$smarty->display("index.tpl");
?>
