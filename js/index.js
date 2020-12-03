const searchValue = document.querySelector('#searchV').dataset.search;
console.log(searchValue);
const recipeBox = document.querySelectorAll('.footBox');

for (let i = 0; i < recipeBox.length; i++) {
    const recipeSearchText1 = recipeBox[i].dataset.mater;
    const recipeSearchText2 = recipeBox[i].dataset.materk;

    if (recipeSearchText1.match(searchValue) == null &&
        recipeSearchText2.match(searchValue) == null) {
        recipeBox[i].classList.add('hide');
    } else {
        recipeBox[i].classList.remove('hide');
    }
};