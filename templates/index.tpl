


<!DOCTYPE html>
<html lang="ja">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="ALL" /> 
    <link rel="stylesheet" type="text/css" media="screen, projection, tv" href="css/import.css" />
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
    <!-- AllTheFavIcons.com standard favicon_64.png -->
    <link rel="icon" type="image/png" href="/favicons/favicon_64.png" />
    <!-- AllTheFavIcons.com favicon_57.png for iPhone -->
    <link rel="apple-touch-icon" type="image/png" href="/favicons/favicon_57.png" />
    <!-- AllTheFavIcons.com favicon_114.png for Retina iPhone -->
    <link rel="apple-touch-icon" type="image/png" href="/favicons/favicon_114.png" sizes="114x114" />
    <!-- AllTheFavIcons.com favicon_72.png for iPad -->
    <link rel="apple-touch-icon" type="image/png" href="/favicons/favicon_72.png" sizes="72x72" />
    <!-- AllTheFavIcons.com favicon_144.png for Retina iPad -->
    <link rel="apple-touch-icon" type="image/png" href="/favicons/favicon_144.png" sizes="144x144" />
    <!-- AllTheFavIcons.com multi resolution favicon.ico for IE -->
    <link rel="shortcut icon" href="/favicon.ico">


    <title>シャキンあんてな</title> 
    <meta name="description" content="2ちゃんねるのアンテナサイト。シンプルでみやすい。" />
    <meta name="keywords" content="shibu_t,２ｃｈまとめ,アンテナ,ホームページ" />
    <meta name="author" content="shibu_t" />
    <meta name="copyright" content="Copyright &copy;渋谷貴裕" />
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAtPFJi_sownlb7nnSF6joTRR8VsB2DMwrgIemibcYry-HBlolORRhhoOmBb3mzSDn5a9LKd48QWFjSg"></script> 

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23129769-5']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

</head> 
<body> 
<div id="wrapper">
    <div id = "header">
        <p class="title"><a href ="http://www25324u.sakura.ne.jp/syakin_anntena/index.php"><img src="logo.png"></a></p>
        <p class="address"><a href ="http://twitter.com/shibu_t" target="_blank">Produced by shibu_t</a></p>
    </div>

    <div id="feed">
        <ul>
            {foreach from=$entries item=entry}
            <li class="line">
                <ul>
                    <li class="date">{$entry.date|date_format:"%m/%d/%H:%M"}</li>
                    <li class="articletitle"><a href="{$entry.link}">{$entry.title}</a></li>
                    <li class="hatena"><img src="http://b.hatena.ne.jp/entry/image/{$entry.link}"></li>
                    <li class="blogname"><a href="{$entry.blogUrl}">{$entry.blogName}</a></li>
                </ul>
            </li>
            {/foreach}
        </ul>
    </div>
</div>
</body> 
</html>
