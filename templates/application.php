<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
    <!-- Page Wrapper -->
    <div id="page-wrapper">

      <!-- Header -->
      <header id="header" class="alt">
      	<h1><a href="index.html">Solid State</a></h1>
      	<nav>
      		<a href="#menu">Menu</a>
      	</nav>
      </header>

      <!-- Menu -->
      <nav id="menu">
      	<div class="inner">
      		<h2>Menu</h2>
      		<ul class="links">
      			<li><fb:login-button href="#" scope="public_profile,email,manage_pages" onlogin="checkLoginState();">Log In</fb:login-button></li>
      		</ul>
      		<a href="#" class="close">Close</a>
      	</div>
      </nav>

      <!-- Banner -->
      <section id="banner">
      	<div class="inner">
      		<div class="logo"><span class="icon fa-diamond"></span></div>
      		<h2><?php print($this->_['title']); ?></h2>

      		<p name="name"><?php if(isset($this->_['user'])) { echo ("Welcome " . $this->_['user']->name); } ?></p>
      	</div>
      </section>

      <!-- Here goes the app-content -->

      <?php echo $this->_['outlet']; ?>

      <!-- Here the content ends -->


      <!-- Footer goes here / TODO exchange with variable -->

      <section id="footer">
        <div class="inner">
          <h2 class="major">Get in touch</h2>
          <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
          <form method="post" action="#">
            <div class="field">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" />
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" />
            </div>
            <div class="field">
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="4"></textarea>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Send Message" /></li>
            </ul>
          </form>
          <ul class="contact">
            <li class="fa-home">
              Untitled Inc<br />
              1234 Somewhere Road Suite #2894<br />
              Nashville, TN 00000-0000
            </li>
            <li class="fa-phone">(000) 000-0000</li>
            <li class="fa-envelope"><a href="#">information@untitled.tld</a></li>
            <li class="fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
            <li class="fa-facebook"><a href="#">facebook.com/untitled-tld</a></li>
            <li class="fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
          </ul>
          <ul class="copyright">
            <li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>
        </div>
      </section>
			<form id='login' action="post" target="index.php?route=login" hidden>
				<input name="userid"></input>
				<input name="accessToken"></input>
				<input name="name"></input>
			</form>
    </div>
    <!-- /Footer End -->

    <!-- Scripts -->
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

		<script src="assets/js/facebook-test.js"></script>
		<script src="assets/js/route.js"></script>
		<script src="assets/js/db-interface.js"></script>
		<script src="assets/js/pages.js"></script>
		<script src="assets/js/templates.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
