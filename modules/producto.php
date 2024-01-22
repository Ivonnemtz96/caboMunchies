<?

// Ruta al archivo JSON
$archivo_json = 'datos.json';

// Lee el contenido del archivo JSON
$json_contenido = file_get_contents($archivo_json);

// Decodifica el JSON en un array asociativo
$datos = json_decode($json_contenido, true);

extract($datos[$_REQUEST["id"]]);


?>
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>
                                <? echo $nombre?>
                            </h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>
                                    <? echo $nombre?>
                                </span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <section class="product-details-page pro-style4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro_details_pos pro_details_left_pos">
                        <!-- Product slider start -->
                        <div class="product_detail_slider product_details_lr product_details product_details_sticky">
                            <!-- Product slider start -->
                            <div class="product_detail_img product_detail_img_left">
                                <div class="product_img_top">
                                    <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                                    <!-- blog slick slider start -->
                                    <div class="style4-slider-big slick-slider">
                                        <div class="slick-slide">
                                            <a href="<?echo $imagen?>" class="product-single">
                                                <figure class="zoom" onmousemove="zoom(event)"
                                                    style="background-image: url('<?echo $imagen?>');">
                                                    <img src="<?echo $imagen?>" class="img-fluid" alt="p-1">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- blog slick slider end -->
                                <!-- small slick-slider start -->
                                <div class="pro-slider">
                                    <div class="style4-slider-small pro-detail-slider">
                                        <div class="slick-slide">
                                            <a href="javascript:void(0)" class="product-single__thumbnail">
                                                <img src="<?echo $imagen?>" class="img-fluid" alt="p-1">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- small slick-slider end -->
                            </div>
                            <!-- Product slider end -->
                        </div>
                        <!-- peoduct detail start -->
                        <div class="product_details_wrap product_details_lr product_details">
                            <div class="product_details_info">
                                <div class="pro-nprist">
                                    <div class="product-info">
                                        <!-- product-title start -->
                                        <div class="product-title">
                                            <h2>
                                                <? echo $nombre?>
                                            </h2>
                                        </div>
                                        <!-- product-title end -->
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-prlb pro-sale">
                                            <div class="price-box">
                                                <span class="new-price">$
                                                    <? echo $precio?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <form method="post" class="cart">
                                            <div class="pro-detail-button">
                                                <div class="product-quantity-button">
                                                    <div class="product-quantity-action">
                                                        <h6>Cantidad:</h6>
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <select id="cantidad">
                                                                    <option value="" disabled>-Cantidad-</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container">
                                                    <!-- Link -->
                                                    <div class="sb-box-link">
                                                        <div class="mt-4" id="paypal-button-container"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <section class="product-description-tab">
                                <div class="product-tab" id="collapse-tab">
                                    <div class="tab">
                                        <a href="#collapse-description" class="tab-title collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true">
                                            <h6 class="tab-name">Descripción</h6>
                                            <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                        </a>
                                        <div class="collapse show" id="collapse-description"
                                            data-bs-parent="#collapse-tab">
                                            <div class="product-description">
                                                <p>
                                                    <? echo $descripcion?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- peoduct detail end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>