<div id="popup-call" class="white-popup mfp-hide">
    <h2>Заказать звонок</h2>
    <form action="" class="popup-form-ajax">
        <div class="row align-items-end no-p" >
            <div class="col-md-4 no-p">
                <p class="input-p">
                    <label for="popup1">Ваше имя</label>
                    <input type="text" id="popup1" name="name" placeholder="" required>
                </p>
            </div>
            <div class="col-md-4 no-p">
                <p class="input-p">
                    <label for="tel-1">Телефон</label>
                    <input type="tel" id="tel-1" name="tel" placeholder="" required>
                </p>
            </div>
            
            <div class="col-md-4 no-p center">
                <button type="submit" class="accent-but">Отправить</button>
            </div>
        </div>
    </form>
</div>

<div id="popup-product" class="white-popup mfp-hide">
    <h2>Оставить заявку</h2>
    <form action="" class="popup-form-product">
    <input type="hidden" name="car" value="<?php the_title();?>">
        <div class="row align-items-end no-p">
            <div class="col-md-4 no-p">
                <p class="input-p">
                    <label for="popup1">Ваше имя</label>
                    <input type="text" id="popup1" name="name" placeholder="" required>
                </p>
            </div>
            <div class="col-md-4 no-p">
                <p class="input-p">
                    <label for="tel-1">Телефон</label>
                    <input type="tel" id="tel-1" name="tel" placeholder="" required>
                </p>
            </div>
            
            <div class="col-md-4 no-p center">
                <button type="submit" class="accent-but">Отправить</button>
            </div>
        </div>
    </form>
</div>
    
    <footer>
		<div class="container-max">
			<div class="row ">
				
				<div class="col-md-10 col-sm-8 col-6">
					<div class="columns">
                    <?php
                    
                    $categories = get_terms('category', 'orderby=name&hide_empty=0&parent=0&exclude=1&hierarchical=0');

                    if($categories){
                        foreach ($categories as $cat){
                            echo '<div class="col-md-3 col-6 col-sm-4 col-lg-2">'; ?>
                            <a href="<?php echo get_term_link($cat->slug, $cat->taxonomy); ?>"><?php echo $cat->name; ?></a>
                            <?php
                            echo '</div>';
                        }
                    }

                    // echo '<pre>';
                    // print_r($categories);
                    // echo '</pre>';
                     ?>
                    </div>
                </div>
                
				<div class="col-md-2 col-sm-4 col-6">
					<p>Контакты: </p>
					<a href="#" class="adress">Киев, ул. Нижний вал 19/21</a>
					<a href="tel:+380501974899" class="footer-tel">+38 (050) 197 48 99</a>
					<a href="tel:+380685414814" class="footer-tel">+38 (068) 541 48 14</a>
					<div class="soc">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-footer.svg" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tw-footer.svg" alt=""></a>
					</div>
				</div>
			</div>
		</div>

		<div class="copy">© Copyright 2019-2021</div>
    </footer>
    


    <div id="thanck" class="white-popup mfp-hide">
				<h2>Спасибо за Вашу заявку!</h2>
				<h3>Мы свяжемся с Вами в ближайшее время</h3>
    </div>
<div id="euro"><?php $options = get_option('sample_theme_options');
								echo $options['dollar'] ;?></div>

    <?php wp_footer(); ?>
	<script>


$("#mob-list").on('click', function(){
    $("#mob-list").removeClass('active-mnu');
    $('body').css('overflow-y', 'auto');
});
	
	$('.mob-list-box').click(function(e){
    e.stopPropagation();
});

var euro = $('#euro').text();
var poshlina = ''; //Пошлина 10% от  суммы что человек вводит сам

var nds = '';  //НДС это 20% от (Стоимости Авто+Акциз+Пошлина)
var akciz = ''; // обЪем * кол-во лет * тариф
var pensia = ''; //Пенсионный рассчитывается От стоимости которую вводит пользователь
var result = ''; // акциз+пошлина+ндс


