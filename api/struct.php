
<!DOCTYPE html>
<html>
<head>
  <style>
        .btn {                                       
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 14px 16px;
  font-size: 16px;
  cursor: pointer;
    }
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow-x: hidden;
}

a {
    color: white;
  text-decoration: none;
}



.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 14px;
}
div.relative {
  position: relative;
  left: -30px;

}
/* The subnavigation menu */
.subnav {
  float: left;
  overflow: hidden;
}

/* Subnav button */
.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Add a red background color to navigation links on hover */
.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: grey;
}

/* Style the subnav content - positioned absolute */
.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: grey;
  width: 100%;
  z-index: 1;
}

/* Style the subnav links */
.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

/* Add a grey background color on hover */
.subnav-content a:hover {
  background-color: #eee;
  color: black;
}
.subnav:hover .subnav-content {
  display: block;
}

.footer {
  padding: 1rem;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #333;
  color: white;
  position: auto;
  text-align: center;

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

.container{
  max-width:1200px;
  margin:0 auto;
  background:#f2f2f2;
  overflow: auto;
  padding: 0 10px; /* add horizontal padding to the container */
}

.card-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.card-item {
  flex: 1 0 30%; /* this will make the card take up 30% of the row width, and it won't grow or shrink */
  box-sizing: border-box;
  word-wrap: break-word;
  margin-bottom: 20px;
  max-width: calc(33.33% - 20px); /* this will limit the maximum width of the card */
}

.price {
  color: grey;
  font-size: 22px;
  text-align: center;
}

.card-img-top {
  width: 100%;
  height: 30vh;
  object-fit: contain;
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
  <title>Pravalia cu mobila</title>
  <div class="relative">
    <div id="logo">
    <a href="/home">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/logo.png?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9sb2dvLnBuZyIsImlhdCI6MTcwODYzNjAwNCwiZXhwIjozMTU1Mjc3MTAwMDA0fQ.eFwp7a94N-8GmvY0gGljf3OpE5llbVJL6BmgMMPhwFU&t=2024-02-22T21%3A06%3A45.022Z" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css'>


</head>


<body>
<div class="topnav">
 <div class="subnav">
   <button class="subnavbtn"><i class="fa fa-bars"> Mobila</i></button>
    <div class="subnav-content">
      <a href="/mobila-dormitor">Mobila Dormitor</a>
      <a href="/mobila-living">Mobila Living</a>
      <a href="/accesorii-bucatarie">Accesorii bucatarie</a>
      <a href="/baie">Baie</a>
    </div>
  </div>   

  <a class="fa fa-phone"> Contact</a>
  <a class="fa fa-info-circle"> Informatii</a>
  <a class="fa fa-legal"> Termeni si conditii</a>
  <a class="fa fa-wrench"> Servicii</a>
  <a class="fa fa-copyright"> Scurt istoric</a>
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
    <!-- ... (your existing HTML code) -->
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
    echo '<a class="fa fa-sign-in" href="/login">Login</a>';
    echo '<a class="fa fa-sign-out" href="/signup">Signup</a>';
}
    }else {
    // Session ID not set, display login and signup buttons
    echo '<a class="fa fa-sign-in" href="/login">Login</a>';
    echo '<a class="fa fa-sign-out" href="/signup">Signup</a>';
}
?>

  
</div>
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
</body>
</html>

