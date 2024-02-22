<?php
    session_start();
?>
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

.container{
  max-width:1200px;
  margin:0 auto;
  background:#f2f2f2;
  overflow: auto;
}
.gallery{
  margin:30px;
  border-left: currentColor  solid #ccc;
  float:left;
  width:300px;

}

.gallery img{
width: 100%;
height:200px;
flex-wrap: wrap;
}



.card-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-bottom: 20px;
}
.card-item {
  margin-bottom: 20px;
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
}
    </style>
  <title>Pravalia cu mobila</title>
  <div class="relative">
    <div id="logo">
    <a href="/home">
      <img src="pravaliacumobila/logo.png" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css'>
<link rel="stylesheet" type="text/css" href="/style">


</head>


<body>
<div class="topnav">
 <div class="subnav">
   <button class="subnavbtn"><i class="fa fa-bars"> Mobila</i></button>
    <div class="subnav-content">
      <a href="/mobila-dormitor">Mobila Dormitor</a>
      <a href="/mobila-hol">Mobila Hol</a>
      <a href="/mobila-living">Mobila Living</a>
      <a href="/accesorii-bucatarie">Accesorii bucatarie</a>
      <a href="/baie">Baie</a>
      <a href="/birouri-de-acasa">Birouri de acasa</a>
    </div>
  </div>   

  <a class="fa fa-phone"> Contact</a>
  <a class="fa fa-info-circle"> Informatii</a>
  <a class="fa fa-legal"> Termeni si conditii</a>
  <a class="fa fa-wrench"> Servicii</a>
  <a class="fa fa-copyright"> Scurt istoric</a>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<a href="#">Welcome, ' . $_SESSION['username'] . '</a>';
        echo '<a class="fa fa-sign-out" href="/logout">Deconectare</a>';
    } else {
        echo '<a class="fa fa-sign-in" href="/login">Conectare</a>';
        echo '<a class="fa fa-sign-out" href="/signup">Inregistrare</a>';
    }
  ?>
  
</div>
<?php
   function generateCard($imgUrl, $title, $price, $description, $dimensions, $material) {
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
                <div class='flex-1 inline-flex items-center'>
                    <p><span class='text-gray-900 font-bold'>$material</span> Material</p>
                </div>
            </div>
        </div>
    </div>
    ";
}
    ?>
</body>
</html>

