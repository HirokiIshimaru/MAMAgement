const searchBtn = document.querySelector('#searchOpen');

const searchText = document.querySelector('#searchText');
searchText.addEventListener('keyup', function (e) {
    let searchs = searchText.value;
    console.log(searchs);
    searchBtn.addEventListener('click', function (e) {
        searchBtn.setAttribute('href', 'searchin.php?search=' + searchs);
    });
});