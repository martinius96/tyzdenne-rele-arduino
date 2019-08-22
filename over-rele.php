<?php 
			$rele1 = file_get_contents("arduino1/rele1.txt");
			$cas1rele1s = file_get_contents("values/cas1rele1.txt");
			$cas2rele1s = file_get_contents("values/cas2rele1.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele1s)&&($teraz<=$cas2rele1s)OR($teraz<=$cas1rele1s)&&($teraz>=$cas2rele1s)){
			  	if($rele1!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele1.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele1!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele1.txt', "VYP");			
				}
				
			  }
        
        
        
        	$rele2 = file_get_contents("arduino1/rele2.txt");
			$cas1rele2s = file_get_contents("values/cas1rele2.txt");
			$cas2rele2s = file_get_contents("values/cas2rele2.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele2s)&&($teraz<=$cas2rele2s)OR($teraz<=$cas1rele2s)&&($teraz>=$cas2rele2s)){
			  	if($rele2!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele2.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele2!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele2.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        	$rele3 = file_get_contents("arduino1/rele3.txt");
			$cas1rele3s = file_get_contents("values/cas1rele3.txt");
			$cas2rele3s = file_get_contents("values/cas2rele3.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele3s)&&($teraz<=$cas2rele3s)OR($teraz<=$cas1rele3s)&&($teraz>=$cas2rele3s)){
			  	if($rele3!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele3.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele3!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele3.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        	$rele4 = file_get_contents("arduino1/rele4.txt");
			$cas1rele4s = file_get_contents("values/cas1rele4.txt");
			$cas2rele4s = file_get_contents("values/cas2rele4.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele4s)&&($teraz<=$cas2rele4s)OR($teraz<=$cas1rele4s)&&($teraz>=$cas2rele4s)){
			  	if($rele4!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele4.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele4!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele4.txt', "VYP");			
				}
				
			  }
        
        
        
        
        	$rele5 = file_get_contents("arduino1/rele5.txt");
			$cas1rele5s = file_get_contents("values/cas1rele5.txt");
			$cas2rele5s = file_get_contents("values/cas2rele5.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele5s)&&($teraz<=$cas2rele5s)OR($teraz<=$cas1rele5s)&&($teraz>=$cas2rele5s)){
			  	if($rele5!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele5.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele5!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele5.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        	$rele6 = file_get_contents("arduino1/rele6.txt");
			$cas1rele6s = file_get_contents("values/cas1rele6.txt");
			$cas2rele6s = file_get_contents("values/cas2rele6.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele6s)&&($teraz<=$cas2rele6s)OR($teraz<=$cas1rele6s)&&($teraz>=$cas2rele6s)){
			  	if($rele6!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele6.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele6!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele6.txt', "VYP");			
				}
				
			  }
        
        
        
        
        	$rele7 = file_get_contents("arduino1/rele7.txt");
			$cas1rele7s = file_get_contents("values/cas1rele7.txt");
			$cas2rele7s = file_get_contents("values/cas2rele7.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele7s)&&($teraz<=$cas2rele7s)OR($teraz<=$cas1rele7s)&&($teraz>=$cas2rele7s)){
			  	if($rele7!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele7.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele7!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele7.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        	$rele8 = file_get_contents("arduino1/rele8.txt");
			$cas1rele8s = file_get_contents("values/cas1rele8.txt");
			$cas2rele8s = file_get_contents("values/cas2rele8.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele8s)&&($teraz<=$cas2rele8s)OR($teraz<=$cas1rele8s)&&($teraz>=$cas2rele8s)){
			  	if($rele8!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele8.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele8!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele8.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        	$rele9 = file_get_contents("arduino1/rele9.txt");
			$cas1rele9s = file_get_contents("values/cas1rele9.txt");
			$cas2rele9s = file_get_contents("values/cas2rele9.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele9s)&&($teraz<=$cas2rele9s)OR($teraz<=$cas1rele9s)&&($teraz>=$cas2rele9s)){
			  	if($rele9!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele9.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele9!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele9.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        
        	$rele10 = file_get_contents("arduino1/rele10.txt");
			$cas1rele10s = file_get_contents("values/cas1rele10.txt");
			$cas2rele10s = file_get_contents("values/cas2rele10.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele10s)&&($teraz<=$cas2rele10s)OR($teraz<=$cas1rele10s)&&($teraz>=$cas2rele10s)){
			  	if($rele10!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele10.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele10!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele10.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        	$rele11 = file_get_contents("arduino1/rele11.txt");
			$cas1rele11s = file_get_contents("values/cas1rele11.txt");
			$cas2rele11s = file_get_contents("values/cas2rele11.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele11s)&&($teraz<=$cas2rele11s)OR($teraz<=$cas1rele11s)&&($teraz>=$cas2rele11s)){
			  	if($rele11!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele11.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele11!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele11.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        
        
        	$rele12 = file_get_contents("arduino1/rele12.txt");
			$cas1rele12s = file_get_contents("values/cas1rele12.txt");
			$cas2rele12s = file_get_contents("values/cas2rele12.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele12s)&&($teraz<=$cas2rele12s)OR($teraz<=$cas1rele12s)&&($teraz>=$cas2rele12s)){
			  	if($rele12!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele12.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele12!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele12.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        
        	$rele13 = file_get_contents("arduino1/rele13.txt");
			$cas1rele13s = file_get_contents("values/cas1rele13.txt");
			$cas2rele13s = file_get_contents("values/cas2rele13.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele13s)&&($teraz<=$cas2rele13s)OR($teraz<=$cas1rele13s)&&($teraz>=$cas2rele13s)){
			  	if($rele13!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele13.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele13!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele13.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        
        	$rele14 = file_get_contents("arduino1/rele14.txt");
			$cas1rele14s = file_get_contents("values/cas1rele14.txt");
			$cas2rele14s = file_get_contents("values/cas2rele14.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele14s)&&($teraz<=$cas2rele14s)OR($teraz<=$cas1rele14s)&&($teraz>=$cas2rele14s)){
			  	if($rele14!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele14.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele14!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele14.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
        	$rele15 = file_get_contents("arduino1/rele15.txt");
			$cas1rele15s = file_get_contents("values/cas1rele15.txt");
			$cas2rele15s = file_get_contents("values/cas2rele15.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele15s)&&($teraz<=$cas2rele15s)OR($teraz<=$cas1rele15s)&&($teraz>=$cas2rele15s)){
			  	if($rele15!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele15.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele15!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele15.txt', "VYP");			
				}
				
			  }
        
        
        
        
        
        
         	$rele16 = file_get_contents("arduino1/rele16.txt");
			$cas1rele16s = file_get_contents("values/cas1rele16.txt");
			$cas2rele16s = file_get_contents("values/cas2rele16.txt");	
			  $teraz = date("H:i");
			  if(($teraz>=$cas1rele16s)&&($teraz<=$cas2rele16s)OR($teraz<=$cas1rele16s)&&($teraz>=$cas2rele16s)){
			  	if($rele16!="ZAP"){
					file_put_contents(__DIR__ . '/arduino1/rele16.txt', "ZAP");			
				}
				
				
				
			  } else{
			  	if($rele16!="VYP"){
					file_put_contents(__DIR__ . '/arduino1/rele16.txt', "VYP");			
				}
				
			  }
			  ?>