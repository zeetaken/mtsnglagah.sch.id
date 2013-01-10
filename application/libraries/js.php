<?php
    
class Js {
	
	function data_ajax($ajax)
	   {
		    $a = explode('&' , $ajax);
			$i = 0;
			while ($i < count($a)) {
				$b = explode('=', $a[$i]);
				$data[htmlspecialchars(urldecode($b[0]))]= htmlspecialchars(urldecode($b[1]));
				$i++;
			}
			
			return $data;
	   }		
}
