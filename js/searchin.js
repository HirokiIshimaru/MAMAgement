const searchValue = document.querySelector('#searchValue').value;

const recipeBox = document.querySelectorAll('.recipeContent');

for (let i = 0; i < recipeBox.length; i++) {
    const recipeSearchText1 = recipeBox[i].dataset.name;
    const recipeSearchText2 = recipeBox[i].dataset.phonetic;
    const recipeSearchText3 = recipeBox[i].dataset.mater;
    const materViewK = recipeSearchText3.split(',');
    const recipeSearchText4 = recipeBox[i].dataset.materk;
    const materViewH = recipeSearchText4.split(',');
    if (recipeSearchText1.match(searchValue) == null &&
        recipeSearchText2.match(searchValue) == null &&
        recipeSearchText3.match(searchValue) == null &&
        recipeSearchText4.match(searchValue) == null) {
        recipeBox[i].classList.add('hide');
    } else {
        recipeBox[i].classList.remove('hide');
    }
};

const searchBtn = document.querySelector('#searchText');

const searchText = document.querySelector('#searchValue');
searchText.addEventListener('keyup', function (e) {
    let searchs = searchText.value;
    console.log(searchs);
    searchBtn.addEventListener('click', function (e) {
        searchBtn.setAttribute('href', 'searchin.php?search=' + searchs);
    });
});