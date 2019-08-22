
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
    /* Remove the navbar's default margin-bottom and rounded borders */ 
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
		
			input[type=checkbox] {
				display: none;
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
 <li><a  href="system.php">Prehľad</a></li>
  <li><a href="scheduler.php">Scheduler</a></li>
  <li><a class="active" href="zmenaloginu.php">Zmena loginu</a></li>
    <li><a href="kody.php">Arduino kódy</a></li>
  <li style="float:right;"><a href="logout.php">Odhlásiť sa</a></li>
</ul>
  
<div class="container text-center">    

  <div class="row">
  <hr>
  <center><h2>Zmena prihlasovacích údajov</h2></center>
		<div class="col-sm-12">
		<hr>
		 <?php  

		 if(isset($_POST['zmenaudajov1'])){
       $meno1 = $_POST['meno1'];    	   
	     $meno1 = trim( $meno1 );
   	   $meno1= htmlspecialchars( $meno1, ENT_QUOTES );
	     $heslo1 = $_POST['heslo1']; 
       $heslo1 = trim( $heslo1 );
  	   $heslo1 = htmlspecialchars( $heslo1, ENT_QUOTES );  
      file_put_contents(__DIR__ . '/meno1.txt', sha1($meno1));
      file_put_contents(__DIR__ . '/heslo1.txt', sha1($heslo1));
  
  
  
  	echo'<b>Vaše uživatelské meno a heslo byli zmenené!</b> <br>';
	echo"Uživateľské meno: <font color='green'>".$meno1."</font><br>";
	echo"Uživateľské heslo: <font color='green'>".$heslo1."</font><br>";
	echo"Hash mena: <font color='red'>".sha1($meno1)."</font><br>";
	echo"Hash hesla: <font color='red'>".sha1($heslo1)."</font>";
  }
  ?>
	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input name="meno1" style="text-align: center" placeholder="Meno" type="text" >
				 <input name="heslo1" style="text-align: center" placeholder="Heslo" type="text" ><br><br>
               <input type="submit" name="zmenaudajov1" class="btn btn-success" value="Zmeniť údaje"></form>   
	</div></div><br>

<footer class="container-fluid text-center">
  <p>Webaplikácia - ovládanie relé cez internet - Multiuser aplikácia</p>
</footer>

</body>
</html>

				
				<?php 
				}
 else{
	
	header('LOCATION: index.php'); 	
	
}
?>
