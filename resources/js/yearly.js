
var yearPicker = document.querySelector('#annually');
var monthlyPicker = document.querySelector('#monthly_report');
var weeklyPicker = document.querySelector('#weekly_report');
var customPicker = document.querySelector('#custom');
var dailyPicker = document.querySelector('#daily_report');


yearPicker.addEventListener('click', function () {
  document.querySelector('#year_start').style.display = "block";
  document.querySelector('#start').style.display = "none";

});

dailyPicker.addEventListener('click', function () {
  document.querySelector('#year_start').style.display = "none";
  document.querySelector('#start').style.display = "block";
});

monthlyPicker.addEventListener('click', function () {
  var year_style = document.querySelector('#year_start');
  year_style.style.display = "none";
  document.querySelector('#start').style.display = "block";
});

weeklyPicker.addEventListener('click', function () {
  var year_style = document.querySelector('#year_start');
  year_style.style.display = "none";
  document.querySelector('#start').style.display = "block";
});

customPicker.addEventListener('click', function () {
  var year_style = document.querySelector('#year_start');
  year_style.style.display = "none";
  document.querySelector('#start').style.display = "block";
});

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