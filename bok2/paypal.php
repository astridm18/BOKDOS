
<script 

src="https://www.paypal.com/sdk/js?client-id=AfDkZK0M7gyvHTX8sm0mJ79iMzLPc3TFIwixIh114dFjY_Fojp0J_Qon5CcieSJhRZxjFUWsZkl1G5d4&currency=USD"></script>

 <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        // Order is created on the server and the order id is returned
        createOrder: function(data,actions) {
          return actions.order.create({
            purchase_units:[{
                amount:{
                    value: <?php echo $_GET["precio"]; ?> //Permite que el monto de la compra sea cobrado mediante paypal
                }
            }]
          });
        },
        onApprove: function(data, actions){
            actions.order.capture().then(function(detalles){
            window.open("ticket.php" , "asd" , "width=auto,height=auto,'toolbar=no,status=no,scrollbars=no,location=no,menubar=no,directories=no")
            });
        },
        onCancel: function(data){
            alert("Pago cancelado :(");
            console.log(data);
        }
      }).render('#paypal-button-container');
    </script>