<!DOCTYPE html>
<html>
  <head>
    <title>path.</title>
    <link rel="shortcut icon" type="image/png" href="icon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>

  	<div id="sidebar">
  		<h2 id="sidebar-title">path.</h2><img id="hamburger" onclick="closesidebar()" src="hamburger.png">
  		<div class="side-nav-bar"><a>Home</a></div>
  		<div class="side-nav-bar"><a>Places</a></div>
  		<div class="side-nav-bar"><a>Routes</a></div>
  		<div class="side-nav-bar"><a>Flights</a></div>
  		<div class="side-nav-bar"><a>Bookings</a></div>
  		<div id="bottom" class="side-nav-bar"><a>Concierge</a></div>
  	</div>

  	<div id="content">
      <form method="get">
  		  <input type="text" id="searchbar" placeholder="Search...">
      </form>
  		<div style="vertical-align: center;">
        <h2 id="yourplaces-title">Your Places</h2><div style="display: inline-block;"><img id="plus-button" src="plus-button.png"></div>
      </div>

  		<div id="places">