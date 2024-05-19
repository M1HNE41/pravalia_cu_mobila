<!DOCTYPE html>
<html>
<body>
<?php include 'struct.php';
$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());
?>
<div style="clear:both;"> </div>
<center>
	<h1>
	<b>Baie</b>
</h1>
</center>


<hr color="black"  width="auto" >
<center>
<h3 >Accesorii</h3>
</center>

<?php
echo '<div class="flex flex-wrap justify-between mx-auto space-x-4" style="max-width: 1200px;">'; // start a new row
$productNumber=24;
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        echo '<div style ="width: 30%; margin-bottom: 20px">';
        $productNumber++;
        $sql = "SELECT * FROM products WHERE id = '$productNumber'";
        $result = pg_query($dbconn, $sql);
        $product = pg_fetch_assoc($result);
        generateCard($product['image_url'], $product['name'], $product['price'], $product['description'], $product['dimensions']);
        echo'</div>';
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
<center>
<h3 >Oglinzi</h3>
</center>

<?php
echo '<div class="flex flex-wrap justify-between mx-auto space-x-4" style="max-width: 1200px;">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        echo '<div style ="width: 30%; margin-bottom: 20px">';
        $productNumber++;
        $sql = "SELECT * FROM products WHERE id = '$productNumber'";
        $result = pg_query($dbconn, $sql);
        $product = pg_fetch_assoc($result);
        generateCard($product['image_url'], $product['name'], $product['price'], $product['description'], $product['dimensions']);
        echo'</div>';
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
</div>
<center>
	<bold>
	<h3> Perdele de dus </h3>
	<bold>
</center>
<hr color="black"  width="auto" >

<?php
echo '<div class="flex flex-wrap justify-between mx-auto space-x-4" style="max-width: 1200px;">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        echo '<div style ="width: 30%; margin-bottom: 20px">';
        $productNumber++;
        $sql = "SELECT * FROM products WHERE id = '$productNumber'";
        $result = pg_query($dbconn, $sql);
        $product = pg_fetch_assoc($result);
        generateCard($product['image_url'], $product['name'], $product['price'], $product['description'], $product['dimensions']);
        echo'</div>';
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>
<center>
	<bold>
		<h3>Covorase de baie</h3>
	</bold>	
</center>
<?php
echo '<div class="flex flex-wrap justify-between mx-auto space-x-4" style="max-width: 1200px;">'; // start a new row
for ($i = 0; $i < 2; $i++) { // generate 2 rows
    for ($j = 0; $j < 3; $j++) { // generate 3 cards in each row
        echo '<div style ="width: 30%; margin-bottom: 20px">';
        $productNumber++;
        $sql = "SELECT * FROM products WHERE id = '$productNumber'";
        $result = pg_query($dbconn, $sql);
        $product = pg_fetch_assoc($result);
        generateCard($product['image_url'], $product['name'], $product['price'], $product['description'], $product['dimensions']);
        echo'</div>';
    }
    echo '<div style="flex-basis: 100%; height: 0;"></div>'; // this will force wrapping to the next line
}
echo '</div>'; // end the row
?>


</body>
		<?php include 'footer.php'; ?>
</html>
