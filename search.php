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
    <link rel="stylesheet" href="css/search.css">
</head>

<body>
    <header id="searchBox">
        <a href="#" id="searchOpen" href="">
            <img src="img/textsearchLmg.png" alt="">
        </a>
        <input id="searchText" type="text" placeholder="材料を入力してください" value="">
    </header>
    <main>
        <div id="seasonContentBox">
            <h2 class="subTema">旬の食材</h2>
            <div id="seasonFoodBox">
                <p class="seasonFood">さつまいも</p>
                <p class="seasonFood">かぼちゃ</p>
                <p class="seasonFood">白菜</p>
            </div>
        </div>
        <div id="myMaterialBox">
            <h2 class="subTema">その他のオススメ</h2>
            <?php foreach($materView as $k) : ?>
            <div class="myMaterial">
                <a href="searchin.php?search=<?= substr($k["material"],6,-6); ?>">
                    <p class="materialType">
                        <img src="img/<?= substr($k["material"],0,5); ?>.png" alt="yasai">
                    </p>
                    <p class="materialText">
                        <span><?= substr($k["material"],6,-6); ?></span>
                        <span>
                            <img src="img/mtime.png" alt="">
                            <?= $k["years"] ?>/<?= $k["month"] ?>/<?= $k["day"] ?>
                        </span>
                    </p>
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </main>
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
    <script src="js/search.js"></script>
</body>

</html>