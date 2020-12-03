<?php
    include_once "php/mysql.php";
    $instance -> set_charset("utf8");
    $sql="SELECT * FROM `mama_met` ORDER BY `years` ASC, `month` ASC, `day` ASC";
    $query = $instance->query($sql);
    if(!$query){
        print "SQL Query Error";
        exit;
    }else{
        $materView = [];
        while($row = $query->fetch_assoc()){
            $materView[]=$row;
        }
    }
    // $name=[];
    // $type=[];
    // for($i=0;$i<count($materView);$i++){
    //     $materialName=$materView[$i]["material"];
    //     $name=substr($materialName, 0, -6);
    //     $type=substr($materialName, -5);
    // }
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAMA</title>
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/materialpage.css">
</head>

<body>
    <header>
        <p id="backPage">
            <a href="">
                <img src="img/leftArrow.png" alt="戻る">
            </a>
        </p>
        <h2>食材一覧</h2>
    </header>
    <main>
        <div id="detailedSearch">
            <h3 class="subText">詳細検索</h3>
            <div id="searchBox">
                <p class="searchD">野菜</p>
                <p class="searchD">果物</p>
                <p class="searchD">肉類</p>
                <p class="searchD">魚類</p>
                <p class="searchD">その他</p>
            </div>
        </div>
        <div id="sortBox">
            <h3 class="subText">並び替え</h3>
            <div id="timeDayBox">
                <div id="deadlineBox">
                    <p>期限日</p>
                    <p><img src="img/selectDown.png" alt=""></p>
                </div>
                <div id="purchaseBox">
                    <p>購入日</p>
                    <p><img src="img/selectDown.png" alt=""></p>
                </div>
            </div>
        </div>
        <div id="materialBox">
            <?php foreach($materView as $k) : ?>
            <div class="material">
                <p class="materialLmg">
                    <span class="<?= substr($k["material"],0,5); ?>"></span>
                    <img src="img/<?= substr($k["material"], -5); ?>.png" alt="<?= substr($k["material"], 0, 5); ?>">
                </p>
                <p><?= substr($k["material"],6,-6); ?></p>
                <div class="materialContent">
                    <div class="materialContentBox">
                        <span class="leftBack <?= substr($k["material"],0,5); ?>"></span>
                        <span id="cansle"> <a href="php/cansle.php?id=<?= $k["id"] ?>"><img src="img/sakujyo.png" alt=""></a></span>
                        <h3><?= substr($k["material"],6,-6); ?></h3>
                        <div class="timeBox mainBox">
                            <p class="timeLmg subLmg"><img src="img/timeIn.png" alt=""></p>
                            <p class="timeTextBox contentText">
                                <span>期限日</span>
                                <span><?= $k["years"] ?>/<?= $k["month"] ?>/<?= $k["day"] ?></span>
                            </p>
                        </div>
                        <div class="purchaseDateBox mainBox">
                            <p class="purchaseDateLmg subLmg"><img src="img/kaiLmg.png" alt=""></p>
                            <p class="timeTextBox contentText">
                                <span>購入日</span>
                                <span><?= $k["upYear"] ?>/<?= $k["upMonth"] ?>/<?= substr($k["upDay"],1,-1); ?></span>
                            </p>
                        </div>
                        <div class="quantityBox mainBox">
                            <p class="quantityLmg subLmg"><img src="img/kosuLmg.png" alt=""></p>
                            <p class="timeTextBox contentText">
                                <span>個数</span>
                                <span>2</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </main>
    <div id="materPlus">
        <p class="btnLmg"><a href=""><img src="img/cameraLmg.png" alt=""></a></p>
        <p class="btnLmg"><img src="img/plusLmg.png" alt=""></p>
        <p class="btnLmg"><a href="listAdd.html"><img src="img/textLmg.png" alt=""></a></p>
    </div>
    <div id="yohaku"></div>
    <footer>
        <ul>
            <li class="recipeNav">
                <a href="index.php">
                    <img src="img/recipeLmg.png" alt="">
                    レシピ
                </a>
            </li>
            <li class="searchNav">
                <a href="search.php">
                    <img src="img/searchLmg.png" alt="">
                    検索
                </a>
            </li>
            <li class="materialNav">
                <a href="materialpage.php">
                    <img src="img/metLmg.png" alt="">
                    材料
                </a>
            </li>
            <li class="listNav">
                <a href="listpage.html">
                    <img src="img/listLmg.png" alt="">
                    リスト
                </a>
            </li>
            <li class="mypageNav">
                <a href="mypage.html">
                    <img src="img/mypageLmg.png" alt="">
                    マイページ
                </a>
            </li>
        </ul>
    </footer>
    <script src="js/materialpage.js"></script>
</body>