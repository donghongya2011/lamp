<?php
	$a = array('deployment'=>array(1,2,3,4,5,6));
	$b = $results = array(
					'status' => 200,
					'msg' => 'input params error!',
					);
	$c = array(
			'status' => 200,
			'prop_info' => array(
				'prop_id' => 167,
				'prop_status' => 1,
				'comm_id' => 123,
				'title' => 'welcome to anjuke',
				'utype' => 1,
				'area' => 11,
				'rtype' => 1,
				'share' => 1,
				'pay' => 2334,
				'ptype' => 2,
				'room' => 2,
				'hall' => 1,
				'toilet' => 2,
				'fitment' => 1,
				'orient' => 2,
				'floor' => 1,
				'floors' => 11,
				'desc' => 'The house is good!'
				)
			);
	$d = array('prop_ids'=>'1,2,3,4');
	print_r(json_encode($d));

