<?php
    include_once "php/mysql.php";
    $instance -> set_charset("utf8");
    $sql="SELECT * FROM `mama_met` ORDER BY `years` ASC, `month` ASC, `day` ASC";
    $query = $instance->query($sql);
    if(!$query){
        print "SQL Query Error";
        exit;
    }else{
        $row = $query->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAMA</title>
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
    <header>
        <img src="img/time.png" alt="">
        <p>
            <span id="searchV" data-search="<?= substr($row["material"],6,-6); ?>"><?= $row["month"] ?>月<?= $row["day"] ?>日 <?= substr($row["material"],6,-6); ?><span>他</span></span>
            <span>の期限が近づいてるよ〜♪ </span>
        </p>
        <span id="bottomArrow"></span>
    </header>
    <main id="mainContentBox">
        <div id="temaText">
            <h2>おすすめ</h2>
            <img src="img/mamaC.png" alt="">
        </div>
        <div id="foodContentBox">
            <div class="footBox" data-mater="卵,牛乳,バター,耐熱のゴムベラ,菜箸" data-materk="たまご,ぎゅうにゅう,ばたー">
                <a href="recipe.html">
                    <img src="img/food1.png" alt="">
                    <div class="foodContent">
                        <h3>フワフワ卵のオムライス</h3>
                        <p>
                            ビタミンC,ミネラル,脂質,
                            エネルギー …
                        </p>
                    </div>
                </a>
            </div>
            <div class="footBox" data-mater="卵,鶏もも肉,玉ねぎ,みつば,砂糖,しょうゆ,みりん,ご飯" data-materk="たまご,とりももにく,たまねぎ,さとう,ごはん">
                <a href="recipe2.html">
                    <img src="img/food2.png" alt="">
                    <div class="foodContent">
                        <h3>親子丼</h3>
                        <p>タンパク質,ミネラル</p>
                    </div>
                </a>
            </div>
            <div class="footBox" data-mater="玉ねぎ,水,豚バラブロック,人参,じゃがいも,カレールー,サラダ油"
                data-materk="たまねぎ,みず,ぶたばらぶろっく,にんじん,じゃがいも,かれーるー,さらだゆ">
                <a href="recipe3.html">
                    <img src="img/food3.png" alt="">
                    <div class="foodContent">
                        <h3>カレー</h3>
                        <p>
                            エネルギー,脂質
                        </p>
                    </div>
                </a>
            </div>
            <div class="footBox" data-mater="玉ねぎ,じゃがいも,人参,牛肉,白滝,サラダ油,だし汁(かつおだしなど),キッコーマン特選丸大豆しょうゆ,マンジョウ濃厚熟成本みりん,砂糖"
                data-materk="たまねぎ,じゃがいも,にんじん,ぎゅうにく,しらたき,さらだゆ">
                <a href="recipe4.html">
                    <img src="img/food4.png" alt="">
                    <div class="foodContent">
                        <h3>肉じゃが</h3>
                        <p>
                            ビタミンB2 , 脂質
                        </p>
                    </div>
                </a>
            </div>
            <div class="footBox" data-phonetic="みそしる" data-mater="水,顆粒出汁,お好みの具材,お好みの味噌" data-materk="みず">
                <a href="recipe5.html">
                    <img src="img/food5.png" alt="">
                    <div class="foodContent">
                        <h3>味噌汁</h3>
                        <p>
                            ビタミンB2 , 脂質
                        </p>
                    </div>
                </a>
            </div>
            <div class="footBox" data-phonetic="フレンチトースト" data-mater="卵,食パン,牛乳,砂糖,有塩バター,はちみつ" data-materk="たまご,しょくぱん,ぎゅうにゅう,さとう,ばたー">
                <a href="recipe6.html">
                    <img src="img/food6.png" alt="">
                    <div class="foodContent">
                        <h3>フレンチトースト</h3>
                        <p>
                            ビタミンC,ミネラル,脂質,
                            エネルギー
                        </p>
                    </div>
                </a>
            </div>
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
    <script src="js/index.js"></script>
</body>

</html>