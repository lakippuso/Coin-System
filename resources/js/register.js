const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const username = document.getElementById("username");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");
const email = document.getElementById("email");

const form = document.getElementById("form");


form.addEventListener('submit', (e) =>{
    console.clear();
    var pass = 0;
    if(firstname.value == '' || firstname.value == null){
        console.log('Firstname empty');
        firstname.style.border = "1px solid red";
        pass += 1;
    }
    else{
        console.log('Firstname not empty');
        firstname.style.border = "1px solid grey";
    }
    //lastname
    if(lastname.value == '' || lastname.value == null){
        console.log('Lastname empty');
        lastname.style.border = "1px solid red";
        pass += 1;
    }
    else{
        console.log('Lastname not empty');
        lastname.style.border = "1px solid black";
    }
    //username
    if(username.value == '' || username.value == null){
        console.log('username empty');
        username.style.border = "1px solid red";
        pass += 1;
    }
    else{
        console.log('username not empty');
        username.style.border = "1px solid black";
    }
    //email
    if(email.value == '' || email.value == null){
        console.log('email empty');
        email.style.border = "1px solid red";
        pass += 1;
    }
    else{
        console.log('email not empty');
        email.style.border = "1px solid black";
    }
    //password
    if(password.value == '' || password.value == null){
        console.log('password empty');
        password.style.border = "1px solid red";
        pass += 1;
    }
    else{
        console.log('password not empty');
        password.style.border = "1px solid black";
    }
    //cpassword
    if(cpassword.value == '' || cpassword.value == null){
        console.log('cpassword empty');
        cpassword.style.border = "1px solid red";
        pass += 1;
    }
    else{
        console.log('cpassword not empty');
        cpassword.style.border = "1px solid black";
    }
    //confirm password
    if(password.value != cpassword.value){
        console.log('Password does not match');
        cpassword.style.border = "1px solid red";
        pass += 1;
    }
    if(pass != 0){
        e.preventDefault();
    }
})