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
	<b>Dormitor</b>
</h1>
</center>

<p>
Magazinul nostru va oferă o gamă extinsă de mobilă pentru dormitor, paturi continentale,cearșafuri cu elastic, antialergice, dulapuri, noptiere şi dispune de un sortiment bogat care să se potrivească modului în care dormi, totul la preţuri convenabile.
</p>
<hr color="grey"  width="auto" >
<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor1.jpg">
  
</div>

<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor2.jpg">
  
</div>

<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor3.jpg">
  
</div>

<div class="gallery">
  <img class="card-img-top" src="Poze produse\Dormitor4.jpg">
  
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<hr color="black"  width="1900px" >
<br>
<br>
<center>
<h3 >PATURI ȘI CADRE DE PAT REZISTENTE</h3>
</center>

<?php
echo '<div class="flex flex-wrap justify-between mx-auto space-x-4" style="max-width: 1200px;">'; // start a new row
$productNumber=0;
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
<h3 >Cuverturi</h3>
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
	<h3> Cearșafuri </h3>
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
		<h3> Dulapuri din lemn masiv </h3>
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


<?php include 'footer.php'; ?>

</body>

</body>
</html>
