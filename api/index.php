<?php
session_start();
include 'struct.php';
?>
<!DOCTYPE html>
<html>
<head>

    <style>
        
*,
*::before,
*::after {
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body,
html {
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
  animation: animate-bg 0.92s infinite linear;
}
.div1{
    display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
  margin: 0;
}
#mz-gallery-container {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}

#mz-gallery {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  width: calc(100% - 70px);
  height: calc(100% - 50px);
  max-height: 670px;
  max-width: 1900px;
  margin: 35px 0px;
}


#mz-gallery figure {
  position: relative;
  margin: unset;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 50%;
  width: auto;
  min-height: 100px;
  margin-right: 30px;
  transition: all 0.3s ease-in-out;
}



#mz-gallery figure div {
  position: absolute;
  width: 1%;
  height: 1%;
  background: transparent;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
/* liniile din jurul pozei(3, 4, 5, 6)*/
#mz-gallery figure div:nth-child(3) {
  top: 0;
  left: 0;
  border-left: 1px dotted lawngreen;
  border-top: 1px solid lawngreen;
  border-radius: 15px 0px 0px 0px;
}

#mz-gallery figure div:nth-child(4) {
  top: 0;
  right: 0;
  border-top: 1px solid white;
  border-right: 1px solid white;
  border-radius: 0px 15px 0px 0px;
}

#mz-gallery figure div:nth-child(5) {
  bottom: 0;
  right: 0;
  border-right: 1px dotted lawngreen;
  border-bottom: 1px solid lawngreen;
  border-radius: 0px 0px 15px 0px;
}

#mz-gallery figure div:nth-child(6) {
  bottom: 0;
  left: 0;
  border-bottom: 1px solid white;
  border-left: 1px solid white;
  border-radius: 0px 0px 0px 15px;
}
/* dimensiunea pozei*/
#mz-gallery figure img {
  height: 100%;
  width: 100%;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px,
    rgba(0, 0, 0, 0.22) 0px 10px 10px;
  border-radius: 5px;
  opacity: 0.9;
  filter: brightness(1);
  outline: 1px solid transparent;
  outline-offset: -40px;
  transition: all 0.3s ease-in-out;
}
/* dimensiunea cercului*/
#mz-gallery figure figcaption {
  position: absolute;
  color: transparent;
  font-size: 18pt;
  line-height: 24pt;
  font-weight: 500;
  padding: 0px 20px;
  text-align: center;
  width: 80%;
  height: 80%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: radial-gradient(
    rgba(124, 252, 0, 0.7) 1px,
    rgba(0, 0, 0, 0.9) 1px
  );

  /* Dotted effect for hover*/
  outline: 2px dotted transparent;
  outline-offset: 0px;
  background-size: 40px 40px;
  opacity: 0;
  border-radius: 100%;
  pointer-events: none;
  animation: background 100s linear infinite;
  transition: all 0.3s ease-in-out;
}

/* Resize photo after hover*/
#mz-gallery figure:hover img {
  height: calc(100% - 40px);
  border-radius: 10px;
  outline: 1px solid rgba(255, 255, 255, 0.8);
  outline-offset: 5px;
  transition: all 0.3s ease-in-out;
}
#mz-gallery figure:hover {
  padding: 0px 20px;
}
/* cercul verde din jurul hover*/
#mz-gallery figure:hover figcaption {
  opacity: 0.8;
  color: white;
  outline: 1px solid lawngreen;
  outline-offset: -20px;
  text-shadow: 1px 1px 3px black, 0px 0px 5px black;
  transition: all 0.3s ease-in-out;
}
/*lungimea liniilor din jurul hover*/
#mz-gallery figure:hover div {
  width: 25%;
  height: 25%;
  opacity: 1;
  transition: all 0.3s ease-in-out;
}



@media (max-width: 610px) {
  #mz-gallery {
    max-height: 320px;
  }
  #mz-gallery figure {
    margin-right: 20px;
  }
  #mz-gallery figure:nth-child(1) {
    margin-left: 20px;
  }
}

