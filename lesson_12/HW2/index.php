<?php
$conn = mysqli_connect("localhost", "root", "root", "ProductList");
$query = "select * from product_list as pl
where season = 'Summer';";

if($result = mysqli_query($conn,$query)){
    while($row=mysqli_fetch_array($result)){
            print_r($row);

    }
}
mysqli_free_result($result);
