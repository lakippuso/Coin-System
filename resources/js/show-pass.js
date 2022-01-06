const visibilityToggle = document.querySelector('#pass-visible');

const input = document.querySelector('.login-pass');

var password = true;

visibilityToggle.addEventListener('click', function() {
  if (password) {
    input.setAttribute('type', 'text');
    visibilityToggle.innerHTML = 'visibility';
  } else {
    input.setAttribute('type', 'password');
    visibilityToggle.innerHTML = 'visibility_off';
  }
  password = !password;
  
});