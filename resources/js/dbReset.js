var modalBtn = document.getElementById('dbReset');
var modalBg = document.querySelector('.dialog_bg');
var modalClose = document.querySelector('.cancel');


modalBtn.addEventListener('click', function () {
    modalBg.classList.add('db-active');
});

modalClose.addEventListener('click', function () {
    modalBg.classList.remove('db-active');
});
