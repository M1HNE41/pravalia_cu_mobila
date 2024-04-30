<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre Noi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Resetare stiluri implicite */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Stiluri de bază */
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .about-section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            max-width: 600px;
            width: 100%;
        }

        .about-section h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .about-section p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 15px;
            font-weight: 400;
        }

        .about-section ul {
            list-style-type: none;
            margin-left: 20px;
        }

        .about-section ul li {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 5px;
            font-weight: 400;
        }
    </style>
</head>
<body>
	<?php include 'struct.php';
$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());
?>
    <div class="about-section">
        <h2>Despre Noi</h2>
        <p>Pravalia cu Mobila este o destinație de încredere pentru soluțiile tale de mobilier și amenajare interioară. Ne străduim să oferim o gamă variată de produse de calitate și servicii personalizate pentru clienții noștri.</p>
    </div>
    <div class="about-section">
        <h2>Misiunea Noastră</h2>
        <p>Misiunea noastră este să ajutăm clienții să-și transforme casele în spații funcționale și estetice, oferindu-le soluții de mobilier și accesorii la prețuri accesibile și de înaltă calitate.</p>
    </div>
    <div class="about-section">
        <h2>Valorile Noastre</h2>
        <ul>
            <li>Satisfacția clienților</li>
            <li>Inovația</li>
            <li>Integritatea</li>
            <li>Colaborarea</li>
            <li>Îmbunătățirea continuă</li>
        </ul>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
