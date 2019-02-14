<?php
class Employee{
	
	private $nip;
	private $name;
	private $email;
	
	//constructor
	//akan dijalankan otomatis ketika terjadi instansiasi
	public function __construct($name, $email, $nip){
		$this->nip = $nip;
		$this->name = $name;
		$this->email = $email;
	}
	
	public function getInfo(){
		echo "hallo ". $this->name. ", email: ". 
						$this->email. ", nip : ". $this->nip;
	}
}
 
 //call getInfo
 $emp = new Employee('arrizaqu', 'arrizaqu@yahoo.com','075410033'); //instansiasi // getInstance
 $emp->getInfo();
 
  echo "<pre>";
	var_dump($emp);
 echo "</pre>";