<?php
error_reporting(0);
session_start();
  if ($_SESSION['login']===true){ ?>
<!DOCTYPE html>
<html lang="cz">
<head>
  <title>Webaplikácia - Ovládanie relé</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="icon.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', 'db50efe9fff280a17db52b82be221240cbbd3dbe');
</script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76290977-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-76290977-2');
</script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

.floatLeft { width: 50%; float: left; }
.floatRight {width: 50%; float: right; }
.container { overflow: hidden; }
			label {
				display: inline-block;
				width: 100px;
				height: 30px;
				border: 3px solid rgba(0,0,0,0.07);
				border-radius: 17px;
				position: relative;
				box-shadow:  inset 1px 1px 1px 1px rgba(0,0,0,0.4), 0px 0px 0px 1px rgba(0,0,0,0.1), 0px 0px 0px 2px rgba(0,0,0,0.1), 0px 0px 4px 2px rgba(0,0,0,0.07);
			}
		
	
			
			input:checked ~ a {
				left: 50%;
			}
			
			input:checked ~ div span {
				background-color: rgba(0,158,255,0.5);
			}
			
			label div {
			}
			
			label span {
				z-index: 1;
				position: absolute;
				display: inline-block;
				height: 28px;
				left: 0;
				width: 49%;
				border-radius: 15px 0px 0px 15px;
				border-color: rgba(0,0,0,0.1);
				border-style: solid;
				border-width: 1px 0px 1px 1px;
				background-color: rgba(200,200,200,0.5);
				background-image:-webkit-linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
				text-align: center;
				line-height: 30px;
				font-family: helvetica, sans-serif;
				font-size: 14px;
				font-weight: 800;
				color: #555;
				text-shadow: 0px 1px white;
				-webkit-transition: all 1.0s ease-in-out;
				-moz-transition: all 1.0s ease-in-out;
				transition: all 1.0s ease-in-out;
				

			}

			label span.no {

				left: 50%;	
				border-radius: 0px 15px 15px 0px;			
				border-width: 1px 1px 1px 0px;

			}
			
			.slider {
				display: inline-block;
				position: absolute;
				width: 50%;
				height: 28px;
				background-color: #efefef;
				left: 0%;
				border-radius: 30px;
				z-index: 2;
				border: 1px solid rgba(0,0,0,0.2);
				box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.1), 0px 1px 1px 0px rgba(0,0,0,0.2);
				-webkit-transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				transition: all 0.5s ease-in-out;

			}
			
			.slider:after, .slider:before {
				content: "";
				width: 30%;
				height: 25px;
				position: absolute;
				top: 2px;
				border-radius: 50%;
			}

			.slider:after {
				left: 15%;
				background-image:-webkit-linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
			}
			.slider:before {
				right: 15%;
				background-image:-webkit-linear-gradient(0deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
			}

			/* fluff */
			


			
			form {
				width: 250px;
				margin: 0px auto;
				margin-top: 20px;
				font-family: georgia, times, serif;
				box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.2);
				border-radius: 5px;
				padding: 25px;
				background-color: #fff;
			}
			
			fieldset {
				border: 1px solid #ccc;
				padding: 20px;
				text-align: center;
				border-radius: 3px;
				color: #666;
				margin-bottom: 20px;
			}

		
			h1 {
				background-color: rgba(0,158,255,0.5);
				margin: -25px -25px 25px -25px;
				padding: 10px;
				border-radius: 5px 5px 0px 0px;
				text-align: center;
				font-family: 'Helvetica Neue', Helvetica, sans-serif;
				font-weight: 500;
				letter-spacing: 1px;
				color: #fff;
				background-image: -webkit-linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
				text-shadow: 0px 2px 0px rgba(0,0,0,0.5);

			}
  </style>
</head>
<body>
<ul>
  <li><a class="active" href="system.php">Prehľad</a></li>
  <li><a href="scheduler.php">Scheduler</a></li>
  <li><a href="zmenaloginu.php">Zmena loginu</a></li>
    <li><a href="kody.php">Arduino kódy</a></li>
  <li style="float:right;"><a href="logout.php">Odhlásiť sa</a></li>
</ul>
   <center><h2>Arduino 1</h2></center>
