$(document).ready(function() {
    // var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    // var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    //     return new bootstrap.Popover(popoverTriggerEl)
    // })
    //Profile
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
        else{
            $('#first').css("border","1px solid black");
            $('#first').siblings('.profile-error').css("display","none");
        }
        if($('#email').val() == ''){
            $('#email').css("border","2px solid red");
            $('#email').siblings('.profile-error').css("display","inline");
            $('#email').siblings('.profile-error').text("   Please enter your email!");
            error +=1;
        }
        else if(!validateEmail($('#email').val())){
            $('#email').css("border","2px solid red");
            $('#email').siblings('.profile-error').css("display","inline");
            $('#email').siblings('.profile-error').text("Invalid email!");
            error +=1;
        }
        else{
            $('#email').css("border","1px solid black");
            $('#email').siblings('.profile-error').css("display","none");
        }
        var formData = new FormData();
        var file = document.getElementById("profile_upload").files[0];
        formData.append("Filedata", file);

        var t = file.type.split('/').pop().toLowerCase();
        var img_size = file.size;
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            $('#profile_upload').css("border","2px solid red");
            $('#profile_upload').siblings('span').css("display","inline");
            $('#profile_upload').siblings('span').text("Please select a valid image file!");
            error+=1;
        }
        else if(img_size > 7340032){
            $('#profile_upload').css("border","2px solid red");
            $('#profile_upload').siblings('span').css("display","inline");
            $('#profile_upload').siblings('span').text("Please select image file less than 7mb!");
            error+=1;
        }
        else{
            $('#profile_upload').css("border","1px solid black");
            $('#profile_upload').siblings('span').css("display","none");
        }
        if(error != 0){
            e.preventDefault();
        }
    });
    //Change password
    $('#change_pass').click(function() {
        var error = 0;
        if($('#current_pass').val() == ""){
            $('#current_pass').css("border","2px solid red");
            $('#current_pass').siblings('span').css("display","inline");
            $('#current_pass').siblings('span').text('Enter current password!');
            error+=1;
        }
        else{
            $('#current_pass').css("border","1px solid black");
            $('#current_pass').siblings('span').css("display","none");
        }
        if($('#new_pass').val() == ""){
            $('#new_pass').css("border","2px solid red");
            $('#new_pass').siblings('span').css("display","inline");
            $('#new_pass').siblings('span').text('Enter new password!');
            error+=1;
        }
        else if($('#new_pass').val().length < 8){
            $('#new_pass').css("border","2px solid red");
            $('#new_pass').siblings('span').css("display","inline");
            $('#new_pass').siblings('span').text('Password must be 8 characters or more!');
            error+=1;
        }
        else{
            $('#new_pass').css("border","1px solid black");
            $('#new_pass').siblings('span').css("display","none");
        }
        if($('#retype_pass').val() == ""){
            $('#retype_pass').css("border","2px solid red");
            $('#retype_pass').siblings('span').css("display","inline");
            $('#retype_pass').siblings('span').text('Enter retype new password!');
            error+=1;
        }
        else if($('#new_pass').val() != $('#retype_pass').val()){
            $('#retype_pass').css("border","2px solid red");
            $('#retype_pass').siblings('span').css("display","inline");
            $('#retype_pass').siblings('span').text("Password doesn't match!");
            error+=1;
        }
        else{
            $('#retype_pass').css("border","1px solid black");
            $('#retype_pass').siblings('span').css("display","none");
        }
        
        if(error == 0){
            var formData = {
                old_pass: $('#current_pass').val(),
                new_pass: $('#new_pass').val()
            };
            console.log('No error');
            $.ajax({
                type: "POST",
                url: "includes/changepass-include.php",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function (data) {
                if(!data['success']){
                    $('#current_pass').css("border","2px solid red");
                    $('#current_pass').siblings('span').css("display","inline");
                    $('#current_pass').siblings('span').text(data['messages'].result);
                }
                else{
                    location.reload();
                }
            });
        }
    });
    $('#profile_upload').change(function(event){
        var img = document.getElementById('avatar');
        img.src = URL.createObjectURL(event.target.files[0]);
        img.onload = function() {
            URL.revokeObjectURL(img.src) // free memory
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