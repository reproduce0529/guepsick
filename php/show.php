<?php 
ini_set('allow_url_fopen', 'ON');
include 'simple_html_dom.php';
$month = $_GET['month'];
$day = $_GET['day'];
$time = $_GET['re'];
$year = date("y", time()); 
$url = 'http://school.gyo6.net/gbsw/food/20'.$year.'/'.$month.'/'.$day.'/'.$time;
$html = file_get_html($url); 

$a = $html->find('div');
if($time == 'breakfast'){
    $d = '아침';
    $vav = "lunch";
    $vab = "dinner";
    $vv1 = "점심 메뉴 보기";
    $vv2 = "저녁 메뉴 보기";

}else if($time == 'lunch'){
    $d = '점심';
    
    $vav = "breakfast";
    $vab = "dinner";
    $vv1 = "아침 메뉴 보기";
    $vv2 = "저녁 메뉴 보기";
}else if($time == 'dinner'){
    $d = '저녁';
    
    $vav = "breakfast";
    $vab = "lunch";
    $vv1 = "아침 메뉴 보기";
    $vv2 = "점심 메뉴 보기";
}


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBSW 급식충(忠)</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
    <div class="box">
        <p>GBSW</p>
    <p><?php echo $year."년 ".$month."월 ".$day."일 ".$d." 급식" ; ?></p>
    
    <div class="menu_box">
        
        <br/>
        
    <?php 
        echo $a[1];
    
        
    
    ?>

    <a href="../php/show.php?month=<?php echo $month; ?>&day=<?php echo $day; ?>&re=<?php echo $vav; ?>"><?php echo $vv1 ?></a>
    <a href="../php/show.php?month=<?php echo $month; ?>&day=<?php echo $day; ?>&re=<?php echo $vab; ?>"><?php echo $vv2 ?></a>

    </div>
    
    
         
    </div>
</body>

</html>
