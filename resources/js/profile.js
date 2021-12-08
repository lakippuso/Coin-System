$(document).ready(function() {
    // var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    // var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    //     return new bootstrap.Popover(popoverTriggerEl)
    // })
    $('.my-profile').submit(function(e){
        var error = 0;
        if($('#first').val() == '' || $('#last').val() == ''){
            if($('#first').val() == ''){
                $('#first').css("border","2px solid red");
            }
            if($('#last').val() == ''){
                $('#last').css("border","2px solid red");
            }
            $('#first').siblings('.profile-error').css("display","inline");
            $('#first').siblings('.profile-error').text("   Please enter your first and lastname");
            error +=1;
        }
        if($('#email').val() == ''){
            $('#email').siblings('.profile-error').css("display","inline");
            $('#email').siblings('.profile-error').text("   Please enter your email!");
            error +=1;
        }
        else if(!validateEmail($('#email').val())){
            $('#email').siblings('.profile-error').css("display","inline");
            $('#email').siblings('.profile-error').text("Invalid email!");
            error +=1;
        }
        if(error != 0){
            e.preventDefault();
        }
    });
});

const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };