var modalBtn = document.querySelector('#open_add');
var modalBg = document.querySelector('.machine_back');
var modalClose = document.querySelector('.close_btn');


modalBtn.addEventListener('click', function () {
    modalBg.classList.add('back-active');
});

modalClose.addEventListener('click', function () {
    modalBg.classList.remove('back-active');
});
