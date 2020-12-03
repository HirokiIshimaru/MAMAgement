<?php
if(isset($_GET['search'])){
  $name= $_GET['search'];
}else{
  $name="";
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content="ここに説明文を設定"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@twitteraccount"/>
    <meta property="og:site_name" content="サイト名"/>
    <meta property="og:title" content="サイトタイトル"/>
    <meta property="og:description" content="サイト説明文"/>
    <meta property="og:url" content="https://www.hogehoge.com"/>
    <meta property="og:image" content="https://www.hogehoge.com./hoge.jpg"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="400"/>
    <meta property="og:type" content="website"/>
    <link rel="shortcut icon" href="http://www.hoge.hoge/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon" href="http://www.hoge.hoge/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;display=swap" rel="stylesheet"/>
    <title>mama</title>
    <link rel="stylesheet" href="css/searchIn.css"/>
  </head>
  <body>
    <header><a href="search.php" id="back"><img src="img/arrows.png" alt=""/></a>
      <h1>検索結果<span>検索結果 1,000件以上</span></h1>
      <div id="searchBox">
        <input id="searchValue" type="text" value="<?= $name ?>"/><a href="" id="searchText"><img src="img/searchColor.png" alt="検索"/></a>
      </div>
    </header>
    <main>
      <div id="categoryBox">
        <h2 id="subTema">カテゴリー</h2>
        <div id="categorys">
          <p class="foodsLmg"><a href=""><span>主食</span><img src="img/foodcategory1.png" alt=""/></a></p>
          <p class="foodsLmg"><a href=""><span>主菜</span><img src="img/foodcategory2.png" alt=""/></a></p>
          <p class="foodsLmg"><a href=""><span>副菜</span><img src="img/foodcategory3.png" alt=""/></a></p>
          <p class="foodsLmg"><a href=""><span>汁物</span><img src="img/foodcategory4.png" alt=""/></a></p>
        </div>
      </div>
      <div id="foodstuffBox">
        <h2 id="foodstuffTema">食材</h2>
        <div id="foodstuffs">
          <input type="checkbox" id="beef"/>
          <label for="beef">肉類</label>
          <input type="checkbox" id="fish"/>
          <label for="fish">魚類</label>
          <input type="checkbox" id="vegetable"/>
          <label for="vegetable">野菜</label>
          <input type="checkbox" id="fruit"/>
          <label for="fruit">果物</label>
          <input type="checkbox" id="other"/>
          <label for="other">その他</label>
        </div>
      </div>
      <div id="recipeBox">
        <h2 id="recipeTema">レシピ</h2>
        <div id="recipes">
          <div class="recipeContent" data-name="かぼちゃスープ" data-phonetic="かぼちゃすーぷ" data-mater="ぶり,大根,しょうが,砂糖,みりん,しょうゆ" data-materk="だいこん,さとう">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe1.html">
              <div class="foodLmgBox"><img src="img/foodLmg1.png" alt=""/>
                <p>かぼちゃ,玉ねぎ,バター,水,コンソメ…</p>
              </div>
              <div class="foodContent">
                <h3>かぼちゃスープ<span>ビタミンC,ミネラル,脂質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>45分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥700~800</p>
                  </div>
                </div>
              </div></a>
          </div>
          <div class="recipeContent" data-name="フワフワ卵のオムライス" data-phonetic="わふわふたまごのおむらいす" data-mater="卵,牛乳,バター,耐熱のゴムベラ,菜箸" data-materk="たまご,ぎゅうにゅう,ばたー">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe.html">
              <div class="foodLmgBox"><img src="img/recipe1.png" alt=""/>
                <p>卵,牛乳,バター…</p>
              </div>
              <div class="foodContent">
                <h3>フワフワ卵のオムライス<span>ビタミンC,ミネラル,脂質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>20分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥400~500</p>
                  </div>
                </div>
              </div></a>
          </div>
          <div class="recipeContent" data-name="親子丼" data-phonetic="おやこどんぶり" data-mater="卵,鶏もも肉,玉ねぎ,みつば,砂糖,しょうゆ,みりん,ご飯" data-materk="たまご,とりももにく,たまねぎ,さとう,ごはん">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe2.html">
              <div class="foodLmgBox"><img src="img/recipe2.png" alt=""/>
                <p>鶏もも肉,玉ねぎ・小,みつば…</p>
              </div>
              <div class="foodContent">
                <h3>親子丼<span>野菜摂取量,塩分,たんぱく質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>30分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥400~500</p>
                  </div>
                </div>
              </div></a>
          </div>
          <div class="recipeContent" data-name="カレー" data-phonetic="かれー" data-mater="玉ねぎ,水,豚バラブロック,人参,じゃがいも,カレールー,サラダ油" data-materk="たまねぎ,みず,ぶたばらぶろっく,にんじん,じゃがいも,かれーるー,さらだゆ">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe3.html">
              <div class="foodLmgBox"><img src="img/recipe3.png" alt=""/>
                <p>豚バラブロック,にんじん,玉ねぎ…</p>
              </div>
              <div class="foodContent">
                <h3>カレー<span>野菜摂取量,塩分,たんぱく質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>30分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥200~500</p>
                  </div>
                </div>
              </div></a>
          </div>
          <div class="recipeContent" data-name="肉じゃが" data-phonetic="にくじゃが" data-mater="玉ねぎ,じゃがいも,人参,牛肉,白滝,サラダ油,だし汁(かつおだしなど),キッコーマン特選丸大豆しょうゆ,マンジョウ濃厚熟成本みりん,砂糖" data-materk="たまねぎ,じゃがいも,にんじん,ぎゅうにく,しらたき,さらだゆ">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe4.html">
              <div class="foodLmgBox"><img src="img/recipe4.png" alt=""/>
                <p>じゃがいも,玉ねぎ,にんじん…</p>
              </div>
              <div class="foodContent">
                <h3>肉じゃが<span>野菜摂取量,塩分,たんぱく質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>20分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥300~500</p>
                  </div>
                </div>
              </div></a>
          </div>
          <div class="recipeContent" data-name="味噌汁" data-phonetic="みそしる" data-mater="水,顆粒出汁,お好みの具材,お好みの味噌" data-materk="みず">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe5.html">
              <div class="foodLmgBox"><img src="img/recipe5.png" alt=""/>
                <p>水,顆粒出汁,お好みの具材…</p>
              </div>
              <div class="foodContent">
                <h3>味噌汁<span>野菜摂取量,塩分,たんぱく質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>10分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥100~200</p>
                  </div>
                </div>
              </div></a>
          </div>
          <div class="recipeContent" data-name="ふれんちとーすと" data-phonetic="フレンチトースト" data-mater="卵,食パン,牛乳,砂糖,有塩バター,はちみつ" data-materk="たまご,しょくぱん,ぎゅうにゅう,さとう,ばたー">
            <label>
              <input type="checkbox"/><span class="kiniiriCheck"></span>
            </label><a href="recipe6.html">
              <div class="foodLmgBox"><img src="img/recipe6.png" alt=""/>
                <p>食パン(4枚切り),卵,牛乳…</p>
              </div>
              <div class="foodContent">
                <h3>フレンチトースト<span>野菜摂取量,塩分,たんぱく質,エネルギー</span></h3>
                <div class="foodDetailed">
                  <div class="foodPeaple">
                    <h4>作れる人数</h4>
                    <p>4人前</p>
                  </div>
                  <div class="createTime">
                    <h4>調理時間</h4>
                    <p>10分</p>
                  </div>
                  <div class="money">
                    <h4>費用</h4>
                    <p>¥100~200</p>
                  </div>
                </div>
              </div></a>
          </div>
        </div>
      </div>
    </main>
    <div id="sirohaba"></div>
    <nav>
      <ul>
        <li><a href="index.php"><img src="img/recipeLmg.png" alt="レシピ画像"/><span>レシピ</span></a></li>
        <li><a href="search.php"><img src="img/searchLmg.png" alt="サーチ画像"/><span>検索</span></a></li>
        <li><a href="materialpage.php"><img src="img/metLmg.png" alt=""/><span>材料</span></a></li>
        <li><a href="listpage.html"><img src="img/listLmg.png" alt=""/><span>リスト</span></a></li>
        <li><a href="mypage.html"><img src="img/mypageLmg.png" alt=""/><span>マイページ</span></a></li>
      </ul>
    </nav>
    <script src="js/searchin.js"></script>
  </body>
</html>