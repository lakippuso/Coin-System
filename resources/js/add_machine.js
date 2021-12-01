var addBtn = document.querySelector('#open_add');
var addBg = document.querySelector('.machine_back');
var addClose = document.querySelector('.close_btn');


addBtn.addEventListener('click', function () {
    addBg.classList.add('back-active');
});

addClose.addEventListener('click', function () {
    addBg.classList.remove('back-active');
});
