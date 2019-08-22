<?php
$stav = file_get_contents("arduino1/rele6.txt");
if($stav=="ZAP"){
echo '<div style="background-color: #33ff33; border-style: solid; border-color: black; border-width: 1px;">ON</div>Relé 6';	
}else if($stav=="VYP"){
echo '<div style="background-color: #ff0000; border-style: solid; border-color: black; border-width: 1px;">OFF</div>Relé 6';	
}

						   
						   ?>