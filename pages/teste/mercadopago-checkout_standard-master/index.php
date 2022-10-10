<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once "lib/mercadopago.php";

$mp = new MP("APP_USR-2325625643165214-062516-454656da61784076442acef228d3e4cb__LC_LB__-179777995");


$preference_data = array(
    "notification_url" => "http://www.yoursite.com/ipn.php",
    "external_reference"=> "Reference_1234",
   // "expires"=> true,
   // "expiration_date_to" =>"2014-08-22T08:02:55.663-04:00",
    "auto_return" => "all",
    "items"=> array(array(
					        "id"=> "1234",
					        "title"=> "titulo1234",
					        "description"=> "Teste de pagamentos",
					        "quantity"=> 1, 
					        "unit_price"=> 1000,
						    "category_id"=>"tickets",
					        "currency_id"=> "BRL",
					        "picture_url"=> "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
  			  )),
	"payer" => array(
                    "name" => "João",
                    "surname" => "da Silva",
                    "email" => "test_user_13443234@testuser.com",
                    
                    "phone" => array(
                        "area_code" => "5511",
                        "number" => "41414141"),
                    
                    "address" => array(
                        "zip_code" => "05303-090",
                        "street_name" => "Av. consolacao",
                        "street_number" => "123"),
				    
				    "identification"=>array(
										"type"=>"CPF",
										"number"=>"19119119100"
									    ),
					"date_created" => "2013-08-13T12:00:21-03:00"
                ),
	    
	"shipments" => array( 
            "receiver_address" =>
	    			array(
	    				  "zip_code" => "49010620",
						  "street_number" => 124,
						  "street_name"=>"Avenida Mamede Paes Mendonça",
						  "floor"=>"4",
						   "apartment"=>"C"
	    
            )),
	
	'back_urls'=> 
		array(
        'success'=> 'http://www.yoursite.com/success.php',
        'failure'=> 'http://www.yoursite.com/failure.php',
        'pending'=> 'http://www.yoursite.com/pending.php'
		),
	'payment_methods'=> 
		array(
          'excluded_payment_methods'=>array(array( 
            
			'id'=> 'tickets'
           
            )
        ),'excluded_payment_types'=>array(array( 
            
            'id'=> ''
            )
        ),'installments'=> 12
		)
);
  
$response_payment = $mp->create_preference($preference_data);

?>
<!-- Aquí debes insertar la URL que corresponde al "init_point" -->
<a href="<?php echo $response_payment["response"]["init_point"]; ?>" name="MP-Checkout" class="blue-L-Sq-Ar-BrAll" mp-mode="blank">Pagar</a>

<!-- Pega este código antes de cerrar la etiqueta </body> -->
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>



