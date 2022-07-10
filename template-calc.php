<?php
/**
 * Template Name: Template Calc (Calc)
 */
get_header(); ?>



<section class="calc">
		<div class="container-min">
			<h2 class="ta-left">Онлайн калькулятор растаможки авто в Украине</h2>
			<div class="row">
				<div class="col-md-4 eq-calc">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#avto-calc">авто</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#gruz-calc">грузовые</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#moto-calc">мото</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#electro-calc">электро</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane container active" id="avto-calc">
							<form class="count-form">
								<span>Тип двигателя:</span>

								<div class="avto-calc-flex-radio">
									<p><input type="radio" id="benz" class="gasoline" name="gasoline" value="benz" checked> <label
											for="benz">бензиновый</label></p>
									<p><input type="radio" id="diesel" class="gasoline" name="gasoline" value="diesel"> <label
											for="diesel">дизельный</label></p>
								</div>

								<div class="avto-calc-flex">
									<p><label for="ob-engine">Объем двигателя:</label> 
                                    <input type="text" id="ob-engine" name="ob-engine" placeholder="1598 куб.см." required> </p>
									<p><label for="year">Год пр-ва:</label>
										<select name="year" id="year">
                                        <option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option> 
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost" name="cost" placeholder="Стоимость авто (USD):" required>
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>

							</form>
                        </div>
                        

						<div class="tab-pane container fade" id="gruz-calc">
							<form class="gruz-form">
								<div class="avto-calc-flex">
									<p><label for="ob-engine">Объем двигателя:</label> 
                                    <input type="text" id="ob-engine-gruz" name="ob-engine" placeholder="1998 куб.см." required> </p>
									<p><label for="year">Год пр-ва:</label>
										<select name="year" id="year-gruz">
                                        <option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option> 
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost-gruz" name="cost" placeholder="Стоимость авто (USD):" required>
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>

							</form>
                        </div>
                        

						<div class="tab-pane container fade" id="moto-calc">
							<form class="calc-moto">
								<div class="avto-calc-flex">
									<p><label for="ob-engine">Объем двигателя:</label> <input type="text" id="ob-engine-moto"
											name="ob-engine" placeholder="500 куб.см."> </p>
									<p><label for="year">Год пр-ва:</label>
										<select value="" name="year" id="year-moto">
                                        <option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost-moto" name="cost" placeholder="Стоимость авто (USD):">
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>

							</form>
                        </div>
                        

						<div class="tab-pane container fade" id="electro-calc">
							<form class="count-form-electro">
								<div class="avto-calc-flex">
									<p><label for="ob-engine">Мощность:</label> <input type="text" id="ob-engine-electr"
											name="ob-engine" placeholder="150кВт"> </p>
									<p><label for="year">Год пр-ва:</label>
										<select name="year" id="year-electr">
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
										</select>
									</p>
								</div>
								<p class="cost">
									<label for="cost">Стоимость авто (USD):</label>
									<input type="text" id="cost-electr" name="cost" placeholder="Стоимость авто (USD):">
								</p>
								<div class="center-but"><button type="submit" class="want">РАСЧЕТ</button></div>
                                
							</form>
                            
						</div>
                        <p class="res-cost">Итого, на таможню нужно заплатить <span>0</span> $</p>
                        <span class="d-none" id="kurs">28.1</span>
					</div>
                   
				</div>
				<div class="col-md-8 eq-calc">
					<div class="flex-result-wrap">
						<div class="flex-result">
							<span>Ввозная пошлина $</span>
							<span id="poshlina">0</span>
						</div>
						<div class="flex-result">
							<span>НДС $</span>
							<span id="nds">0</span>
						</div>
						<div class="flex-result">
							<span>Акцизний збор $</span>
							<span id="akzc">0</span>
						</div>
						<div class="flex-result">
							<span>Итого таможенный платеж: ($)</span>
							<span id="tamoj">0</span>
						</div>
						<p>* Не забудьте о доп расходах обязательны для постановки на учет</p>
						<div class="flex-result-500">
							<span>Сертификация</span>
							<span>5000 грн </span>
						</div>
						<div class="flex-result-500">
							<span>Сбор в Пенсионный фонд</span>
							<span id="pens">50 грн </span>
						</div>
                        <p class="pensia-inform">3% от стоимости авто если сумма до 346 830 грн, 4% если стоимость не превышает  609 580 грн, 5% - при стоимости свыше 609 580 грн.</p>
						<div class="result-links">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/docs.svg" alt=""> Документы которые необходимы</a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/calc.svg" alt=""> Примеры просчетов, за что и как платить</a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/news.svg" alt=""> Новости</a>
						</div>
					</div>

				</div>
			</div>
		</div>
    </section>



    <div class="container usluga-block">
<?php
	/* Start the Loop */
    while ( have_posts() ) :  the_post(); ?>
     
<?php		
the_content();
	endwhile;
?>
</div>
    
    
<?php get_footer(); ?>