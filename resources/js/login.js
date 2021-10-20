document.querySelector("#open_form").addEventListener("click", function(){
    document.querySelector(".login_form").classList.add("active");
});

document.querySelector(".login_form .close_btn").addEventListener("click", function(){
    document.querySelector(".login_form").classList.remove("active");
});