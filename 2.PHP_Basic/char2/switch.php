
<?php
    $tag=2;
//switch不进行比较
    switch ($tag){
        case 1:
            $tag='h1';break;
        case 2:
            $tag='h2';break;
        case 3:
            $tag='h3';break;
        case 4:
            $tag='h4';break;
        case 5:
            $tag='h5';break;
        case 6:
            $tag='h6';break;
        default: $tag='strong';break;
    }
?>

<<?php echo $tag?>>致橡树</<?php echo $tag?>>
<div>我必须是你近旁的一株木棉，</div>
<p>作为树的形象和你站在一起。</p>
<p>根，紧握在地下；</p>
<p>叶，相触在云里。</p>
<p>每一阵风过，</p>
<p>我们都互相致意，</p>
<br><br>

<?php
$day=4;
//switch不进行比较
switch ($day){
    case 1:
        echo '今天星期一';break;
    case 2:
        echo '今天星期二';break;
    case 3:
        echo '今天星期三';break;
    case 4:
        echo '今天星期四';break;
    case 5:
        echo '今天星期五';break;
    case 6:
        echo '今天星期六';break;
    case 7:
        echo '今天星期日';break;
    default: echo '今天星期八！';break;
}
?>