<hr>
<div class="container text-center">    
			<?php 	  if(isset($_POST['zapisatrele1'])){
       $cas1rele1 = $_POST['cas1rele1']; 
	     $cas2rele1 = $_POST['cas2rele1']; 
		 file_put_contents(__DIR__ . '/values/cas1rele1.txt', $cas1rele1);
		 file_put_contents(__DIR__ . '/values/cas2rele1.txt', $cas2rele1);       
		echo '<center><b>Nastavené!</b></center>';
	
}
  if(isset($_POST['zapisatrele2'])){
       $cas1rele2 = $_POST['cas1rele2']; 
	     $cas2rele2 = $_POST['cas2rele2']; 
		 file_put_contents(__DIR__ . '/values/cas1rele2.txt', $cas1rele2);
		 file_put_contents(__DIR__ . '/values/cas2rele2.txt', $cas2rele2);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele3'])){
       $cas1rele3 = $_POST['cas1rele3']; 
	     $cas2rele3 = $_POST['cas2rele3']; 
		 file_put_contents(__DIR__ . '/values/cas1rele3.txt', $cas1rele3);
		 file_put_contents(__DIR__ . '/values/cas2rele3.txt', $cas2rele3);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele4'])){
       $cas1rele4 = $_POST['cas1rele4']; 
	     $cas2rele4 = $_POST['cas2rele4']; 
		 file_put_contents(__DIR__ . '/values/cas1rele4.txt', $cas1rele4);
		 file_put_contents(__DIR__ . '/values/cas2rele4.txt', $cas2rele4);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele5'])){
       $cas1rele5 = $_POST['cas1rele5']; 
	     $cas2rele5 = $_POST['cas2rele5']; 
		 file_put_contents(__DIR__ . '/values/cas1rele5.txt', $cas1rele5);
		 file_put_contents(__DIR__ . '/values/cas2rele5.txt', $cas2rele5);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele6'])){
       $cas1rele6 = $_POST['cas1rele6']; 
	     $cas2rele6 = $_POST['cas2rele6']; 
		 file_put_contents(__DIR__ . '/values/cas1rele6.txt', $cas1rele6);
		 file_put_contents(__DIR__ . '/values/cas2rele6.txt', $cas2rele6);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele7'])){
       $cas1rele7 = $_POST['cas1rele7']; 
	     $cas2rele7 = $_POST['cas2rele7']; 
		 file_put_contents(__DIR__ . '/values/cas1rele7.txt', $cas1rele7);
		 file_put_contents(__DIR__ . '/values/cas2rele7.txt', $cas2rele7);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele8'])){
       $cas1rele8 = $_POST['cas1rele8']; 
	     $cas2rele8 = $_POST['cas2rele8']; 
		 file_put_contents(__DIR__ . '/values/cas1rele8.txt', $cas1rele8);
		 file_put_contents(__DIR__ . '/values/cas2rele8.txt', $cas2rele8);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele9'])){
       $cas1rele9 = $_POST['cas1rele9']; 
	     $cas2rele9 = $_POST['cas2rele9']; 
		 file_put_contents(__DIR__ . '/values/cas1rele9.txt', $cas1rele9);
		 file_put_contents(__DIR__ . '/values/cas2rele9.txt', $cas2rele9);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele10'])){
       $cas1rele10 = $_POST['cas1rele10']; 
	     $cas2rele10 = $_POST['cas2rele10']; 
		 file_put_contents(__DIR__ . '/values/cas1rele10.txt', $cas1rele10);
		 file_put_contents(__DIR__ . '/values/cas2rele10.txt', $cas2rele10);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele11'])){
       $cas1rele11 = $_POST['cas1rele11']; 
	     $cas2rele11 = $_POST['cas2rele11']; 
		 file_put_contents(__DIR__ . '/values/cas1rele11.txt', $cas1rele11);
		 file_put_contents(__DIR__ . '/values/cas2rele11.txt', $cas2rele11);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele12'])){
       $cas1rele12 = $_POST['cas1rele12']; 
	     $cas2rele12 = $_POST['cas2rele12']; 
		 file_put_contents(__DIR__ . '/values/cas1rele12.txt', $cas1rele12);
		 file_put_contents(__DIR__ . '/values/cas2rele12.txt', $cas2rele12);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele13'])){
       $cas1rele13 = $_POST['cas1rele13']; 
	     $cas2rele13 = $_POST['cas2rele13']; 
		 file_put_contents(__DIR__ . '/values/cas1rele13.txt', $cas1rele13);
		 file_put_contents(__DIR__ . '/values/cas2rele13.txt', $cas2rele13);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele14'])){
       $cas1rele14 = $_POST['cas1rele14']; 
	     $cas2rele14 = $_POST['cas2rele14']; 
		 file_put_contents(__DIR__ . '/values/cas1rele14.txt', $cas1rele14);
		 file_put_contents(__DIR__ . '/values/cas2rele14.txt', $cas2rele14);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele15'])){
       $cas1rele15 = $_POST['cas1rele15']; 
	     $cas2rele15 = $_POST['cas2rele15']; 
		 file_put_contents(__DIR__ . '/values/cas1rele15.txt', $cas1rele15);
		 file_put_contents(__DIR__ . '/values/cas2rele15.txt', $cas2rele15);       
		echo '<center><b>Nastavené!</b></center>';
	
}
if(isset($_POST['zapisatrele16'])){
       $cas1rele16 = $_POST['cas1rele16']; 
	     $cas2rele16 = $_POST['cas2rele16']; 
		 file_put_contents(__DIR__ . '/values/cas1rele16.txt', $cas1rele16);
		 file_put_contents(__DIR__ . '/values/cas2rele16.txt', $cas2rele16);       
		echo '<center><b>Nastavené!</b></center>';
	
}
 
   ?>

            <div class="row">
               <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 1</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele1" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele1.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele1" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele1.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele1" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele1" class="btn btn-success" value="Zapísať">    </form>
                </div>
               <div class="col-sm-3"> 

				<form method="post" action="scheduler.php">
				<h2>Relé 2</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele2" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele2.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele2" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele2.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele2" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele2" class="btn btn-success" value="Zapísať">    </form>
                </div>
               <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 3</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele3" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele3.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele3" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele3.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele3" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele3" class="btn btn-success" value="Zapísať">    </form>
                </div>
                  <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 4</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele4" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele4.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele4" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele4.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele4" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele4" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 5</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele5" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele5.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele5" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele5.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele5" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele5" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 6</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele6" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele6.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele6" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele6.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele6" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele6" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 7</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele7" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele7.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele7" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele7.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele7" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele7" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 8</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele8" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele8.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele8" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele8.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele8" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele8" class="btn btn-success" value="Zapísať">    </form>
                </div>
                </div>
                 <div class="row">
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 9</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele9" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele9.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele9" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele9.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele9" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele9" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 10</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele10" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele10.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele10" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele10.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele10" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele10" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 11</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele11" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele11.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele11" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele11.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele11" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele11" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 12</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele12" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele12.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele12" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele12.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele12" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele12" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 13</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele13" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele13.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele13" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele13.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele13" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele13" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 14</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele14" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele14.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele14" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele14.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele14" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele14" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 15</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele15" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele15.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele15" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele15.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele15" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele15" class="btn btn-success" value="Zapísať">    </form>
                </div>
                 <div class="col-sm-3"> 
				<form method="post" action="scheduler.php">
				<h2>Relé 16</h2>
				<h2>Zapnutie medzi</h2>
             <b>HH:mm</b><br><input name="cas1rele16" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas1rele16.txt");?>" required><br>
			 <b>HH:mm</b><br><input name="cas2rele16" style="text-align: center" type="time" value="<?php echo file_get_contents("values/cas2rele16.txt");?>" required><br>
              <b>Týždenne: </b><input name="tyzdennerele16" type="checkbox" checked disabled><br>
			  <input type="submit" name="zapisatrele16" class="btn btn-success" value="Zapísať">    </form>
                </div>
        
 
    </div> 
     </div> 
    <div class="col-xs-6">
            <div class="row">
                <div class="col-xs-3" id="">
				
                </div>
                <div class="col-xs-3" id="">
				
                </div>
                <div class="col-xs-3" id="">
				
                </div>
                <div class="col-xs-3" id="">
                </div>
          </div>
    </div>
</div>		
</div>
<div class="container text-center">
<div class="row">
      <div class="col-xs-6">
            <div class="row">
                <div class="col-xs-3" id="">
                </div>
                <div class="col-xs-3" id="">

                </div>
                <div class="col-xs-3" id="">
				
                </div>
                <div class="col-xs-3" id="">
                </div>
          </div>
    </div> 
    <div class="col-xs-6">
            <div class="row">
                <div class="col-xs-3" id="">
                </div>
                <div class="col-xs-3" id="">
				
                </div>
                <div class="col-xs-3" id="">
				
                </div>
                <div class="col-xs-3" id="">
                </div>
          </div>
    </div>
	</div>
	</div>
	  
          </div>
    </div>
</div>					
</div>

</body>

</html>

				
				<?php 
				}else{
	
	header('LOCATION: index.php'); 	
	
}
?>
    