<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51PYK8RRwnsZkyZcB2JcPQeyjAx6734XzrKHBbb4lPGgPhKeM7pydKYCbzy2EEXQNzoaY3ATuVpQDCvy2RTrYga3J00xw1MyQYe');

$token = $_POST['token'];
$amount = 1000; // Monto en centavos

try {
    $charge = \Stripe\Charge::create([
        'amount' => $amount,
        'currency' => 'usd',
        'source' => $token,
    ]);
    // Manejar el pago exitoso
    echo "Pago realizado con éxito.";
} catch (\Stripe\Exception\CardException $e) {
    // Manejar el error de pago
    echo "Error al procesar el pago: " . $e->getMessage();
}
?>