function getPoshlina(a){
    return a * 0.1;  
}
function getAkz(ob, years, engType){
    obVar = ob.replace(/,/, '.');
    obForCalc = ob / 1000;
    var param = '';
    if (engType == 'benz'){
        if(obForCalc < 3){
            param = 50*euro;
        }else{
            param = 100*euro;
        }
    }
    if (engType == 'diesel'){
        if(obForCalc < 3.5){
            param = 75*euro;
        }else{
            param = 150*euro;
        }
    }
   return Math.round(obForCalc * years * param);
}

function getAkzGruz(ob, years){
    obVar = ob.replace(/,/, '.');
    obForCalc = ob / 1000;

    var param = '';

    if (years > 8){
       param = 1 * euro;
    }else if (years < 5){
       param = 0.02 * euro;
    }
    else{
       param = 0.8 * euro;
    }
    
   return Math.round(obVar * param);
}

function getAkzMoto(ob){
    obVar = ob.replace(/,/, '.');

    var param = '';

    if (ob > 800){
       param = 0.447 * euro;
    }else if (ob < 500){
       param = 0.062 * euro;
    }
    else{
       param = 0.443 * euro;
    }
    
   return Math.round(obVar * param);
}

function getAkzElectro(ob){
    obVar = ob.replace(/,/, '.');

    var param = 1 * euro;
    
   return Math.round(obVar * param);
}

function getNds(cost, akzc, posh){
    return Math.round( (parseInt(cost) + parseInt(akzc) + parseInt(posh)) * 0.2 );
}

function getPensia(a, b){
    var res = a*b;
    if( res > 609580 ){
        return Math.round(res*0.05);
    }else if(res < 346830){
        return Math.round(res*0.03);
    }else{
        return Math.round(res*0.04);
    }
}


$('.count-form-electro').on('submit', function(e) {
    e.preventDefault();

var obEngineEl = $("#ob-engine-electr").val();

var costEl = $("#cost-electr").val();

    var posh = 0;
    var akzc = getAkzElectro(obEngineEl);

    $("#poshlina").text( posh );
    $("#akzc").text( akzc );
    var kurs = $('#kurs').text();
    $('#pens').text( getPensia(costEl, kurs) + ' грн') ;

    var nds = 0;
    $("#nds").text(nds);
    var rastamoj = akzc + posh + nds;
    rastamoj = Math.round(rastamoj);
    $('.res-cost').css('display', 'block');
    $('.res-cost span').text(rastamoj);
    $('#tamoj').text(rastamoj);
});





$('.calc-moto').on('submit', function(e) {
    e.preventDefault();

var obEngineMoto = $("#ob-engine-moto").val();

var costMoto = $("#cost-moto").val();


    var posh = getPoshlina(costMoto);
    var akzc = getAkzMoto(obEngineMoto);

    $("#poshlina").text( posh );
    $("#akzc").text( akzc );
    var kurs = $('#kurs').text();
    $('#pens').text( getPensia(costMoto, kurs) + ' грн') ;

    var nds = getNds(costMoto, akzc, posh);
    $("#nds").text(nds);
    var rastamoj = akzc + posh + getNds(costMoto, akzc, posh );
    rastamoj = Math.round(rastamoj);
    $('.res-cost').css('display', 'block');
    $('.res-cost span').text(rastamoj);
    $('#tamoj').text(rastamoj);
});


$('.gruz-form').on('submit', function(e) {
    e.preventDefault();

var obEngineGruz = $("#ob-engine-gruz").val();

var costGruz = $("#cost-gruz").val();

var yearGruz = $("#year-gruz").val();

    var yearCalc = 2021 - yearGruz;

    var posh = getPoshlina(costGruz);
    var akzc = getAkzGruz(obEngineGruz, yearCalc);

    $("#poshlina").text( posh );
    $("#akzc").text( akzc );
    var kurs = $('#kurs').text();
    $('#pens').text( getPensia(costGruz, kurs) + ' грн') ;

    var nds = getNds(costGruz, akzc, posh);
    $("#nds").text(nds);
    var rastamoj = akzc + posh + getNds(costGruz, akzc, posh );
    rastamoj = Math.round(rastamoj);
    $('.res-cost').css('display', 'block');
    $('.res-cost span').text(rastamoj);
    $('#tamoj').text(rastamoj);
});





