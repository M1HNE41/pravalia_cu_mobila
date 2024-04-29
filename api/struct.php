
<!DOCTYPE html>
<html lang="ro">
<head>
  <script>
  window.va = window.va || function () { (window.vaq = window.vaq || []).push(arguments); };
</script>
<script defer src="/_vercel/insights/script.js"></script>
  <style>
body, header {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ffffff;
  font-family: 'Poppins', sans-serif;
  color: #000000;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
  animation: animate-bg 0.92s infinite linear;
}

@keyframes  animate-bg {
  100% {
    background-position: 50px 50px;
  }
}

    .header {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .logo {
            color: #000000;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .menu a {
            color: #000000;
            text-decoration: none;
            margin-left: 20px;
            font-size: 18px;
            font-family: 'Poppins', sans-serif; /* Schimbăm fontul butoanelor */
        }

       .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 4px; /* Adăugăm un border-radius pentru margini rotunjite */
}

.dropdown-content a {
    color: #000000;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 16px;
    transition: background-color 0.3s; /* Adăugăm o tranziție pentru schimbarea culorii la hover */
    margin: 0; /* Eliminăm marginile implicite ale elementelor <a> */
}

.dropdown-content a:hover {
    background-color: #f2f2f2; /* Schimbăm culoarea la hover */
}

.dropdown:hover .dropdown-content {
    display: block;
}

.vertical-menu {
  width: 100px;
}

.vertical-menu a {
  background-color: transparent;
  color: black;
  display: block;
  padding: 10px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: transparent;
}

.gallery {
    margin: 30px;
    border-left: currentColor solid #ccc;
    float: left;
    width: 300px;
}
.gallery img {
    width: 100%;
    height: 200px;
    flex-wrap: wrap;
}
.bottom{
  position: relative;
  color: black;
}
.vertical-menu2 {
  width: 100px;
}

.vertical-menu2 a {
  background-color: transparent;
  color: black;
  display: block;
  padding: 0px;
  text-decoration: none;
}

.vertical-menu2 a:hover {
  background-color: transparent;
}    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pravalia cu mobila</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="cegB27eo8bVivjtxdVsHOLTnA-91EPyeYNmgvg-BhWw" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css'>


</head>


<body>
    <header class="header">
        <a href="/home" class="logo"><img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/logo.png?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9sb2dvLnBuZyIsImlhdCI6MTcwODYzNjAwNCwiZXhwIjozMTU1Mjc3MTAwMDA0fQ.eFwp7a94N-8GmvY0gGljf3OpE5llbVJL6BmgMMPhwFU&t=2024-02-22T21%3A06%3A45.022Z" alt="logo" width="400px" height="95px">
        </a>
        <nav class="menu">
            <div class="dropdown">
                <a href="#" class="dropdown-btn">Mobila</a>
                <div class="dropdown-content">
                    <a href="/mobila-dormitor">Mobila Dormitor</a>
                    <a href="/mobila-living">Mobila Living</a>
                    <a href="/accesorii-bucatarie">Accesorii Bucătărie</a>
                    <a href="/baie">Accesorii Baie</a>
                </div>
            </div>
  	    <a> Informatii</a>
 	    <a> Servicii</a>
  	    <a> Scurt istoric</a>
<?php
$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function ipToConcatenatedString($ip) {
    // Remove dots from the IP address
    $ipWithoutDots = str_replace('.', '', $ip);

    return $ipWithoutDots;
}
    // Query the sessions table to check if the session is active
    $sessionId = ipToConcatenatedString(get_client_ip());
    $sql_query = "SELECT user_id FROM sessions WHERE session_id = '$sessionId' AND is_active = true";
    $result = pg_query($dbconn, $sql_query);
    if ($result) {
    // Check if any rows were returned
    if (pg_num_rows($result) > 0) {
        // Fetch the user_id from the result
        $user_id = pg_fetch_assoc($result)['user_id'];

        // Query the user table to get the username
        $user_query = "SELECT username FROM users WHERE id = $user_id";
        $result_user = pg_query($dbconn, $user_query);

        // Check if the user exists
        if ($result_user && pg_num_rows($result_user) > 0) {
            $username = pg_fetch_assoc($result_user)['username'];
            echo '<a href="#">Welcome, ' . $username . '</a>';
            echo '<form method="post">
    <button type="submit" name="logout">Logout</button>
</form>';
            if (isset($_POST['logout'])) {
                $delete_query = "DELETE FROM sessions WHERE session_id = $sessionId";
        $delete_result = pg_query($dbconn, $delete_query);

        if ($delete_result) {
            // Deletion successful
            echo '<script>window.location.reload();</script>';
    exit(); // Make sure to exit to prevent further execution of PHP code
        } else {
            // Deletion failed
            echo "Error deleting record: " . pg_last_error($dbconn);
        }
    }
        }
    }
        else {
    // Session ID not set, display login and signup buttons
    echo '<a class="fa" href="/login">Login</a>';
    echo '<a class="fa" href="/signup">Signup</a>';
}
    }else {
    // Session ID not set, display login and signup buttons
    echo '<a class="fa fa-sign-in" href="/login">Login</a>';
    echo '<a class="fa fa-sign-out" href="/signup">Signup</a>';
}
?>
        </nav>
    </header>
  <?php
   function generateCard($imgUrl, $title, $price, $description, $dimensions) {
    echo "
    <div class='card card-item lg:w display: inline-block'>
        <div class='bg-white shadow-xl rounded-lg overflow-hidden'>
            <div class='bg-cover bg-center h-56 p-4' style='background-image: url($imgUrl)'>
            </div>
            <div class='p-4'>
                <p class='uppercase tracking-wide text-sm font-bold text-gray-700'>$title</p>
                <p class='text-3xl text-gray-900'>$$price</p>
                <p class='text-gray-700'>$description</p>
            </div>
            <div class='flex p-4 border-t border-gray-300 text-gray-700'>
                <div class='flex-1 inline-flex items-center'>
                    <p><span class='text-gray-900 font-bold'>$dimensions</span> Dimensions</p>
                </div>
            </div>
        </div>
    </div>
    ";
}
    ?>
<script>
  window.si = window.si || function () { (window.siq = window.siq || []).push(arguments); };
</script>
<script defer src="/_vercel/speed-insights/script.js"></script>
</body>
</html>

