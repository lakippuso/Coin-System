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
    var id_input = document.querySelector('#machine_id_input');
    var name_input = document.querySelector('#machine_name_input');
    var error = 0;
    //Machine ID Input 
    console.log(id_input.value.toString().length);
    if(id_input.value === '' || isNaN(id_input.value) || (id_input.value.toString().length > 10)){
        id_input.style = "border: 2px solid red";
        error +=1;
    }
    else{
        id_input.style = "border: none";
    }
    //Machine Name Input
    if(name_input.value === ''){
        name_input.style = "border: 2px solid red";
        error +=1;
    }
    else{
        name_input.style = "border: none";
    }

    if(error != 0){
        e.preventDefault();
    }
})
