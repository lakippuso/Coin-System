
//const income = document.querySelector(".cards")


/*function createCard() {
    let code = '<div class="card-body"> <h4>Monthly Income</h4> <hr> <label for="">Today Income:</label> <br> <label for="">Yesterday Income:</label> </div>'

    income.innerHTML += code;
}*/

function getSelectedValue () {
    var selectValue = document.getElementById("income_list").value;
    if(selectValue == "weekly")
    {
        document.getElementById("income_type").innerHTML = "Weekly Income";
    }
    else if(selectValue == "monthly") {
        document.getElementById("income_type").innerHTML = "Monthly Income";
    }
    else{
        document.getElementById("income_type").innerHTML = "Annually Income";
    }
}

//createCard();