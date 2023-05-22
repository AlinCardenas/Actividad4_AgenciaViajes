<?php
require_once("conekta/conekta-php-master/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_krDgSBUFDXLq75oNcei56ZT");
\Conekta\Conekta::setApiVersion("2.0.0");

try{
    $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp(); 
  
    $order = \Conekta\Order::create(
      [
        "line_items" => [
          [
            "name" => "Tacos",
            "unit_price" => 2099,
            "quantity" => 1
          ]
        ],
        "shipping_lines" => [
          [
            "amount" => 0,
            "carrier" => "FEDEX"
          ]
        ], 
        "currency" => "MXN",
        "customer_info" => [
          "name" => "Fulanito Pérez",
          "email" => "fulanito@conekta.com",
          "phone" => "+5218181818181"
        ],
        "shipping_contact" => [
          "address" => [
            "street1" => "Calle 123, int 2",
            "postal_code" => "06100",
            "country" => "MX"
          ]
        ], //shipping_contact - required only for physical goods
        "charges" => [
          [
            "payment_method" => [
              "type" => "oxxo_cash",
              "expires_at" => $thirty_days_from_now
            ]
          ]
        ]
      ]
    );
  } catch (\Conekta\ParameterValidationError $error){
    echo $error->getMessage();
  } catch (\Conekta\Handler $error){
    echo $error->getMessage();
  }

  //peticiones de phP para ver el resultado
// echo "ID: ". $order->id;
// echo "Payment Method:". $order->charges[0]->payment_method->service_name;
// echo "Reference: ". $order->charges[0]->payment_method->reference;
// echo "$". $order->amount/100 . $order->currency;
// echo "Order";
// echo $order->line_items[0]->quantity .
//       "-". $order->line_items[0]->name .
//       "- $". $order->line_items[0]->unit_price/100;


?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="conekta/oxxopay-payment-stub-master/demo/opps_es_files/styles.css" media="all" rel="stylesheet" type="text/css">
		<link href="conekta/oxxopay-payment-stub-master/demo/css" rel="stylesheet">
	</head>
	<body>
		<div class="opps">
			<div class="opps-header">
				<div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="conekta/oxxopay-payment-stub-master/demo/opps_es_files/oxxopay_brand.png" alt="OXXOPay"></div>
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2><?php   echo "$". $order->amount/100 ?>
 <sup><?php   echo $order->currency; ?></sup></h2>
						<p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
					</div>
				</div>
				<div class="opps-reference">
					<h3>Referencia</h3>
					<h1> <?php   echo "Reference: ". $order->charges[0]->payment_method->reference; ?> </h1>
				</div>
			</div>
            <br>
            <div><?php
            echo $order->line_items[0]->quantity .
      "-". $order->line_items[0]->name .
      "- $". $order->line_items[0]->unit_price/100;
      ?>  </div>
			<div class="opps-instructions">
				<h3>Instrucciones</h3>
				<ol>
					<li>Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
					<li>Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>
					<li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
					<li>Realiza el pago correspondiente con dinero en efectivo.</li>
					<li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
				</ol>
				<div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
			</div>
		</div>		
    </body>
</html>
