//Forgot password form
var format = /[ `!@#$%^&*()+\-=\[\]{};':"\\|,_.<>\/?~]/;
var alpha_numeric = /[^a-zA-Z0-9]/;
var error = 0;

$(document).ready(function(){
    $("#forgot-pass-form").submit(function(e){
        console.clear();
        var error = 0;
        var new_pass = $("#new").val();
        var retype_pass = $("#retype").val();
        if(new_pass.toString().length < 8){
            // $("#new").css("border", "1px solid red");
            $(".length").css("display", "block");
            $(".length").css("color", "rgb(255, 128, 149)");
            error += 1;
        }
        if(!format.test(new_pass)){
            // $("#new").css("border", "1px solid red");
            $(".special").css("display", "block");
            $(".special").css("color", "rgb(255, 128, 149)");
            error += 1;
        }
        if(new_pass == new_pass.toLowerCase()){
            // $("#new").css("border", "1px solid red");
            $(".upper").css("display", "block");
            $(".upper").css("color", "rgb(255, 128, 149)");
            error += 1;
        }
        if(new_pass != retype_pass){
            $(".match").css("display", "block");
            $(".match").css("color", "rgb(255, 128, 149)");
            error += 1;
        }
        console.log(error);
        if(error != 0){
            e.preventDefault();
        }
    });
});