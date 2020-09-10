   $(window).on('load',function(){


      $(".nav-link.text-uppercase.font-weight-bold").click(function(){
          $('html,body').stop();
          var scrl = $(this).attr("href");
          $('html,body').animate({scrollTop: $(scrl).offset().top},1000);})
      

    })








    $(function () {
      $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
          } 
        else {
            $('.navbar').removeClass('active');
          }
      });
    });



    window.addEventListener("DOMContentLoaded", function() {

      // get the form elements defined in your form HTML above
      
      var formR = document.getElementById("my-formR");
      var buttonR = document.getElementById("my-form-buttonR");
      var statusR = document.getElementById("my-form-statusR");
      var closerR = document.getElementById("closeR");
      var htmlSR = "Mailiniz Başarı ile Gönderildi!<span id='close'>&times</span>";
      let htmlFR = '';





      // Success and Error functions for after the form is submitted
      
      function successR() {
        formR.reset();
        buttonR.style.display = "none";
        statusR.style.display = "block" ;
        statusR.innerHTML = htmlSR;
      }

      function errorR() {
        statusR.style.display = "block";
        statusR.innerHTML = htmlFR;
      }

      // handle the form submission event

      formR.addEventListener("submit", function(ev) {
        var isim = document.getElementById("fullname").value;
        var soyisim = document.getElementById("Soyisim").value;
        var kalkıs = document.getElementById("destination").value;
        var varıs = document.getElementById("destination1").value;
        var tarih = document.getElementById("date-start").value;
        var saat = document.getElementById("date-start1").value;


        ev.preventDefault();
        var data = new FormData(formR);
        ajax(formR.method, formR.action, data, successR, errorR);
      });

      statusR.addEventListener("click", function(ev) {
        ev.preventDefault();
        statusR.style.display = "";
      });



    });
    
    // helper function for sending an AJAX request

    function ajax(method, url, data, success, error) {
       /* var isimReg = /^[a-zA-Z ]{5,25}$/;
        var is = isimReg.test(isim);
        console.log(is);
        var sis = isimReg.test(soyisim);

        var tarihReg = /^(2020-09-([0-2][0-9]|3[0-1])|2020-1[0-2]-([0-2][0-9]|3[0-1]))$/;
        var tar = tarihReg.test(tarih);

        var saatReg = /^(0[0-9]|1[0-9]|2[0-4])([:])([0-5][0-9])$/;
        var saa = saatReg.test(saat);

        if (is == false){htmlFR +="İsminiz sadece harf içerebilir.(5-25 Karakter Arası)<br>"; }
        if (sis == false) {htmlFR +="Soyisminiz sadece harf içerebilir.(5-25 Karakter Arası)<br>";}
        if (kalkıs == '') {htmlFR +="Lütfen kalkış noktası seçiniz.<br>";}
        if (varıs == '') {htmlFR +="Lütfen varış noktası seçiniz.<br>";}
        if (tar == false) {htmlFR +="Lütfen geçerli bir tarih seçiniz.<br>";}
        if (saa == false) {htmlFR +="Lütfen geçerli bir saat seçiniz.<br>";}*/
      var xhr = new XMLHttpRequest();
      xhr.open(method, url);
      xhr.setRequestHeader("Accept", "application/json");
      xhr.onreadystatechange = function() {
        if (xhr.readyState !== XMLHttpRequest.DONE) return;
        if (xhr.status === 200) {
          success(xhr.response, xhr.responseType);
        } else {
          error(xhr.status, xhr.response, xhr.responseType);
        }
      };
      xhr.send(data);
    }  


    window.addEventListener("DOMContentLoaded", function() {

      // get the form elements defined in your form HTML above
      
      var form = document.getElementById("my-form");
      var button = document.getElementById("my-form-button");
      var status = document.getElementById("my-form-status");
      var closer = document.getElementById("close");
      var htmlS = "Mailiniz Başarı ile Gönderildi!<span id='close'>&times</span>";
      var htmlF = "Bir Hata Oluştu!<span id='close'>&times</span>";



      // Success and Error functions for after the form is submitted
      
      function success() {
        form.reset();
        button.style.display = "none";
        status.style.display = "block" ;
        status.innerHTML = htmlS;
      }

      function error() {
        status.style.display = "block";
        status.innerHTML = htmlF;
      }


      // handle the form submission event

      form.addEventListener("submit", function(ev) {
        ev.preventDefault();
        var data = new FormData(form);
        ajax(form.method, form.action, data, success, error);
      });

      status.addEventListener("click", function(ev) {
        ev.preventDefault();
        status.style.display = "";
      });



    });
    
    // helper function for sending an AJAX request

    function ajax(method, url, data, success, error) {
      var xhr = new XMLHttpRequest();
      xhr.open(method, url);
      xhr.setRequestHeader("Accept", "application/json");
      xhr.onreadystatechange = function() {
        if (xhr.readyState !== XMLHttpRequest.DONE) return;
        if (xhr.status === 200) {
          success(xhr.response, xhr.responseType);
        } else {
          error(xhr.status, xhr.response, xhr.responseType);
        }
      };
      xhr.send(data);
    }