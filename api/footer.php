<!DOCTYPE html>
<html>
<head>
	<style type="">
		@import url("https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@300&family=Rubik:wght@400;500;700&display=swap");
		*, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 100%;
}

body {
  font-family: "Rubik", sans-serif;
  margin: 0;
  display: grid;
  grid-template-rows: auto 1fr auto;
  font-size: 14px;
  background-color: #f4f4f4;
  align-items: start;
  min-height: 100vh;
  box-sizing: border-box;
}

.footer {
  position: relative;
  bottom: 0;
  width: 100%;
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: #2f2f2f;
  background-color: #fff;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
}



.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgb(33, 33, 33, 0.07);
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
  flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}


.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}

a {
  text-decoration: none;
  color: var(--dark);
  font-weight: 400;
  border-bottom: 1px solid var(--dark);
  margin-bottom: 0.5rem;
  display: inline-flex;
}
a:hover {
  border-bottom: 1px solid transparent;
}
ul {
  list-style-type: none;
  padding: 0;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}
	</style>
</head>
<body>
<footer class="footer">  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Online</a>
        </li>

        <li>
          <a href="#">Print</a>
        </li>
            
        <li>
          <a href="#">Alternative Ads</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#" class="c-link">Sitemap</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2024 Pravalia cu mobila. All rights reserved.</p>
    

  </div>
</body>
</html>
