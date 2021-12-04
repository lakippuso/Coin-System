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
    var custom_input = document.querySelector('#machine_custom_input');
    var machine_type_dropdown = document.querySelector('#machine_types');
    
    var id_value = id_input.value.trim();
    var name_value = name_input.value.trim();
    var type_value = machine_type_dropdown.value.trim();
    var custom_value = custom_input.value.trim();
    var error = 0;

    //Machine ID Input 
    if(id_value == ''){
        id_input.style = "border: 2px solid red";
        console.log("ID is empty");
        error +=1;
    }
    else if(isNaN(id_value)){
        id_input.style = "border: 2px solid red";
        console.log("ID is not valid");
        error +=1;
    }
    else if(id_value.toString().length > 10){
        id_input.style = "border: 2px solid red";
        console.log("10 digits only");
        error +=1;
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
    //Custom Type Input
    if(machine_type_dropdown.value == 'others'){
        console.log('Others');
        if(custom_value == ''){
            custom_input.style = "border: 2px solid red";
            error +=1;
            console.log("Machine Type is empty");
        }
        else if(format.test(custom_value)){
            console.log("Machine Type has special char");
            error +=1;
        }
        else{
            custom_input.style = "border: none";
        }
    }
    else{
        custom_input.style = "border: none";
    }
    if(error == 0){
        var formData = {
            machine_id: id_value,
            machine_name: name_value,
            machine_type: type_value,
            custom_machine_type: custom_value
        };
        $.ajax({
          type: "POST",
          url: "includes/add-machine.php",
          data: formData,
          dataType: "json",
          encode: true,
        }).done(function (data) {
            console.log(data);
            console.log(data['success']);
        });
    }
})
