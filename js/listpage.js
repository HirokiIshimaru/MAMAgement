const shoppingList = document.querySelector('#shoppingList');
const shoppingBtn = document.querySelector('#shopBtn');
shoppingBtn.addEventListener('click', function () {
    shoppingList.classList.toggle("on1");
});
const shopOkList = document.querySelector('#shoppingOk');
const shopOkBtn = document.querySelector('#shopOkBtn');
shopOkBtn.addEventListener('click', function () {
    shopOkList.classList.toggle("on2");
});
const inforContent = document.querySelector('#listContent');

const infors = document.querySelectorAll('.infors');

// console.log(infors);
const innerChange = document.querySelector('#innerChange');
infors.forEach((element) => {
    element.addEventListener('click', function () {
        innerChange.innerHTML = element.getAttribute('value');
        inforContent.style.bottom = "-10%";
    })
});
const inforOff = document.querySelector('#inforOff');
inforOff.addEventListener('click', function () {
    inforContent.style.bottom = "-85%";
});