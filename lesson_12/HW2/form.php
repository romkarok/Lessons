<?php
if ($_POST['submit_button']) {
$name = $_POST['name'];
$price = $_POST['price'];
$season = $_POST['season'];
$co=mysqli_connect("localhost","root","root","ProductList");
    if($co=== false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
$sql ="INSERT INTO product_list(name,price,season) VALUES ('$name', '$price', '$season')";
    if (mysqli_query($co,$sql)) {
        $delay = 0;
        header("Refresh: $delay;");
    } else {
        echo "Error: " . $sql . "<br>" . $co->error;
    }
    $co->close();
}
else {
$con=mysqli_connect("localhost","root","root","ProductList");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM product_list");

echo "<table border='2'>
<tr>
<th>Id</th>
<th>Имя продукта</th>
<th>Цена</th>
<th>Сезон</th>
</tr>";

while($row = mysqli_fetch_array($result))
{   echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['season'] . "</td>";
    echo "</tr>"; }
echo "</table>";
mysqli_close($con);
?>

<html lang="ru">
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h2> Добавить продукт: </h2>
    <style>
        input.price {
            width: 50px;
        }
        .price{
            -moz-appearance: textfield;
        }
        .price::-webkit-inner-spin-button {
            display: none;
    </style>
    <p>
        <input type="text" name="name" placeholder="Имя продукта" size="10" maxlength="15"required>
        <input class="price" type="number" name="price" placeholder="Цена" maxlength="5" min="0" max="10000" required>
        <input type="text" name="season" placeholder="Сезон" size="8" maxlength="10" required>
    </p>
    <input name="submit_button" type="submit" value="Отправить">
</body>
</html>
<?php
}
?>