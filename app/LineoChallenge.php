<?php
/*
multiplos 3 -> Lineo
multiplos 5 -> IT
multiplo 3 y 5 -> Lineanos

*/

namespace App;

class LineoChallenge{

	public function _construct(){
		echo "Lineo Challenge - Israel Jensen C.";
	}

	public function verMultiplo($inicio = 1, $fin = 100){
		$array_resp = array();
		for ($i = $inicio; $i <= $fin; $i++){
			$mult_3 = $i%3;
			$mult_5 = $i%5;
			switch (true) {
				case  (($mult_3 == 0)&&($mult_5 == 0)):
					$array_resp[$i] = "Lineanos";			
					break;
				case  (($mult_3 != 0)&&($mult_5 == 0)):
					$array_resp[$i] = "IT";
					break;	
				case  (($mult_3 == 0)&&($mult_5 != 0)):
					$array_resp[$i] = "Lineo";
					break;		
				case  (($mult_3 != 0)&&($mult_5 != 0)):
					$array_resp[$i] = $i;
					break;						
			}
		}
		return json_encode($array_resp); 
	}
}
	/*
	$verMulti = new LineoChallenge;
	echo $verMulti->verMultiplo(1,100);
	*/
?>
