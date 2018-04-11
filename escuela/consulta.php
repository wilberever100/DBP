<?php
	include "SchoolPage.php";
	
	class Consulta extends SchoolPage{
		public function printBody() {
			$text = "<div class='formulario'>";
			$text .= "<h2>Consulta de curso</h2>";
			$text .= "<form action='consulta.php' method='POST'>";
			$text .= "T&iacute;tulo <input type='text' name='titulo'> <br>";
			$text .= "A&ntilde;o <select name='anho''>";
			$text .= "<option></option>";
			$text .= "<option value='2016a'>Primer Semestre</option>";
			$text .= "<option value='2016b'>Segundo Semestre</option>";
			$text .= "</select><br>";
			$text .= "<input type='submit'>";
			$text .= "</form>";
			$text .= "</div>";
			
			$tmpTitulo = $_POST["titulo"];
			$tmpAnho = $_POST["anho"];
			$text .= "<div class='resultado'>";
			$busquedaRetornoValor = false;
			if( isset($tmpTitulo) && $tmpTitulo != "") {
				$text .= "Buscaste por: ".$tmpTitulo."<br>";
				$busquedaRetornoValor = true;
			}
			if( isset($tmpAnho) && $tmpAnho != ""){
				$text .= "Buscaste en el semestre: ".$tmpAnho."<br>";
				$busquedaRetornoValor = true;
			}
			
			if( $busquedaRetornoValor){
				$text .= "<p>(Disculpe, aun no implementamos esa funcionalidad.)</p>";
			}
			
			$text .= "</div>";
				
			return $text;
		}
	}
	
	$consulta = new Consulta("Consulta de cursos");
	$consulta->printPage();
	
?>