$('.count-form').on('submit', function(e) {
    e.preventDefault();

    var obEnj = $("#ob-engine").val();

    var year = $('#year').val();
    var yearCalc = '';
    if(year == '2021' || year == '2020'){
        yearCalc = 1;
        console.log( '1 yaer');
    }else{
        yearCalc = 2021 - year -1;
    }

    var cost = $("#cost").val();

    var gas = $('input[name=gasoline]:checked', '.count-form').val();
    


    $("#poshlina").text( getPoshlina(cost) );
    $("#akzc").text( getAkz(obEnj, yearCalc, gas) );
    var akzc = getAkz(obEnj, yearCalc, gas);

    var avtoNds = getNds(cost, akzc, getPoshlina(cost));
    $("#nds").text(avtoNds);
    
    var rastamoj = akzc + getPoshlina(cost) + avtoNds ;
    rastamoj = Math.round(rastamoj);
    $('#tamoj').text(rastamoj);
    $('.res-cost').css('display', 'block');
    $('.res-cost span').text(rastamoj);

    var kurs = $('#kurs').text();

    $('#pens').text( getPensia(cost, kurs) + ' грн') ;
   
    console.log(rastamoj);

});
//     var nameTovar = '';
// 	$('.pz-cart-dinam').on('click', function(){
//         nameTovar = $(this).parents('.product-item').find('.name>a').text();
//         console.log(nameTovar);
// 	});
	
// 	$('.pz-cart-dinam').magnificPopup({
//           items: {
//           src: '#fast-order'
//            },
//         type: 'inline',
//         callbacks: {
//         beforeOpen: function() {
//             //$("body").css("overflow", "hidden");
//             console.log('Start of popup initialization');
//             console.log(this.currItem);
//             // console.log(a);
//             //$(this).find('input.tovar').val(a);
            
//         },
//             change: function() {
//             console.log('Content changed');
//             //console.log(this.content); // Direct reference to your popup element
//             var b = this.content.find('h4.dinam').text(nameTovar); // Direct reference to your popup element
//             var с = this.content.find('#dinam-val').val(nameTovar); // Direct reference to your popup element
//             console.log(b); // Direct reference to your popup element
//         },
//         close: function() {
//             // $("body").css("overflow", "auto");
//             console.log('Popup removal initiated (after removalDelay timer finished)');
//         },
//     }
// });

