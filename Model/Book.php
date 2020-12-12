<?php 
include_once('BookModel.php');

class Book{

	public function __construct(){
	}

	public function getAllBook(){
		return array(
			"1"=>new BookModel(1,'Hentai',30,'truyen nhat bon'),
			"2"=>new BookModel(2,'kim binh mai',30,'truyen nhat bon'),
			"3"=>new BookModel(3,'jav',30,'truyen nhat bon'),
			"4"=>new BookModel(4,'han sieng',30,'truyen nhat bon')
		);
	}

	public function getDetailBook($sid){
		$allBook=$this->getAllBook();
		return $allBook[$sid];
	}


}




?>