var modalBtn = document.querySelector('#open_form');
var modalBg = document.querySelector('.modal_bg');
var modalClose = document.querySelector('.close_btn');


modalBtn.addEventListener('click', function () {
    modalBg.classList.add('bg-active');
});

modalClose.addEventListener('click', function () {
    modalBg.classList.remove('bg-active');
});
