<?php 

include_once('../Model/Book.php');


/**
 * 
 */
class BookController {
	 // public $modelBook;	
 
  //    public function __construct()  {  
  //         $this->modelBook = new Book();
  //    }

	function book_id(){
		if(isset($_GET['sid'])){
			$modelBook=new Book();
			$bookDetail=$modelBook->getDetailBook($_GET['sid']);
			include_once('../View/BookView.php');
		}else{			
			$modelBook=new Book();
			$bookList=$modelBook->getAllBook();
			include_once('../View/BookList.php');
		}


	}
}

$c=new BookController();
$c->book_id();



?>