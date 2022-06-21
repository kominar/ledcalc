<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://del2.aw-test.ru/wp-content/themes/alfa_led/style.css' type='text/css' media='all' />
  <script src="jquery.js"></script>
  <title></title>
</head>

<body id="body">
<link rel="stylesheet" href="_calc.css"/>
<section class="section-2">
    <div class="container">

			<div class="calc">
				<div class="calc__body">
					<h2 class="calc__title">Рассчитайте стоимость ремонта</h2>
					<div class="calc__subtitle">Заполните желаемые параметры и получите рассчет — коммерческое предложение пришлем на почту.</div>
					<div class="calc__row">

						<div class="calc__item calc__item--type">
							<div class="calc__label">Выберите тип экрана</div>
							<div class="calc__radios">
								<input id="calc-type-01" type="radio" name="type" value="out" checked>
								<label for="calc-type-01">Для улицы</label>
								<input id="calc-type-02" type="radio" name="type" value="in">
								<label for="calc-type-02">Для помещения</label>
							</div>
						</div>

						<div class="calc__item calc__item--step">
							<div class="calc__label">Шаг, мм</div>
							<div class="calc__radios calc__radios--small">
								<input id="calc-step-2" type="radio" name="step" value="2">
								<label for="calc-step-2">2</label>
								<input id="calc-step-25" type="radio" name="step" value="2.5" checked>
								<label for="calc-step-25">2.5</label>
								<input id="calc-step-3" type="radio" name="step" value="3">
								<label for="calc-step-3">3</label>
								<input id="calc-step-03" type="radio" name="step" value="3.07">
								<label for="calc-step-03">3.07</label>
								<input id="calc-step-4" type="radio" name="step" value="4">
								<label for="calc-step-4">4</label>
								<input id="calc-step-5" type="radio" name="step" value="5">
								<label for="calc-step-5">5</label>
								<input id="calc-step-6" type="radio" name="step" value="6">
								<label for="calc-step-6">6</label>
								<input id="calc-step-8" type="radio" name="step" value="8">
								<label for="calc-step-8">8</label>
							</div>
						</div>

						<div class="calc__item calc__item--width">
							<div class="calc__label">Ширина, мм</div>
							<input type="number" name="width" min="0" placeholder="Не указано">
						</div>
						<div class="calc__item calc__item--height">
							<div class="calc__label">Высота, мм</div>
							<input type="number" name="height" min="0" placeholder="Не указано">
						</div>
						<div class="calc__item calc__item--phone">
							<div class="calc__label">Телефон*</div>
							<input type="text" name="phone" placeholder="+7 (">
						</div>
						<div class="calc__item calc__item--email">
							<div class="calc__label">Эл. почта*</div>
							<input type="text" name="email" placeholder="user@mail.ru">
						</div>
						<div class="calc__item calc__item--msg">
							<div class="calc__label">Комментарий</div>
							<input type="text" name="msg" placeholder="Не обязательно">
						</div>
					</div>

					<div class="calc__actions">
						<div class="calc__bttn calc__bttn--cta">
							<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 22H18.5C19.0304 22 19.5391 21.7893 19.9142 21.4142C20.2893 21.0391 20.5 20.5304 20.5 20V7.5L15 2H6.5C5.96957 2 5.46086 2.21071 5.08579 2.58579C4.71071 2.96086 4.5 3.46957 4.5 4V8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.5 2V8H20.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.5 15L5.5 17L9.5 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<span>Получить КП</span>
						</div>

						<div class="calc__result">
							<? /*
							<span class="calc__cost">
								<span class="calc__costicon"></span>
								<span class="calc__price">24 000</span> ₽
							</span>
							<span class="calc__descr">
								—  12 м2, 4 на 3 м, потребляемость: 150 кВт
							</span>
							*/ ?>
						</div>
					</div>

					<div class="calc__notion">
						*стоимость рассчета приблизительная. Для уточнения деталей мы скоро с вами свяжемся
					</div>

					<hr>

					<div class="calc__foot">

						<div class="calc__bttn">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.09009 9.00008C9.32519 8.33175 9.78924 7.76819 10.4 7.40921C11.0108 7.05024 11.729 6.91902 12.4273 7.03879C13.1255 7.15857 13.7589 7.52161 14.2152 8.06361C14.6714 8.60561 14.9211 9.2916 14.9201 10.0001C14.9201 12.0001 11.9201 13.0001 11.9201 13.0001" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 17H12.01" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<span>Задать вопрос</span>
						</div>

						<div class="calc__call">
							<div class="calc__foottext">
								Если у вас остались вопросы, задайте их на сайте или по телефону
							</div>
							<a href="tel:+78003336968" class="calc__phone">+7 800 333-69-68</a>
						</div>

					</div>
				</div>
			</div>
	</div>
</section>
<script type="text/javascript">
	<? $calcArr = [
		[2,'in',320,160,160,80,24,100],
		[2.5,'in',320,160,128,64,23,200],
		[2.5,'out',320,160,128,64,33,300],
		[3,'in',192,192,64,64,20,400],
		[3.07,'out',320,160,104,52,40,500],
		[3.07,'in',320,160,104,52,22,600],
		[4,'out',320,160,80,40,47,700],
		[4,'in',320,160,80,40,24,800],
		[5,'out',320,160,64,32,25,900],
		[5,'in',320,160,64,32,43,1000],
		[6,'out',192,192,32,32,35,1100],
		[8,'out',320,160,40,20,44,1200],
	]; ?>

	var calcArr = [
			[2,'in',320,160,160,80,24,100],
			[2.5,'in',320,160,128,64,23,200],
			[2.5,'out',320,160,128,64,33,300],
			[3,'in',192,192,64,64,20,400],
			[3.07,'out',320,160,104,52,40,500],
			[3.07,'in',320,160,104,52,22,600],
			[4,'out',320,160,80,40,47,700],
			[4,'in',320,160,80,40,24,800],
			[5,'out',320,160,64,32,25,900],
			[5,'in',320,160,64,32,43,1000],
			[6,'out',192,192,32,32,35,1100],
			[8,'out',320,160,40,20,44,1200],
		];
</script>

<script src="_calc.js"></script>
</body>
</html>
