<?php


		$result = rand(1,100);
		if($result > 30)
		{
		    $rand = rand(1,100);
                    if($rand>30)
		    {
			$result = rand(1,30);
		    }
		}

 		if ($result>0 && $result<=30) {
 			$reward = "vip一年";
 			$result = 0;
 		}else if($result>30 && $result<=40){
 			$reward = "现金1000元";
 			$result = 2;
 		}else if($result>40 && $result<=80){
 			$reward = "现金100元";
 			$result = 3;
 		}else if( $result==81){
 			$reward = "话费50元";
 			$result = 4;
 		}else if($result>81 && $result<=85){
 			$reward = "现金10000元";
 			$result = 5;
 		}else if($result>85 && $result<101){
 			$reward = "现金500元";
 			$result = 6;
 		}

 		echo $result;
