// var yearPicker = document.querySelector('#annually');
// var monthlyPicker = document.querySelector('#monthly_report');
// var weeklyPicker = document.querySelector('#weekly_report');
// var customPicker = document.querySelector('#custom');
// var dailyPicker = document.querySelector('#daily_report');


// yearPicker.addEventListener('click', function () {
//   document.querySelector('#year_start').css.display = "block";
//   document.querySelector('#start').css.display = "none";

// });

// dailyPicker.addEventListener('click', function () {
//   document.querySelector('#year_start').css.display = "none";
//   document.querySelector('#start').css.display = "block";
// });

// monthlyPicker.addEventListener('click', function () {
//   var year_css = document.querySelector('#year_start');
//   year_css.css.display = "none";
//   document.querySelector('#start').css.display = "block";
// });

// weeklyPicker.addEventListener('click', function () {
//   var year_css = document.querySelector('#year_start');
//   year_css.css.display = "none";
//   document.querySelector('#start').css.display = "block";
// });

// customPicker.addEventListener('click', function () {
//   var year_css = document.querySelector('#year_start');
//   year_css.css.display = "none";
//   document.querySelector('#start').css.display = "block";
// });

$(function() {
  $('#year_start').datepicker({
    changeYear: true,
    showButtonPanel: true,
    dateFormat: 'yy',
    onClose: function(dateText, inst) {
      var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).datepicker('setDate', new Date(year, 1));
    }
  });

  $("#year_start").focus(function() {
    $(".ui-datepicker-month").hide();
    $(".ui-datepicker-calendar").hide();
  });

});
function radioChange(){
    var radval = $('input[name="period"]:checked').val();
    if(radval == 'Daily'){
      $('#year_start').css("display","none");
      $('#year_start').val("");

      $('#start').css("display","block");
      document.getElementById('start').type = 'date';

      $('#end').css("display","none");
      $('#end').val("");
    }
    else if(radval == 'Weekly'){
      $('#year_start').css("display","none");
      $('#year_start').val("");
      
      $('#start').css("display","block");
      document.getElementById('start').type = 'week';

      $('#end').css("display","none");
      $('#end').val("");
    }
    else if(radval == 'Monthly'){
      $('#year_start').css("display","none");
      $('#year_start').val("");

      $('#start').css("display","block");
      document.getElementById('start').type = 'month';

      $('#end').css("display","none");
      $('#end').val("");
    }
    else if(radval == 'Annually'){
      $('#year_start').css("display","block");
      
      $('#start').css("display","none");
      $('#start').val("");

      $('#end').css("display","none");
      $('#end').val("");
    }
    else{
      $('#year_start').css("display","none");
      $('#start').css("display","block");
      document.getElementById('start').type = 'date';
      $('#end').css("display","block");
    }
}