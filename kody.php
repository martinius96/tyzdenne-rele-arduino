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
  <li><a href="zmenaloginu.php">Zmena loginu</a></li>
    <li><a class="active" href="kody.php">Arduino kódy</a></li>
  <li style="float:right;"><a href="logout.php">Odhlásiť sa</a></li>
</ul>
   <center><h2>Arduino 1</h2></center>
<pre>
#include &lt;avr\wdt.h> //kniznica watchdogu
#include &lt;SPI.h>                     //kniznica SPI
#include &lt;Ethernet.h>                //kniznica k ethernet shieldu

const int rele1 = 22; //rele 1 na pine D22
const int rele2 = 23; //rele 2 na pine D23
const int rele3 = 24; //rele 3 na pine D24
const int rele4 = 25; //rele 4 na pine D25
const int rele5 = 26; //rele 5 na pine D26
const int rele6 = 27; //rele 6 na pine D27
const int rele7 = 28; //rele 7 na pine D28
const int rele8 = 29; //rele 8 na pine D29

const int rele9 = 30; //rele 9 na pine D30
const int rele10 = 31; //rele 10 na pine D31
const int rele11 = 32; //rele 11 na pine D32
const int rele12 = 33; //rele 12 na pine D33
const int rele13 = 34; //rele 13 na pine D34
const int rele14 = 35; //rele 15 na pine D35
const int rele15 = 36; //rele 15 na pine D36
const int rele16 = 37; //rele 16 na pine D37

byte mac[] = { 0x20, 0x1A, 0x06, 0x75, 0x8C, 0xAA };
char server[] = "www.arduino.php5.sk";
IPAddress dnServer(192, 168, 1, 1);
IPAddress gateway(192, 168, 1, 1);
IPAddress subnet(255, 255, 255, 0);
IPAddress ip(192, 168, 1, 150);
EthernetClient client;

void setup() {
  pinMode(rele1, OUTPUT);
  pinMode(rele2, OUTPUT);
  pinMode(rele3, OUTPUT);
  pinMode(rele4, OUTPUT);
  pinMode(rele5, OUTPUT);
  pinMode(rele6, OUTPUT);
  pinMode(rele7, OUTPUT);
  pinMode(rele8, OUTPUT);

  pinMode(rele9, OUTPUT);
  pinMode(rele10, OUTPUT);
  pinMode(rele11, OUTPUT);
  pinMode(rele12, OUTPUT);
  pinMode(rele13, OUTPUT);
  pinMode(rele14, OUTPUT);
  pinMode(rele15, OUTPUT);
  pinMode(rele16, OUTPUT);

  Serial.begin(9600);
  if (Ethernet.begin(mac) == 0) {                  //V PRIPADE ZLYHANIA NASTAVENIA DHCP
    Serial.println("Chyba konfiguracie, manualne nastavenie");
    Ethernet.begin(mac, ip, dnServer, gateway, subnet);
    delay(500);
  }
  wdt_enable(WDTO_8S); //8 sekundovy watchdog
}

void loop() {
  wdt_reset();
  if (Ethernet.begin(mac) == 0) {
    Serial.println("Chyba konfiguracie, manualne nastavenie");
    Ethernet.begin(mac, ip, dnServer, gateway, subnet);
    wdt_reset();
    delay(500);
  }
  wdt_reset();
  aktualizuj_vystupy();
  wdt_reset();
  vystup_rele1();
  wdt_reset();
  vystup_rele2();
  wdt_reset();
  vystup_rele3();
  wdt_reset();
  vystup_rele4();
  wdt_reset();
  vystup_rele5();
  wdt_reset();
  vystup_rele6();
  wdt_reset();
  vystup_rele7();
  wdt_reset();
  vystup_rele8();
  wdt_reset();
  vystup_rele9();
  wdt_reset();
  vystup_rele10();
  wdt_reset();
  vystup_rele11();
  wdt_reset();
  vystup_rele12();
  wdt_reset();
  vystup_rele13();
  wdt_reset();
  vystup_rele14();
  wdt_reset();
  vystup_rele15();
  wdt_reset();
  vystup_rele16();
  for (int i = 0; i &lt;= 300; i++) {
    delay(1000);
    wdt_reset();
  }
}

void vystup_rele1() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele1.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 1 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele1, LOW);
      Serial.println("Zapinam rele 1");
    } else if (premenna == "VYP") {
      digitalWrite(rele1, HIGH);
      Serial.println("Vypinam rele 1");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 1");
  }
  client.stop();
}

void vystup_rele2() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele2.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 2 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele2, LOW);
      Serial.println("Zapinam rele 2");
    } else if (premenna == "VYP") {
      digitalWrite(rele2, HIGH);
      Serial.println("Vypinam rele 2");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 2");
  }
  client.stop();
}

