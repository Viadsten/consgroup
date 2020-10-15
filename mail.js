$("#form").submit(function(){
  var name = $("#firstname").val();
  var phone = $("#phone") .val();
  $.ajax({
      type: "POST",
      url: '/mail.php',
      data: {
          name: name,
          tel: phone,
          info: 'contact',
      },
      success: function (data) {
          $('#form')[0].reset();
          $('.result-form').html("<p class='text-info'>Отлично, мы свяжемся с вами в ближайшее время</p>");
      },
      error: function (jqXHR, text, error) {
          $('.result-form').html("<p class='text-success'>Ошибка, попытайтесь снова</p>");
      }
  });
  return false;
});
$("#formOtyzyv").submit(function(){
  var name = $("#nameOt").val();
  var description = $("#description") .val();
  $.ajax({
      type: "POST",
      url: '/php/otzyv-sbm.php',
      data: {

          name: name,
          description: description,
      },
      success: function (data) {
          console.log(data);
          $('#formOtyzyv')[0].reset();
          $('.result-form2').html("<p class='text-info'>Отлично, вас отзыв отправлен на модерацию</p>");
      },
      error: function (jqXHR, text, error) {
          $('.result-form2').html("<p class='text-danger'>Ошибка, попытайтесь снова</p>");
      }
  });
  return false;
});
$(document).on("submit","#teleg-form",function() {
// $("").submit(function(){
  var tel = $("#telegram-num-join").val();
  $.ajax({
      type: "POST",
      url: 'mail.php',
      data: {
          tel: tel,
          info: 'telegram',
      },
      success: function (data) {
          $('#teleg-form')[0].reset();
          $('.result-form-telegram').html("<p class='text-info'>Спасибо, мы свяжемся с вами в ближайшее время</p>");
      },
      error: function (jqXHR, text, error) {
          $('.result-form-telegram').html("<p class='text-success'>Ошибка, попытайтесь снова</p>");
      }
  });
  return false;
});
$(document).on("submit","#call-back-form",function() {
// $("").submit(function(){
  var cb_name = $("#cb_name").val();
  var cb_tel = $("#cb_tel").val();
  $.ajax({
      type: "POST",
      url: 'mail.php',
      data: {
          name: cb_name,
          tel: cb_tel,
          info: 'callback',
      },
      success: function (data) {
          $('#call-back-form')[0].reset();
          $('.result-form').html("<p class='text-info'>Спасибо, мы свяжемся с вами в ближайшее время</p>");
      },
      error: function (jqXHR, text, error) {
          $('.result-form').html("<p class='text-success'>Ошибка, попытайтесь снова</p>");
      }
  });
  return false;
});
