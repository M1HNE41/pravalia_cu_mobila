<!DOCTYPE html>
<html lang="ro">
<?php include 'istoric-css.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istoric</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'struct.php';
        $dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
        or die('Could not connect: ' . pg_last_error());
    ?>
    <div class="istoric">
    <div class="container">
        <div class="history">
            <h2>Istoricul Companiei</h2>
            <p>Pravalia cu Mobila a fost înființată în anul 2000, într-un mic atelier de familie, cu pasiunea pentru creația de mobilier unic și de înaltă calitate. De-a lungul anilor, am crescut și ne-am dezvoltat, aducând mereu inovație și frumusețe în fiecare piesă pe care o creăm.</p>
            <p>Ne mândrim cu o echipă de meșteri pricepuți, dedicați să creeze mobilier care să îmbine estetica cu funcționalitatea, oferind clienților noștri o experiență de neuitat în amenajarea locuinței lor.</p>
            <p>Cu fiecare proiect finalizat, aducem bucurie și confort în casele oamenilor, iar asta ne motivează să continuăm să excelăm și să ne dezvoltăm în fiecare zi.</p>
        </div>
    </div>
    </div>
</body>
    <?php include 'footer.php'; ?>
</html>
