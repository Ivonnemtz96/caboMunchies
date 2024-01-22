<!-- Price -->
<div class="sb-box-price mt-15 mb-25 txt-color-01">
    <span>Cost: $<?php echo number_format($precio, 2) ?></span>
    <span>Tax: $<?php echo number_format(($precio * 0.04), 2) ?></span>
    <span>Total: $<?php echo number_format(($precio * 1.04), 2) ?></span>
    <span>In stock</span>
</div>

<!-- Se cambia la variable $total por la variable $precio para todos los productos -->