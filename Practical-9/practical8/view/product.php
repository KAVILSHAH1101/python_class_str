<?php
echo $oneproduct['product_id']."&nbsp;&nbsp;&nbsp;&nbsp;".$oneproduct['product_name']."&nbsp;&nbsp;&nbsp;&nbsp;".$oneproduct['price'];
echo "<a href='/../model/placeorder.php?pid=";
echo $oneproduct['product_id'];
echo "'>Buy Now</a><br>";?>