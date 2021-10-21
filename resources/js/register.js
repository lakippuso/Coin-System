const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const username = document.getElementById("username");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");
const email = document.getElementById("email");

const form = document.getElementById("form");

const firstname_error = document.getElementById("firstname_error");
const lastname_error = document.getElementById("lastname_error");
const username_error = document.getElementById("username_error");
const password_error = document.getElementById("password_error");
const cpassword_error = document.getElementById("cpassword_error");
const email_error = document.getElementById("email_error");

console.log(username.parentNode.nodeName+" heloe");

form.addEventListener('submit', (e) =>{
    console.clear();
    var pass = 0;
    if(firstname.value == '' || firstname.value == null){
        console.log('Firstname empty');
        firstname.style.border = "1px solid red";
        firstname_error.style.display = "block";
        pass += 1;
    }
    else{
        console.log('Firstname not empty');
        firstname.style.border = "1px solid grey";
        firstname_error.style.display = "none";
    }
    //lastname
    if(lastname.value == '' || lastname.value == null){
        console.log('Lastname empty');
        lastname.style.border = "1px solid red";
        lastname_error.style.display = "block";
        pass += 1;
    }
    else{
        console.log('Lastname not empty');
        lastname.style.border = "1px solid black";
        lastname_error.style.display = "none";
    }
    //username
    if(username.value == '' || username.value == null){
        console.log('username empty');
        username.style.border = "1px solid red";
        username_error.style.display = "block";
        pass += 1;
    }
    else{
        console.log('username not empty');
        username.style.border = "1px solid black";
        username_error.style.display = "none";
    }
    //email
    if(email.value == '' || email.value == null){
        console.log('email empty');
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        pass += 1;
    }
    else{
        console.log('email not empty');
        email.style.border = "1px solid black";
        email_error.style.display = "none";
    }
    //password
    if(password.value == '' || password.value == null){
        console.log('password empty');
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        pass += 1;
    }
    else{
        console.log('password not empty');
        password.style.border = "1px solid black";
        password_error.style.display = "none";
    }
    //cpassword
    if(cpassword.value == '' || cpassword.value == null){
        console.log('cpassword empty');
        cpassword.style.border = "1px solid red";
        cpassword_error.style.display = "block";
        cpassword_error.innerHTML = "This Field is required!";
        pass += 1;
    }
    else{
        console.log('cpassword not empty');
        cpassword.style.border = "1px solid black";
        cpassword_error.style.display = "none";
        //confirm password
        if(password.value != cpassword.value){
            console.log('Password does not match');
            cpassword.style.border = "1px solid red";
            cpassword_error.style.display = "block";
            cpassword_error.innerHTML = "Password Doesn't Match!";
            pass += 1;
        }
    }
    if(pass != 0){
        e.preventDefault();
    }
})