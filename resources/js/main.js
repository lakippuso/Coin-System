function logout(){
    var modalBtn = document.querySelector('#log-out');
    var modalBg = document.querySelector('.logout_bg');
    var modalCancel = document.querySelector('.lg_cancel');

    modalBtn.addEventListener('click', function () {
        modalBg.classList.add('lg-active');
    });

    modalCancel.addEventListener('click', function () {
        modalBg.classList.remove('lg-active');
    });
}
//Ajax for Machine Config
function configuration(id){
    var configBg = document.querySelector('.config_bg');
    var configCancel = document.querySelector('.config-cancel');

    configBg.classList.add('config-active');

    configCancel.addEventListener('click', function () {
        configBg.classList.remove('config-active');
    });

    $.ajax({
        type: "POST",
        url: "includes/machine-config-include.php",
        data: {machine_id: id},
        dataType: "json",
        encode: true,
      }).done(function (data) {
        $('#machine-config-id').val(data['id']);
        $('#machine-config-name').val(data['name']);
        $('#machine-config-type').val(data['type']);
        $('#overall-income').val("₱ "+data['total']);
        $('#detail-daily-income').val("₱ "+data['daily']);
        $('#detail-monthly-income').val("₱ "+data['monthly']);
      });
}
//Chart in Dashboard
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
                    if(values['sum'] == null){
                        values['sum'] = 0;
                    }
                    document.getElementById("income_data").innerHTML = "₱ "+values['sum'];
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
                    if(values['sum'] == null){
                        values['sum'] = 0;
                    }
                    document.getElementById("income_data").innerHTML = "₱ "+values['sum'];
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
                    if(values['sum'] == null){
                        values['sum'] = 0;
                    }
                    document.getElementById("income_data").innerHTML = "₱ "+values['sum'];
                }
            })
        }
}
function customInput(){
    var machine_type_dropdown = document.querySelector('#machine_types');
    var custom_input = document.querySelector('.machine_custom_input');
    var custom_label = document.querySelector('.machine_custom_label');
    if(machine_type_dropdown.value == "others"){
        custom_input.style = "display: block;";
        custom_label.style = "display: block;";
    }
    else{
        custom_input.style = "display: none;";
        custom_label.style = "display: none;";
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

    //Admin DASHBOARD
    
    $('#machine_id_search').keyup(function(){
        var id = $('#machine_id_search').val();
        $('#machine-tbody').text('');
        $('#machine-tbody').load('includes/admin-dashboard-include.php', {
            machine_id: id,
            machine_list: 1
        });
    });
    $('#client_id_search').keyup(function(){
        var id = $('#client_id_search').val();
        console.log(id);
        $('#client-tbody').text('');
        $('#client-tbody').load('includes/admin-dashboard-include.php', {
            username: id,
            client_list: 1
        });
    });
    //Report Page
    $('#search_report').click(function(){
        var id = $('#list').val();
        var start = $('#start').val();
        var end = $('#end').val();
        var year = $('#year_start').val();
        $('#report_table').text('');
        $('#report_table').load('includes/report-include.php', {
            search_id: id,
            filter: 1,
            start_date: start,
            end_date: end,
            year: year
        });
    });
    // $('#generate').click(function(){
    //     var id = $('#list').val();
    //     var start = $('#start').val();
    //     var end = $('#end').val();
    //     var year = $('#year_start').val();
    //     $('#report_table').load('includes/report-include.php', {
    //         search_id: id,
    //         generate: 1,
    //         start_date: start,
    //         end_date: end,
    //         year: year
    //     });
    // });
    //Delete machine [Machine Page]
    $(document).on('click', '#delete-machine', function(){
        var id = $('#machine-config-id').val();
        
        $.ajax({
            type: "POST",
            url: "includes/delete-machine-include.php",
            data: {machine_id: id},
          }).done(function () {
                location.reload();
          });
    });
    $(document).on('click', '#save-machine', function(){
        var id = $("#machine-config-id").val();
        var name = $("#machine-config-name").val();
        
        $.ajax({
            type: "POST",
            url: "includes/update-config-include.php",
            data: {machine_id: id,
                    machine_name: name},
          }).done(function () {
                // console.log("HELLO");
                location.reload();
          });
    });
    
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