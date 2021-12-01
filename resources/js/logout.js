var modalBtn = document.querySelector('#log-out');
var modalBg = document.querySelector('.logout_bg')
var modalCancel = document.querySelector('.lg_cancel');;

modalBtn.addEventListener('click', function () {
    modalBg.classList.add('lg-active');
});

modalCancel.addEventListener('click', function () {
    modalBg.classList.remove('lg-active');
});