@media (max-height: 425px) {
  #mz-gallery figure figcaption {
    font-size: 14pt;
    line-height: 20pt;
  }
}





@media (max-height: 230px) {
  #mz-gallery figure figcaption {
    font-size: 10pt;
    line-height: 12pt;
  }
  #mz-gallery figure:hover figcaption {
    outline-offset: -10px;
  }
  #mz-gallery figure:hover img {
    outline-offset: 10px;
  }
}


/* touch screen devices */

@media (pointer: coarse) {
  #mz-gallery::-webkit-scrollbar {
    height: 35px;
  }
  #mz-gallery {
    scroll-snap-type: unset;
    scroll-padding: unset;
    scroll-behavior: unset;
  }
  #mz-gallery figure {
    scroll-snap-align: unset;
  }
  #mz-gallery figure figcaption {
    width: 100%;
    height: 30%;
    bottom: 0;
    opacity: 1;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    animation: unset;
    border-radius: 0;
    padding: 0px 15px;
    border-top: 1px solid lawngreen;
  }
}

    </style>
        <meta name="google-site-verification" content="cegB27eo8bVivjtxdVsHOLTnA-91EPyeYNmgvg-BhWw" />
</head>
<body>
    <div class="div1">
<center>
    <b>CATEGORII</b>
</center>
<div id="mz-gallery-container">

  <div id="mz-gallery" class="flex flex-wrap justify-between mx-auto space-x-4" style="max-width: 1200px;">
    <figure style ="margin-bottom: 20px">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/index/Dormitor.jpg?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9pbmRleC9Eb3JtaXRvci5qcGciLCJpYXQiOjE3MDg2NDA3NzYsImV4cCI6MzE1NTI3NzEwNDc3Nn0.LQao52pUQp4-CPqNf0qt7SsLgQ1zZo8EgIzO0-uMKxQ&t=2024-02-22T22%3A26%3A17.390Z" alt="Dormitor" onclick="window.location.href='/mobila-dormitor';" ontouchstart="window.location.href='/mobila-dormitor';">
      <figcaption>Dormitor</figcaption>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </figure>

    <figure style ="margin-bottom: 20px">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/index/Living.jpg?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9pbmRleC9MaXZpbmcuanBnIiwiaWF0IjoxNzA4NjQwODAzLCJleHAiOjMxNTUyNzcxMDQ4MDN9.MoNYrDS6s84nJ6J-CLK8Lla8wCFjTRvt6W1fCl2qoDA&t=2024-02-22T22%3A26%3A44.500Z" alt="Living" onclick="window.location.href='/mobila-living';" ontouchstart="window.location.href='/mobila-living';">
      <figcaption>Living</figcaption>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </figure>
    <div style="flex-basis: 100%; height: 0;"></div> <!-- this will force wrapping to the next line -->
    <figure style ="margin-bottom: 20px">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/index/Dormitor.jpg?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9pbmRleC9Eb3JtaXRvci5qcGciLCJpYXQiOjE3MDg2NDA3NzYsImV4cCI6MzE1NTI3NzEwNDc3Nn0.LQao52pUQp4-CPqNf0qt7SsLgQ1zZo8EgIzO0-uMKxQ&t=2024-02-22T22%3A26%3A17.390Z" alt="Baie"onclick="window.location.href='/baie';" ontouchstart="window.location.href='/baie';">
      <figcaption>Baie</figcaption>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </figure>

    <figure style ="margin-bottom: 20px">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/index/Living.jpg?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9pbmRleC9MaXZpbmcuanBnIiwiaWF0IjoxNzA4NjQwODAzLCJleHAiOjMxNTUyNzcxMDQ4MDN9.MoNYrDS6s84nJ6J-CLK8Lla8wCFjTRvt6W1fCl2qoDA&t=2024-02-22T22%3A26%3A44.500Z" alt="Bucatarie" onclick="window.location.href='/accesorii-bucatarie';" ontouchstart="window.location.href='/accesorii-bucatarie';">
      <figcaption>Bucatarie</figcaption>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </figure>
    <div style="flex-basis: 100%; height: 0;"></div>; <!-- this will force wrapping to the next line -->

  </div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
