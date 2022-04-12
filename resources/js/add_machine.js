var addBtn = document.querySelector('#open_add');
var addBg = document.querySelector('.machine_back');
var addClose = document.querySelector('.close_btn');
var add_machine_button = document.querySelector('#add_machine_button');

addBtn.addEventListener('click', function () {
    addBg.classList.add('back-active');
});

addClose.addEventListener('click', function () {
    addBg.classList.remove('back-active');
});

add_machine_button.addEventListener('click', function(){
    var format = /[ `!@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?~]/;
    var id_input = document.querySelector('#machine_id_input');
    var name_input = document.querySelector('#machine_name_input');
    var custom_input = document.querySelector('.machine_custom_input');
    var machine_type_dropdown = document.querySelector('#machine_types');
    
    var id_value = id_input.value.trim();
    var name_value = name_input.value.trim();
    var type_value = machine_type_dropdown.value.trim();
    var custom_value = custom_input.value.trim();
    var error = 0;

    //Machine ID Input 
    if(id_value == ''){
        id_input.style = "border: 1px solid red";
        $('.machine_id').text("ID is empty");
        $('.machine_id').css("display","block");
        error +=1;
    }
    else if(isNaN(id_value)){
        id_input.style = "border: 1px solid red";
        id_input.style = "display: block";
        $('.machine_id').text("ID is not valid");
        $('.machine_id').css("display","block");
        error +=1;
    }
    else if(id_value.toString().length > 10){
        id_input.style = "border: 1px solid red";
        id_input.style = "display: block";
        $('.machine_id').text("10 digits only");
        $('.machine_id').css("display","block");
        error +=1;
    }
    else{
        id_input.style = "border: none";
        $('.machine_id').css("display","none");
    }
    //Machine Name Input
    if(name_value == ''){
        name_input.style = "border: 1px solid red";
        error +=1;
        $('.machine_name').text("Name is empty");
        $('.machine_name').css("display","block");
    }
    else if(format.test(name_value)){
        $('.machine_name').text("Name has special char");
        $('.machine_name').css("display","block");
    }
    else{
        name_input.style = "border: none";
        $('.machine_name').css("display","none");
    }
    //Custom Type Input
    if(machine_type_dropdown.value == 'others'){
        console.log('Others');
        if(custom_value == ''){
            $(custom_input).css("border", "1px solid red");
            $('.custom_type').text("Machine Type is empty");
            $('.custom_type').css("display","block");
            error +=1;
        }
        else if(format.test(custom_value)){
            $(custom_input).css("border", "1px solid red");
            $('.custom_type').text("Machine Type has special char");
            $('.custom_type').css("display","block");
            error +=1;
        }
        else{
            $(custom_input).css("border", "none");
        }
    }
    else{
        $(custom_input).css("border", "none");
        $('.custom_type').css("display","none");
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
            if(!data['success']){
                console.log('Error in server');
                $('.machine_id').text(data['messages'].machine);
                $('#machine_id_input').css("border", "1px solid red");
                $('.machine_id').css('display','block');
            }
            else{
                location.reload();
            }
        });
    }
})


function dialog() {
    var reset_bg = document.querySelector('.dialog_bg');
    var reset_close = document.querySelector('.cancel');

    reset_bg.classList.add('db-active');

    reset_close.addEventListener('click', function () {
        reset_bg.classList.remove('db-active');
    });
    var arr = [];
    $.each($('input[name="machine_select"]:checked'), function(){
        arr.push($(this).val());
    });
    var checkedValue = arr.join(", ");

    $(".continue").click(function(){
        $.ajax({
            url: "includes/reset-machine.php",
            method: "GET",
            data: {"machine_id": checkedValue},
            success: function(response){
                console.log(response);
                reset_bg.classList.remove('db-active');
                window.location.reload();
            }
        });
    });
}