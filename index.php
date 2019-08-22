<?php	error_reporting(0);
	session_start(); ?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" charset=UTF-8">
    <title>Webaplikácia - Ovládanie relé cez internet</title>

    
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta charset="UTF-8">
  <meta name="description" content="Ovládanie relé cez webaplikáciu. Arduino alebo NodeMCU komunikujte s webstránkou a na základe odpovedí ovláda 8 relé výstupov, ktoré spínajú 230V spotrebiče do max 10A.">
  <meta name="keywords" content="relé, Arduino, NodeMCU, ovládanie, cez, internet, inteligentný, dom, webaplikácia, z netu, z webu, webstránka, txt, domov">
  <meta name="author" content="Martin Chlebovec">
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="stylesheet" href="css/misc.css">
	<meta name="robots" content="index, follow">
	<link id="pre-load-login-css" rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
</head>

<body class="light-mode">



  
<div class="login-container">

    <div class="login-container__login-bg">
    </div>
    <div class="login-container__logo-container">
       
    
     
    </div>
    <div class="login-container__login-window">
        <div class="login-window__icon-container">
            <img class="icon-container__img" src="icon.png">
        </div>
        
        
   
           <?php    
      error_reporting(0);
session_start();
	
	
	if ($_SESSION['login']===true){?>
<form class="login-window__login-form">


        <center>
		<h2><font color="red">Používateľ stále prihlásený!</font></h2>
		
		
		
		
		
		<a href="system.php" class="btn btn-success">Späť do administrácie</a>
		<br><br>
		<a href="logout.php" class="btn btn-danger">Odhlásiť sa</a>
       
        </form>
		 
	
	  </center>
		<?php
		
		
	}else{
      if(isset($_POST['odoslat'])){
    $username = $_POST['username'];
    $password = $_POST['password']; 
	  
    $username = sha1($username);
    $password = sha1($password);
    
    $ulozene_meno = file_get_contents(__DIR__ . '/meno1.txt');
    $ulozene_heslo = file_get_contents(__DIR__ . '/heslo1.txt');
    
        if($username == $ulozene_meno && $password == $ulozene_heslo){
          $_SESSION['login'] = true;
		  header('LOCATION: system.php'); die();
        }else{
           echo "<center>Údaje nie sú správne!</center>";
    }
        }

	
	?>
<center>
	<form class="login-window__login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="login-form__title">Ovládanie relé</div>	
        <input id="username" name="username" placeholder="Užívateľské meno" type="text" class="login-form__username" autocorrect="off" autocapitalize="off" spellcheck="false" required>
        <input id="password" name="password" placeholder="Heslo" type="password" class="login-form__password" required>
        
        
        <br>
        <button type="submit" name="odoslat" class="login-form__connect-button">PRIHLÁSIŤ</button>
       
        </form>
	<?php  }  ?>
        
        
           
  
     
  
     
     

        <div class="login-window__loader-container hidden">
            <div class="loader-container__spinner"></div>
            <div class="loader-container__text-container">
                <div class="text-container__title"></div>
                <div class="text-container__subtitle"></div>
            </div>
        </div>
    </div>






</body></html>
