
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
// require('./#mapname/#file');
// require('#file');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$(document).ready(function() {
  // var foundclass = $('body').attr('class');
  

  

  $('#type').on('change', function(){
    var arr = [];

    $.each($('body').attr('class').split(' '), function (index, className) {
      arr.unshift(className);
    });

    var nr = $(this).val();
    
    $('body').addClass('thema-'+nr);

    $('body').removeClass(arr[0]);

    console.log(arr);
    arr = [];
  });

  var time = function(x) {
    return x * 1000;
  }
  
  var clock = function() {
    var d = new Date();
    var n = d.toLocaleTimeString();
    $('.clock').html(n);
    setTimeout(function() {
      clock();
    }, time(1));
  }
  clock();

  var countMessages = function(){
    $.get('/count').then(response => {
      if(response != 0){
        $('.postvak').html("<div class='count'>"+response+"</div>");
      }
    });
    setTimeout(function() {
      countMessages();
    }, time(600));
  }
  
  if($('.postvak').hasClass('postvak') == true){
    countMessages();
  }
  
  var openEmails = function() {
    var messageid = $(this).children('input.hidden').val();
    $.ajax('/mail/'+messageid).done(response => {
      $('.messages').html(response);
    });
  }

  $('li .openmessage').on('click', function() {
    var messageid = $(this).find('input.hidden').val();
    $.ajax('/mail/'+messageid).done(response => {
      $('.messages').html(response);
    });
  });
  $('.project').on('click',function() {
    $(this).children('.projectContent').toggle();
  });
});