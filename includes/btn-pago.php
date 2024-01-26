<script
    src="https://www.paypal.com/sdk/js?client-id=AQg1mNZMtFE08sU3b__-Os2fWnjxLHWLfxuccagrnvSkT2T1ZR3H0V8QlFRNilFLBj-KOPI2P1vgs6Mx&currency=MXN">
</script>

<script>
// Render the PayPal button into #paypal-button-container
paypal.Buttons({

    style: {
        color: 'gold',
        shape: 'pill',
        label: 'pay'
    },

    // Set up the transaction
    createOrder: function(data, actions) {
        // Obtén el elemento select por su id
        var selectElement = document.getElementById("cantidad");

        // Obtén el valor seleccionado
        var valorSeleccionado = 1;
        valorSeleccionado = selectElement.value;
        var total = <? echo $precio ?> * valorSeleccionado * 1.04;
        total = total.toFixed(2);
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: total
                },
                description: "Estás pagando por <?php echo $nombre;  ?>  en Cabo Munchies"
            }]
        });
    },

    // Finalize the transaction
    onApprove: function(data, actions) {

        // Obtén el elemento select por su id
        var selectElement = document.getElementById("cantidad");

        // Obtén el valor seleccionado
        var valorSeleccionado = 1;
        valorSeleccionado = selectElement.value;
        var total = <? echo $precio ?> * valorSeleccionado * 1.04;
        total = total.toFixed(2);

        return actions.order.capture().then(function(details) {
            // Show a success message to the buyer
            console.log(data);
            console.log(details);
            window.location = ('/archivo-contacto.php?name=' + details.payer.name.given_name +
                '&email=' +
                details.payer.email_address +
                '&idTran=' + details.purchase_units[0].payments.captures[0].id +
                '&idCheckOut=' +
                data.orderID + '&time=' + details.purchase_units[0].payments.captures[0]
                .update_time + '&amount=' + details.purchase_units[0].payments.captures[0]
                .amount.value + '&currency=' + details.purchase_units[0].payments.captures[0]
                .amount.currency_code + '&producto=<?php echo $nombre;?>' + '&cantidad=' +
                valorSeleccionado);
            // Se agrega el nombre del producto al final de la url y se manda a la página de completado.php
        });
    },

    onCancel: function(data) {
        window.location = "producto.php?id=<?echo $id?>"
    },


    onError: function(err) {
        console.log("Error starts");
        console.log(err);
    }


}).render('#paypal-button-container');
</script>