void vystup_rele3() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele3.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 3 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele3, LOW);
      Serial.println("Zapinam rele 3");
    } else if (premenna == "VYP") {
      digitalWrite(rele3, HIGH);
      Serial.println("Vypinam rele 3");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 3");
  }
  client.stop();
}

void vystup_rele4() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele4.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 4 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele4, LOW);
      Serial.println("Zapinam rele 4");
    } else if (premenna == "VYP") {
      digitalWrite(rele4, HIGH);
      Serial.println("Vypinam rele 4");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 4");
  }
  client.stop();
}

void vystup_rele5() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele5.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 5 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele5, LOW);
      Serial.println("Zapinam rele 5");
    } else if (premenna == "VYP") {
      digitalWrite(rele5, HIGH);
      Serial.println("Vypinam rele 5");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 5");
  }
  client.stop();
}

void vystup_rele6() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele6.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 6 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele6, LOW);
      Serial.println("Zapinam rele 6");
    } else if (premenna == "VYP") {
      digitalWrite(rele6, HIGH);
      Serial.println("Vypinam rele 6");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 6");
  }
  client.stop();
}

void vystup_rele7() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele7.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 7 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele7, LOW);
      Serial.println("Zapinam rele 7");
    } else if (premenna == "VYP") {
      digitalWrite(rele7, HIGH);
      Serial.println("Vypinam rele 7");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 7");
  }
  client.stop();
}

void vystup_rele8() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele8.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 8 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele8, LOW);
      Serial.println("Zapinam rele 8");
    } else if (premenna == "VYP") {
      digitalWrite(rele8, HIGH);
      Serial.println("Vypinam rele 8");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 8");
  }
  client.stop();
}

void vystup_rele9() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele9.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 9 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele9, LOW);
      Serial.println("Zapinam rele 9");
    } else if (premenna == "VYP") {
      digitalWrite(rele9, HIGH);
      Serial.println("Vypinam rele 9");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 9");
  }
  client.stop();
}

void vystup_rele10() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele10.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 10 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele10, LOW);
      Serial.println("Zapinam rele 10");
    } else if (premenna == "VYP") {
      digitalWrite(rele10, HIGH);
      Serial.println("Vypinam rele 10");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 10");
  }
  client.stop();
}

void vystup_rele11() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele11.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 11 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele11, LOW);
      Serial.println("Zapinam rele 11");
    } else if (premenna == "VYP") {
      digitalWrite(rele11, HIGH);
      Serial.println("Vypinam rele 11");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 11");
  }
  client.stop();
}

void vystup_rele12() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele12.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 12 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele12, LOW);
      Serial.println("Zapinam rele 12");
    } else if (premenna == "VYP") {
      digitalWrite(rele12, HIGH);
      Serial.println("Vypinam rele 12");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 12");
  }
  client.stop();
}

void vystup_rele13() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele13.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 13 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele13, LOW);
      Serial.println("Zapinam rele 13");
    } else if (premenna == "VYP") {
      digitalWrite(rele13, HIGH);
      Serial.println("Vypinam rele 13");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 13");
  }
  client.stop();
}

void vystup_rele14() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele14.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 14 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele14, LOW);
      Serial.println("Zapinam rele 14");
    } else if (premenna == "VYP") {
      digitalWrite(rele14, HIGH);
      Serial.println("Vypinam rele 14");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 14");
  }
  client.stop();
}

void vystup_rele15() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele15.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 15 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele15, LOW);
      Serial.println("Zapinam rele 15");
    } else if (premenna == "VYP") {
      digitalWrite(rele15, HIGH);
      Serial.println("Vypinam rele 15");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 15");
  }
  client.stop();
}

void vystup_rele16() {
  if (client.connect(server, 80)) {
    client.println("GET /rele2/arduino1/rele16.txt HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Pripojenie k vystupu rele 16 uspesne");
    while (client.connected()) {
      String hlavicka = client.readStringUntil('\n');
      Serial.println(hlavicka);
      if (hlavicka == "\r") {
        break;
      }
    }
    String premenna = client.readStringUntil('\n');
    if (premenna == "ZAP") {
      digitalWrite(rele16, LOW);
      Serial.println("Zapinam rele 16");
    } else if (premenna == "VYP") {
      digitalWrite(rele16, HIGH);
      Serial.println("Vypinam rele 16");
    }
  } else {
    Serial.println("Neuspesne pripojenie pre ziskanie vystupu rele 16");
  }
  client.stop();
}
void aktualizuj_vystupy() {
  if (client.connect(server, 80)) {
    client.print("GET /rele2/over-rele.php");
    client.println(" HTTP/1.1");
    client.println("Host: www.arduino.php5.sk");
    client.println("Connection: close");
    client.println();
    Serial.println("Vystupy aktualizovane");
  } else {
    Serial.println("Neuspesne pripojenie pre aktualizaciu vystupov");
  }
  client.stop();
}
                 
</pre> 
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
    