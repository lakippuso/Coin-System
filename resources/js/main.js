function logout(){
    var modalBtn = document.querySelector('#log-out');
    var modalBg = document.querySelector('.logout_bg');
    var modalCancel = document.querySelector('.lg_cancel');;

    modalBtn.addEventListener('click', function () {
        modalBg.classList.add('lg-active');
    });

    modalCancel.addEventListener('click', function () {
        modalBg.classList.remove('lg-active');
    });
}
function getSelectedValue () {
        var selectValue = document.getElementById("income_list").value;
        if(selectValue == "weekly")
        {
            document.getElementById("income_type").innerHTML = "Weekly Income";
            document.getElementById("income_this").innerHTML = "This Week's Income:";
            $.ajax({
                url: "includes/load-weekly.php",
                method: "POST",
                data:{action:"fetch"},
                success: function(data){
                    console.log(data);
                    var values = JSON.parse(data);
                    console.log(values['sum']);
                    document.getElementById("income_data").innerHTML = values['sum'];
                }
            })
        }
        else if(selectValue == "monthly") {
            document.getElementById("income_type").innerHTML = "Monthly Income";
            document.getElementById("income_this").innerHTML = "This Month's Income:";
            $.ajax({
                url: "includes/load-monthly.php",
                method: "POST",
                data:{action:"fetch"},
                success: function(data){
                    console.log(data);
                    var values = JSON.parse(data);
                    console.log(values['sum']);
                    document.getElementById("income_data").innerHTML = values['sum'];
                }
            })
        }
        else{
            document.getElementById("income_type").innerHTML = "Annually Income";
            document.getElementById("income_this").innerHTML = "This Year's Income:";
            $.ajax({
                url: "includes/load-yearly.php",
                method: "POST",
                data:{action:"fetch"},
                success: function(data){
                    console.log(data);
                    var values = JSON.parse(data);
                    console.log(values['sum']);
                    document.getElementById("income_data").innerHTML = values['sum'];
                }
            })
        }
}
$(document).ready(function() {
    //Dashboard Page
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".graph").not("." + optionValue).hide();
                $("." + optionValue).show();
            }
            else {
                $(".graph").hide();
            }
        });
    }).change();
    //HISTORY Page
    //Select all values
    function select_unselect_checkbox (this_el, select_el) 
    {
        if(this_el.prop("checked"))
        {
            select_el.prop('checked', true);
        }
        else
        { 
            select_el.prop('checked', false);				 
        }
    };
    $(document).on('change', '.select_all_items', function(event) 
    {
        event.preventDefault();

        var ele = $(document).find('.cb_item'); 

        select_unselect_checkbox($(this), ele); 
    });
    var radioValue = $("input[name='period']:checked").val();
    if(radioValue == "Daily") {
        document.getElementById('end').style.display="none";
    }
});
//Multiple Select in Daily Report
$(function () {
    $('select[multiple].active.machine').multiselect({
        placeholder: 'Select Machine',
        search: true,
        maxPlaceholderOpts: 3,
        searchOptions: {
            'default': 'Search Machine'
        },
        selectAll: true
    });
});