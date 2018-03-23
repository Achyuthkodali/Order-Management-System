<?php
  session_start();
  include 'connect.php';
?>
<!doctype html>
<html>
<head>
<title>Products</title>
<link href="styles/products_style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainWrapper">
  <header> 
    <div id="logo">
     <img src="logoImage.png" alt="sample logo">  
    </div>
    <div id="headerLinks"><a href="Login.php" title="Login/Register">Login</a>
  <section id="offer"> 
    <h2>OFFER 50%</h2>
    <p>Cool offers are waiting for you</p>
  </section>
  <div id="content">
    <section class="sidebar"> 
      <input type="text"  id="search" placeholder="search">
      <div id="menubar">
        <nav class="menu">
          <h2>MENU ITEM 1 </h2>
          <hr>
          <ul>
            <li><a href="#" title="Link">Link 1</a></li>
            <li><a href="#" title="Link">Link 2</a></li>
            <li><a href="#" title="Link">Link 3</a></li>
            <li class="notimp"><a href="#"  title="Link">Link 4</a></li>
          </ul>
        </nav>
        <nav class="menu">
          <h2>MENU ITEM 2 </h2>
          <hr>
          <ul>
            <li><a href="#" title="Link">Link 1</a></li>
            <li><a href="#" title="Link">Link 2</a></li>
            <li><a href="#" title="Link">Link 3</a></li>
            <li class="notimp"><a href="#" title="Link">Link 4</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="mainContent">
      <div class="productRow">
        <article class="productInfo">
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder </p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"> 
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
      <div class="productRow"> 
          <article class="productInfo"> 
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
      <div class="productRow">
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">$50</p>
          <p class="productContent">Content holder</p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
    </section>
  </div>
  <footer> 
    <div>
      <p></p>
    </div>
    <div>
      <p></p>
    </div>
    <div class="footerlinks">
      <p><a href="#" title="Link">Link 1 </a></p>
      <p><a href="#" title="Link">Link 2</a></p>
      <p><a href="#" title="Link">Link 3</a></p>
    </div>
  </footer>
</div>
</body>
</html>
