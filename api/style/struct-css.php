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

        .menu a,
        .menu button {
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