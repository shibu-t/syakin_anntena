<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>シャキンあんてな</title>
<body>
<?php
$entryNum = 0;
$entries = array();
$feeds = array(
    "http://underworld2ch.blog29.fc2.com/?xml",//アンダーワールド
    "http://gasoku.livedoor.biz/index.rdf",//ヴィブロ
    "http://blog.livedoor.jp/vipsister23/index.rdf",//妹はVipper
    "http://blog.livedoor.jp/news23vip/index.rdf",//VIPPERな俺
    "http://www.mudainodocument.com/index.rdf",//無題のドキュメント
    "http://blog.livedoor.jp/nicovip2ch/index.rdf",//ニコニコVIP2ch
    "http://chaos2ch.com/index.rdf",//カオスちゃんねる
    "http://mamesoku.com/index.rdf",//まめ速
    "http://digital-thread.com/index.rdf",//デジタルニューススレッド
    "http://brow2ing.doorblog.jp/index.rdf",//ブラブラブラウジング
    "http://bipblog.com/index.rdf",//BIPブログ
    "http://blog.livedoor.jp/insidears/index.rdf",//ニュー速VIPブログ(`･ω･´)
    "http://blog.livedoor.jp/himasoku123/index.rdf",//暇人速報
    "http://suiseisekisuisui.blog107.fc2.com/?xml",//すくいぬ
    "http://workingnews.blog117.fc2.com/?xml",//働くモノニュース
    "http://news020.blog13.fc2.com/?xml",//ニュース２ちゃんねる
    "http://news4vip.livedoor.biz/index.rdf",//ニュー速クオリティ
    "http://blog.livedoor.jp/dqnplus/index.rdf",//痛いニュース
    "http://blog.livedoor.jp/kinisoku/index.rdf",//キニ速
    "http://blog.livedoor.jp/goldennews/index.rdf",//ゴールデンタイムズ
    "http://www.negisoku.com/index.rdf",//ネギ速
    "http://michaelsan.livedoor.biz/index.rdf",//もみあげチャーシュー
);
foreach ($feeds as $feed) {
    $rss = simplexml_load_file($feed);
    $i = 0;
    foreach ($rss->item as $item) {
        if( $i++ == 10 ) { break; }
        $dc = $item->children('http://purl.org/dc/elements/1.1/');
        $entries[$entryNum]['title'] = (string)$item->title;
        $entries[$entryNum]['link'] = (string)$item->link;
        $entries[$entryNum]['blogName'] = (string)$rss->channel->title;
        $entries[$entryNum]['blogUrl'] = (string)$rss->channel->link;
        $entries[$entryNum]['date'] = (string)$dc->date;
        $entryNum++;
    }
}

foreach($entries as $key => $val) {
    $date[$key] = $val['date'];
}

array_multisort($date,SORT_STRING,SORT_ASC,$entries);
// echo '<pre>';
// var_dump($entries);
// echo '</pre>';

    // $link = $item->link;
    // $title = $item->title;
    // $date = date('Y.m.d.H.i.s', strtotime($dc->date));

$m = new Memcached();
$m->addServer('localhost', 11211);
$m->set('key', $entries, 60);
?>
</body>
</html>
