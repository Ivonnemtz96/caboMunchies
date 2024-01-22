<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Orden Completada</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Orden Completada</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order-complete start -->
    <section class="section-ptb" style="padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <!-- order-details start -->
                        <div class="order-details">
                            <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                            <h4>Gracias por su compra</h4>
                            <span class="order-s">
                                En breve recibirá un correo de confirmación con los datos de su pedido. <br><i>Si no
                                    encuentra el correo, por favor revise su bandeja de SPAM</i><br> ¡Muchas gracias por
                                su compra!
                            </span>
                            <a href="index.php" class="tracking-link btn btn-style">Regresar al inicio</a>
                        </div>
                        <!-- order-details start -->
                        <!-- order-delivery start -->
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery">
                                    <h5>Cabo Munchies</h5>
                                    <p>Dirección</p>
                                    <span class="order-span">San José del Cabo</span>
                                    <span class="order-span">Baja California Sur</span>
                                    <span class="order-span">23400</span>
                                    <span class="order-span">
                                        <a style="text-decoration: underline !important;"
                                            href="https://wa.me/+526241176413?text=Hola%20me%20gustaría%20más%20información."
                                            target="_blank">
                                            <i class="fab fa-whatsapp"></i> 6241176413
                                        </a>
                                    </span>
                                </li>
                                <li class="pay">
                                    <h5>Datos de pedido</h5>
                                    <span class="order-span p-label">
                                        <span class="n-price">Nombre de Producto</span>
                                        <span class="o-price"><?echo $producto?></span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Cantidad</span>
                                        <span class="o-price"><?echo $cantidad?></span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Total</span>
                                        <span class="o-price">$<?echo $amount?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- order-delivery start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order-complete end -->
</main>