var typeCar = [];
var priceCar ;
var yearCar = [];
var privodCar = [];
var gazCar = [];
var dataBrand = [];
var modelCar = [];
function formDataFilter(el){
    var typeFilter = el.data('idn');

    if(el.hasClass('active-filter')){
        el.removeClass('active-filter');
        
        if(typeFilter == 'type'){
            typeCar = [];
            $('.active-filter[data-idn=' + typeFilter +']').each(function() {
                typeCar.push($(this).data( "type" )) ;
            });
        }
        if(typeFilter == 'price'){
            // $('.active-filter[data-idn="price"]').removeClass('active-filter');
            // var priceCar = 0;
        }
        if(typeFilter == 'brand'){
            dataBrand = [];
            $('.dinamic-model').text('--Выберите марку--');
            // $('.active-filter[data-idn="price"]').removeClass('active-filter');
            // var priceCar = 0;
        }
        if(typeFilter == 'model'){
            modelCar = [];
            $('.active-filter[data-idn=' + typeFilter +']').each(function() {
                modelCar.push($(this).data( "model" )) ;
            });
        }
        if(typeFilter == 'year'){
            yearCar = [];
            $('.active-filter[data-idn=' + typeFilter +']').each(function() {
                yearCar.push($(this).data( "year" )) ;
            });
        }
        if(typeFilter == 'privod'){
            privodCar = [];
            $('.active-filter[data-idn=' + typeFilter +']').each(function() {
                privodCar.push($(this).data( "privod" )) ;
            });
        }
        if(typeFilter == 'gaz'){
            gazCar = [];
            $('.active-filter[data-idn=' + typeFilter +']').each(function() {
                gazCar.push($(this).data( "gaz" )) ;
            });
        }
    }else{
        el.addClass('active-filter');

        if(typeFilter == 'type'){
        typeCar.push(el.data('type'));
        }
        if(typeFilter == 'price'){
            $('.active-filter[data-idn="price"]').removeClass('active-filter');

            el.addClass('active-filter');
            priceCar = el.data('price');
        }
        if(typeFilter == 'brand'){
            dataBrand = [];
            modelCar = [];
            $('.active-filter[data-idn="brand"]').removeClass('active-filter');
            el.addClass('active-filter');
            dataBrand.push(el.data('brand'));
            createModel(el.data('brand'));
        }
        if(typeFilter == 'model'){
            modelCar.push(el.data('model'));
            console.log(modelCar);
        }
        if(typeFilter == 'year'){
            yearCar.push(el.data('year'));
        }
        if(typeFilter == 'privod'){
            privodCar.push(el.data('privod'));
        }
        if(typeFilter == 'gaz'){
            gazCar.push(el.data('gaz'));
        }
    }

    
    

    var data = {
                typeCar: typeCar,
                priceCar : priceCar,
                yearCar : yearCar,
                privodCar : privodCar,
                gazCar : gazCar,
                brand : dataBrand,
                modelCar : modelCar
            };
            $.post(
                "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/filter-a.php",
                data,
                function(data) {                    
                    $('.arch-dinamo-desktop').html(data);
                    //console.log(data);        
                }
			); 
            $.post(
                "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/filter-a-mob.php",
                data,
                function(data) {           
                    $('.arch-dinamo-mob').html(data);
                    //console.log(data);        
                }
			); 
}

function createModel(dataBrand){
    var data = {
                data: dataBrand
            }
            $.post(
                "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/create-model-filter.php",
                data,
                function(data) {            
                    $(".dinamic-model").html(data);      
                }
			); 
}


$('.filter-el').on('click', function(e){
           var el = $(this);
            e.preventDefault();
            formDataFilter(el);
        })    
$('.dinamic-model').on('click', '.filter-el', function(e){
           var el = $(this);
            e.preventDefault();
            formDataFilter(el);
            console.log( $(this) );
        })    


    function formatStr(str) {
		str = str.replace(/(\.(.*))/g, '');
		var arr = str.split('');
		var str_temp = '';
		if (str.length > 3) {
			for (var i = arr.length - 1, j = 1; i >= 0; i--, j++) {
				str_temp = arr[i] + str_temp;
				if (j % 3 == 0) {
					str_temp = ' ' + str_temp;
				}
			}
			return str_temp;
		} else {
			return str;
		}
	}

    $('.format-run').each(function() {
        var dataF = $(this).text() ;
        $(this).text(formatStr(dataF));
    });


    $(".popup-form-ajax").submit(function() {
        var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "https://autokosmos.com.ua/popup-form-ajax.php",
                data: data
            }).done(function() {
                $(this).find("input").val("");
                $(this).trigger("reset");
                    $.magnificPopup.open({
                    items: {
                        src: '#thanck'
                    },
                    type: 'inline',
                    
                    });
            });
            return false;
        });

        $(".form-ajax").submit(function() {
        var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "https://autokosmos.com.ua/form-ajax.php",
                data: data
            }).done(function() {
                $(this).find("input").val("");
                $(this).trigger("reset");
                    $.magnificPopup.open({
                    items: {
                        src: '#thanck'
                    },
                    type: 'inline',
                    
                    });
            });
            return false;
        });

        $(".popup-form-product").submit(function() {
        var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "https://autokosmos.com.ua/form-product.php",
                data: data
            }).done(function() {
                $(this).find("input").val("");
                $(this).trigger("reset");
                    $.magnificPopup.open({
                    items: {
                        src: '#thanck'
                    },
                    type: 'inline',
                    
                    });
            });
            return false;
        });

        $(".short-form").submit(function() {
        var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "https://autokosmos.com.ua/short-form.php",
                data: data
            }).done(function() {
                $(this).find("input").val("");
                $('form').trigger("reset");
                    $.magnificPopup.open({
                    items: {
                        src: '#thanck'
                    },
                    type: 'inline',
                    
                    });
            });
            return false;
        });

        
