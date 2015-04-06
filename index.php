<?php header('Content-Type: application/liquid'); $productId = str_replace("/","",$_SERVER['REQUEST_URI']); ?>
{% layout blank %}
{{ product['<?=$productId?>'] | json }}
