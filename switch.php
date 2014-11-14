<?php
	function a($a){
		switch($a){
			case 1 || 3:
				echo 1;
				break;
			case 2:
                echo 2;
                break;
		}
	}

    a(3);