///////////////////NiceSelect c AJAX изменением//////////
        $(".brandch").on('change', function(){
            var valueSelect = $(this).val();
            var data = {
                data: valueSelect
            }
            $.post(
                "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/dinamic-option-model.php",
                data,
                function(data) {            
                    $("#dms").html(data);
                    $("#dms").niceSelect('update');       
                }
			); 
        });

        if ( $(window).width() < 768  ){
            $('.eq-concur').equalHeights();
        }
       
<?php 
    if (is_archive()){
        if ($catname->parent == 0){
            $catname = get_queried_object();
            $termID = $catname->term_id;
            ?>

          
                //$('[data-brand="<?php echo $termID; ?>"]').trigger('click')  ;
                $('[data-brand="<?php echo $termID; ?>"]').addClass('active-filter')  ;
                createModel(<?php echo $termID; ?>);
                
                dataBrand.push(<?php echo $termID; ?>);

<?php
        }   
    } 
?>  

$('.update').on('click', function(e){
    let id = $(this).data('update'); 
    let title = $('#t' + id).val();
    let descr = $('#d' + id).val();
    console.log(id);
    console.log(title);
    console.log(descr);
    updateCarSeo(id, title, descr);
    e.preventDefault();
});




function updateCarSeo(id, title, descr){
    let data = {
        id: id,
        title: title,
        descr: descr
    }
        $.post(
                "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/update-car-seo.php",
                data,
                function(data) {                    
                    
                    console.log(data);  
                    location.reload();      
                }
			); 
}


$('.update-term').on('click', function(e){
    let id = $(this).data('update'); 
    let title = $('#t' + id).val();
    let descr = $('#d' + id).val();
    let type = $(this).data('type'); 
    console.log(id);
    console.log(title);
    console.log(descr);
    updateTermSeo(id, title, descr, type);
    e.preventDefault();
});

function updateTermSeo(id, title, descr,type){
    let data = {
        id: id,
        title: title,
        descr: descr,
        type: type
    }
        $.post(
                "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/update-term-seo.php",
                data,
                function(data) {                    
                    
                    console.log(data);  
                    location.reload();      
                }
			); 
}

var phone_input2 = $('input[type="tel"]');
        phone_input2.each(function(){
            $(this).mask("+389999999999", {autoсlear: false});
        });
</script>


<?php
    if(get_query_var('yearcar')){ ?>

        <script>
        //alert('!!!!!!!');
        //$('.filter-el[data-year="'<?php echo get_query_var('yearcar');?>'"]').trigger('click');
        $(".filter-year").find("[data-year='<?php echo get_query_var('yearcar');?>']").trigger('click');
        </script>
   <?php }
?>

<?php if(is_archive()){
    $catname = get_queried_object(); ?>
    <script> 
        function yearForm(cat){
            var data = {
                        data: cat
                    }
                    $.post(
                        "https://autokosmos.com.ua/wp-content/themes/avtokosmos/inc/year-form.php",
                        data,
                        function(data) {            
                            $(".years-form .row").html(data);      
                        }
                    ); 
        }
            yearForm('<?php echo $catname->slug ?>');
        
        
    </script>
    <?php } ?>

<script src="//code.jivosite.com/widget/VD8D7jhzHf" async></script>




</body>

</html>