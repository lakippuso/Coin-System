const visibilityToggle1 = document.querySelector('#pass-visible1');

const input1 = document.querySelector('.show-pass1');

var password = true;

visibilityToggle1.addEventListener('click', function() {
  if (password) {
    input1.setAttribute('type', 'text');
    visibilityToggle1.innerHTML = 'visibility';
  } else {
    input1.setAttribute('type', 'password');
    visibilityToggle1.innerHTML = 'visibility_off';
  }
  password = !password;
  
});


const visibilityToggle2 = document.querySelector('#pass-visible2');

const input2 = document.querySelector('.show-pass2');

var password = true;

visibilityToggle2.addEventListener('click', function() {
  if (password) {
    input2.setAttribute('type', 'text');
    visibilityToggle2.innerHTML = 'visibility';
  } else {
    input2.setAttribute('type', 'password');
    visibilityToggle2.innerHTML = 'visibility_off';
  }
  password = !password;
  
});

const visibilityToggle3 = document.querySelector('#pass-visible3');

const input3 = document.querySelector('.show-pass3');

var password = true;

visibilityToggle3.addEventListener('click', function() {
  if (password) {
    input3.setAttribute('type', 'text');
    visibilityToggle3.innerHTML = 'visibility';
  } else {
    input3.setAttribute('type', 'password');
    visibilityToggle3.innerHTML = 'visibility_off';
  }
  password = !password;
  
});