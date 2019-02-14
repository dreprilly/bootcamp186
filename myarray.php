<?php

	//Array
	$name = "arrizaqu";
	$age = 17;
	
	//setting index
	$data = array();
	$data[0] = $name;
	$data[1] = $age;
	$data[2] = new DateTime();
	$data[3] = array();
	
	//automatically
	$data2 = array(
		0 => 'jakarta',
		1 => 'surabaya',
		2 => 'bandung'
	);
	
	$countries = array(
		'Indonesia' => array(
			0 => 'jakarta',
			1 => 'bandung'
		),
		'Amerika' => array(
			0 => 'New york',
			1 => 'LA'
		)
	);
	
	$values = array(1,2,3,4,5);
	$cities = array('jakarta', 'bandung');
	
	//array untuk struktur data
	$employee = array(
		'nama' => null,
		'alamat' => null,
		'email' => null
	);
	
	$employee['nama'] = 'arrizaqu';
	$employee['alamat'] = 'seputih banyak';
	$employee['email'] = 'arrizaqu@yahoo.com';
	
	//object -> {}, array -> [] 
	echo "<pre>";
		var_dump($employee);
	echo "</pre>";
	
	
	
	