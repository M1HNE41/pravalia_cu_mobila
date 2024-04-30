<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istoric</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Stiluri de bază */
        .istoric {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f6f6f6;
            color: #333;
            margin: 0;
            padding: 20px;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
            animation: animate-bg 0.92s infinite linear;
        }
        @keyframes  animate-bg {
        	  100% {
        	    background-position: 50px 50px;
        	  }
        	}
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .history {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .history h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .history p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .history {
                padding: 20px;
            }
        }
    </style>
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
