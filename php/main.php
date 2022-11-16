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
    <header class="header">
        <p>경북소프트웨어고등학교</p>    
        <p>급식충(忠)</p>

    </header>

    <div class="nal ">
        <p>오늘 날짜</p>
        <?php 
            $dateString = date("m 월 d 일", time()); 
            $dateMonth = date("m", time());
            $dateDay = date("d", time());
            echo $dateString;
        ?>
    </div>
        
    
    <section class="content">
        <form action="../php/show.php" method="get" class="form">
            <select name="month">
                <option value="<?php echo $dateMonth ?>"><?php echo $dateMonth ?>월</option>
                <option value="01">1월</option>
                <option value="02">2월</option>
                <option value="03">3월</option>
                <option value="04">4월</option>
                <option value="05">5월</option>
                <option value="06">6월</option>
                <option value="07">7월</option>
                <option value="08">8월</option>
                <option value="09">9월</option>
                <option value="10">10월</option>
                <option value="11">11월</option>
                <option value="12">12월</option>
            </select>

            <select name="day">
                <option value="<?php echo $dateDay ?>"><?php echo $dateDay ?>일</option>
                <option value="1">1일</option>
                <option value="2">2일</option>
                <option value="3">3일</option>
                <option value="4">4일</option>
                <option value="5">5일</option>
                <option value="6">6일</option>
                <option value="7">7일</option>
                <option value="8">8일</option>
                <option value="9">9일</option>
                <option value="10">10일</option>
                <option value="11">11일</option>
                <option value="12">12일</option>
                <option value="13">13일</option>
                <option value="14">14일</option>
                <option value="15">15일</option>
                <option value="16">16일</option>
                <option value="17">17일</option>
                <option value="18">18일</option>
                <option value="19">19일</option>
                <option value="20">20일</option>
                <option value="21">21일</option>
                <option value="22">22일</option>
                <option value="23">23일</option>
                <option value="24">24일</option>
                <option value="25">25일</option>
                <option value="26">26일</option>
                <option value="27">27일</option>
                <option value="28">28일</option>
                <option value="29">29일</option>
                <option value="30">30일</option>
                <option value="31">31일</option>
            </select>

            <select class="di" name="re">
                <option value="00">-끼니 선택-</option>
                <option value="breakfast">아침</option>
                <option value="lunch">점심</option>
                <option value="dinner">저녁</option>
            </select>

            <br />

            <input type="submit" value="밥이 뭘까">
        </form>
    </section>
</body>
</html>