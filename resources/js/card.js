
//const income = document.querySelector(".cards")


/*function createCard() {
    let code = '<div class="card-body"> <h4>Monthly Income</h4> <hr> <label for="">Today Income:</label> <br> <label for="">Yesterday Income:</label> </div>'

    income.innerHTML += code;
}*/

function getSelectedValue () {
    var selectValue = document.getElementById("income_list").value;
    if(selectValue == "daily")
    {
        document.getElementById("income_type").innerHTML = "Daily Income";
    }
    else if(selectValue == "monthly") {
        document.getElementById("income_type").innerHTML = "Monthly Income";
    }
    else if(selectValue == "biweekly") {
        document.getElementById("income_type").innerHTML = "Biweekly Income";
    }
    else{
        document.getElementById("income_type").innerHTML = "Annually Income";
    }
}

//createCard();