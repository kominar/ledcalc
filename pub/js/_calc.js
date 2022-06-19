jQuery(function($){
  $(document).ready(function() {

    $('body').on('change', '.calc input[type=number], .calc input[type=radio]', function(e) {
        calc();
    });

    function calc() {
      $('.calc .calc__item').removeClass('error');
      $('.calc .calc__result').html('');
      var cols = rows = power = price = pixelX = pixelY = 0;
      var type = $('.calc [name=type]:checked').val();
      var step = $('.calc [name=step]:checked').val();
      var height = $('.calc [name=height]').val();
      var width = $('.calc [name=width]').val();
      var hasMoldule = false;
      var hasError = false;
      if (width < 1) {
        $('.calc .calc__item--width').addClass('error');
        hasError = true;
      }
      if (height < 1) {
        $('.calc .calc__item--height').addClass('error');
        hasError = true;
      }
      if (hasError) return;
      $.each(calcArr,function(index,value){
        if ( value[0] == step && value[1] == type ) {
          cols = Math.ceil( parseInt(width) / value[2])
          rows = Math.ceil( parseInt(height) /value[3])
          square = cols * value[2] * rows * value[3] / 1000000; // получаем квадратный метр
          price = parseInt(square * value[7]).toLocaleString("ru"); // получаем цену
          pixelX = cols * value[4];
          pixelY = rows * value[5];
          power = cols * rows * value[6] / (0.85 * 1000);
          console.log('price', price);
          // console.log('height', height);
          hasMoldule = true;
        }
      });
      if (!hasMoldule) {
        $('.calc .calc__result').html('<span style="color:red;">Нет подходящего модуля. Поменяйте тип экрана или шаг.</span>');
        return;
      }
      $('.calc .calc__result').html(
        '<span class="calc__cost">' +
          '<span class="calc__costicon"></span><span class="calc__price">'+ price +'</span> ₽' +
        '</span>' +
        '<span class="calc__descr">' +
          '—  '+parseFloat(square).toFixed(2)+' м2, '+pixelX+'x'+pixelY+', потребляемость: '+parseFloat(power).toFixed(2)+' кВт' +
        '</span>'
      );
    }

  });
});
