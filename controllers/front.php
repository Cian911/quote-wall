<?php

class Front extends Controller {

	protected $data;

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->data = $this->getQuotes();

		$this->view->render('front/index', $this->data);
	}

	public function addQuote() {
		if ( isset($_POST) ) {
			$author = $this->cleanInput( $_POST['author'] );
			$title  = $this->cleanInput( $_POST['title'] );
			$quote 	= $this->cleanInput( $_POST['quote'] );

			$data = array(
				'author' 	=> $author,
				'title'		=> $title,
				'text' 		=> $quote
			);

			$result = $this->model->addQuote( $data );

			if ( $result ) {
				header('Location: /quote_wall/');
			} else {
				return $error = "Something went wrong adding your quote";
			}
		}
	}

	public function getQuotes() {
		return $data = $this->model->getQuotes();
	}

	private function cleanInput( $input ) {
		$input = strip_tags( $input );
		$input = htmlentities( $input );

		return $input;
	}

}
