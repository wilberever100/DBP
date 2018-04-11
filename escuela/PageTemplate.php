<?php
abstract class PageTemplate {
	abstract protected function printHeader();
	abstract protected function printFooter();
	abstract protected function printMenu();
	abstract protected function printBody();
	abstract protected function printCabecera();
	protected $title = 'PageTemplate';
	
	public function printPage() {
		$text = "<html>";
		$text .= $this->printHeader();
		
		$text .= "<body>";
				$text .= "<div id='cabecera'>";
					$text .= $this->printCabecera();
				$text .= "</div>";
				$text .= "<div id='menu'>";
					$text .= $this->printMenu();
				$text .= "</div>";
				$text .= "<div id='main'>";
					$text .= $this->printBody();
				$text .= "</div>";
		
				$text .= "<div id = 'footer'>";
					$text .= $this->printFooter();
				$text .= "</div>";
		$text .= "</body>";
		
		$text .= "</html>";
		echo $text;
	}
	
}
?>
