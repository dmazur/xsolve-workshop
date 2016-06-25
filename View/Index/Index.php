<h3>Product list</h3>

<ul class="list-product">
<?php foreach ($productList as $product): ?>
    <li>
        <?php echo $product['name'] ?>
        - <?php echo $product['desc'] ?>
        <?php printf("%.2f", $product['price']) ?> zł/szt,
        dostępnych <?php echo $product['amount'] ?> sztuk
    </li>
<?php endforeach ?>
</ul>
