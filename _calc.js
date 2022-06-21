jQuery(function($){

  function MyRound100(val) {
    return Math.ceil(val / 100) * 100;
  }

  $(document).ready(function() {

    $('body').on('change', '.calc input[type=number], .calc input[type=radio]', function(e) {
        var id = $(this).parents('.calc').attr('id');
        calc(id);
    });

    $('body').on('keyup', '.calc input[type=number]', function(e) {
        var id = $(this).parents('.calc').attr('id');
        calc(id);
    });

    $('body').on('click', '.js-calc-send-kp', function(e) {
        var id = $(this).parents('.calc').attr('id');
        $('#'+id+' .calc__item').removeClass('error');
        var phone = $('#'+id).find('[name=phone]').val();
        var email = $('#'+id).find('[name=email]').val();
        var msg = $('#'+id).find('[name=msg]').val();
        var text = $('#'+id).find('.calc__result').text();
        if(phone === "" && email === "") {
          $('#'+id+' .calc__item--phone').addClass('error');
          $('#'+id+' .calc__item--email').addClass('error');
        } else {
          var post_data = new FormData();
          post_data.append("nonce", myajax.nonce);
          post_data.append("action", 'request_kp');
          post_data.append("phone", phone);
          post_data.append("email", email);
          post_data.append("msg", msg);
          post_data.append("text", text);

          $.ajax({
            url: myajax.url,
            dataType: 'json',
            type: 'POST',
            contentType: false,
            processData: false,
            data: post_data,
            success: function(response) {
              if(response.type == 'error') {
                var output = '<div class="alert alert-danger">'+response.text+'</div>';
              }else{
                var output = '<div class="alert alert-success">'+response.text+'</div>';
                $('#'+id+' form').trigger('reset');
              }
              $('#' + id + ' .calc__success').hide().html(output).slideDown();
            },
            error: function (error) {
                console.log(eval(error));
            }
          });
        }
    });

    function calc(id) {
      $('#'+id+' .calc__item').removeClass('error');
      $('#'+id+' .calc__result').html('');
      var cols = rows = power = price = pixelX = pixelY = 0;
      var type = $('#'+id+' [name=type]:checked').val();
      var step = $('#'+id+' [name=step]:checked').val();
      var height = $('#'+id+' [name=height]').val();
      var width = $('#'+id+' [name=width]').val();
      var hasMoldule = false;
      var hasError = false;
      if (width < 1) {
        $('#'+id+' .calc__item--width').addClass('error');
        hasError = true;
      }
      if (height < 1) {
        $('#'+id+' .calc__item--height').addClass('error');
        hasError = true;
      }
      if (hasError) return;
      $.each(calcArr,function(index,value){
        if ( value[0] == step && value[1] == type ) {
          cols = (parseInt(width) / value[2]).toFixed();
          rows = (parseInt(height) /value[3]).toFixed();
          curWidth = cols * value[2];
          curHeight = rows * value[3];
          square = curWidth * curHeight / 1000000; // получаем квадратный метр
          price = MyRound100(square * value[7]).toLocaleString("ru"); // получаем цену
          pixelX = cols * value[4];
          pixelY = rows * value[5];
          power = cols * rows * value[6] / (0.85 * 1000);
          hasMoldule = true;
        }
      });
      if (!hasMoldule) {
        $('#'+id+' .calc__result').html('<span style="color:red;">Нет подходящего модуля. Поменяйте тип экрана или шаг.</span>');
        return;
      }
      $('#'+id+' .calc__result').html(
        '<span class="calc__cost">' +
          '<span class="calc__costicon"></span><span class="calc__price">'+ price +'</span> ₽' +
        '</span>' +
        '<span class="calc__descr">' +
          '—  площадь: '+parseFloat(square).toFixed(1)+' м2, размер: '+curWidth+'x'+curHeight+'мм, разрешение: '+pixelX+'x'+pixelY+', мощность: '+parseFloat(power).toFixed(1)+' кВт' +
        '</span>'
      );
    }

  });
});
