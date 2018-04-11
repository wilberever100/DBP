<?php

include 'PageTemplate.php';

abstract class SchoolPage extends PageTemplate{
	
	public function SchoolPage( $newTitle='') {
		$this->title = $newTitle;
	}
	public function printCabecera(){
		$text = "<div class='variable'>";
      	$text = "<div id='nombre'>Paolo Guerrero</div>";
      	$text = "<div id='alias'>El Depredador</div>";
      	$text = "<div id='email'>guerrero_el_9@noucsp.edu.pe</div>";
		$text = "</div>";

		$text = "<div id='cabecera' class='bloque'>";
      	$text = "<h1>Perfil de Guerrero</h1>";
      	$text = "<h2>El Depredador</h2>";
		$text = "<button class='btn1'>Fade out</button>";
	}
	public function printHeader(){
		$text = "<head>"."\n";
		$text .= '<title>'.$this->title.'</title>'."\n";
		$text .= "<link rel='stylesheet' type='text/css' href='css/style.css'>";
		$text .= '</head>'."\n";
		return $text;
	}
	
	public function printFooter($autor=""){
		$text = "<div class='clear'></div>";
		$text .= "<hr>";
		$text .= "<center> <h1>".$autor."</h1> </center>";
		return $text;
	}
	
	public function printMenu(){
		$text = "<table>";
		$links = array(
					"MENU" => '#', 
					"Home" => "index.php", 
					"Consulta" => "consulta.php",
					"Notas"=>"notas.php");
		foreach( $links as $name => $link) {
			$text .= "<tr><td><div class='fakeButton'>
						<a href='$link'>".$name."</a>
						</div></td></tr>";
		}
		$text .= "</table>";
		return $text;
	}	
}
?>
