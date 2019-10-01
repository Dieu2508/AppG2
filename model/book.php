<?php 
	class book{
		var $sprice;
		var $title;
		var $author;
		var $year;
		function __construct ($sprice, $title, $author, $year){
			
			$this->sprice = $sprice;
			$this->title = $title;
			$this->author = $author;
			$this->year = $year;

		}
		function display(){
			echo 'Price:'. $this->sprice . "<br>";
			echo 'title:'. $this->title . "<br>";
			echo 'author:'. $this->author . "<br>";
			echo 'year:'. $this->year . "<br>";
		}
		 static function getList(){
	    	$listBook = array();
	    	array_push($listBook, new book(50,"OOP in PHP","Ndungithue",2019) );
	    	array_push($listBook, new book(51,"OOP in jav","ddas",2019) );
	    	array_push($listBook, new book(52,"OOP in c#","dddd",2019) );
	    	array_push($listBook, new book(53,"OOP in python","sdas",2019) );
	    	array_push($listBook, new book(54,"OOP in ruby","asdas",2019) );
	    	return $listBook;
	    }
	}
 ?>