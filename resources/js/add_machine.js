var addBtn = document.querySelector('#open_add');
var addBg = document.querySelector('.machine_back');
var addClose = document.querySelector('.close_btn');
var machine_form = document.querySelector('#add_machine_form');

addBtn.addEventListener('click', function () {
    addBg.classList.add('back-active');
});

addClose.addEventListener('click', function () {
    addBg.classList.remove('back-active');
});

machine_form.addEventListener('submit', function(e){
    var format = /[ `!@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?~]/;
    var id_input = document.querySelector('#machine_id_input');
    var name_input = document.querySelector('#machine_name_input');
    
    var id_value = id_input.value.trim();
    var name_value = name_input.value.trim();
    var error = 0;

    //Machine ID Input 
    if(id_value == '' || isNaN(id_value) || (id_value.toString().length > 10)){
        id_input.style = "border: 2px solid red";
        error +=1;
        console.log(format.test(id_value));
        console.log(id_value);
    }
    else{
        id_input.style = "border: none";
    }
    //Machine Name Input
    if(name_value == ''){
        name_input.style = "border: 2px solid red";
        error +=1;
        console.log("Name is empty");
    }
    else if(format.test(name_value)){
        console.log("Name has special char");
    }
    else{
        name_input.style = "border: none";
    }

    e.preventDefault();
    if(error != 0){
    }
})
