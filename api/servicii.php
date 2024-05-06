<!DOCTYPE html>
<html lang="ro">
<?php include 'servicii-css.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicii</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'struct.php';
$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());
?>
    <div class="servicii">
    <div class="container">
        <div class="service">
            <h2>Design de Mobilier Personalizat</h2>
            <p>Lucram indeaproape cu clientii pentru a transforma viziunile lor in realitate. De la concept la finalizare, cream piese de mobilier personalizate care se potrivesc perfect spatiului si stilului dvs.</p>
        </div>
        <div class="service">
            <h2>Consultanta in Design Interior</h2>
            <p>Indiferent daca revigorati o singura camera sau renovati intreaga locuinta, expertii nostri in design interior sunt aici pentru a va ajuta. Oferim consultatii personalizate pentru a va ajuta sa profitati la maximum de spatiul dvs., de la planificare la selectia culorilor si dincolo de aceasta.</p>
        </div>
        <div class="service">
            <h2>Restaurare Mobilier</h2>
            <p>Oferim viata noua mobilierului vechi cu serviciile noastre de restaurare. Mestesugarii nostri priceputi folosesc tehnici traditionale si moderne pentru a repara si a restaura piesele uzate, pastrandu-le frumusetea si farmecul initiale.</p>
        </div>
        <div class="service">
            <h2>Livrare si Instalare</h2>
            <p>Relaxati-va in timp ce ne ocupam de logistica. Oferim servicii de livrare si instalare fara probleme, asigurandu-ne ca mobilierul dvs. ajunge in siguranta si este instalat conform asteptarilor dvs.</p>
        </div>
        <div class="service">
            <h2>Asistenta pentru Clienti</h2>
            <p>La Pravalia cu Mobila, satisfactia clientilor este prioritatea noastra principala. Echipa noastra dedicata de asistenta este disponibila pentru a va ajuta in fiecare pas al drumului, de la raspunsurile la intrebarile despre produsele noastre pana la rezolvarea oricaror probleme care pot aparea.</p>
        </div>
    </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
