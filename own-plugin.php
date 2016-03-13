<?php
	/*
		Plugin Name: SchokoDB Plugin
		Author: Daniel M.
		Version: 1.0
		Description: Ein Plugin fuer die SchokoDB
	*/
	
	/**
		* Funktion um alle Produkte auszugeben.
		*
		* Gibt alle Produkte der Schokofabrik mit horizontalen Trennlinien zurueck.
		* @return Bezeichnung aller Produkte gefolgt von einem "<br><hr><br>".
	*/
	function schokoProdukte_func(){
        global $wpdb;
        ob_start();
		
        $res = $wpdb->get_results("select * from Produkt");
		
        $text = '';
        foreach($res as $r) {
			echo $r->bezeichnung;
		?>
		<br>
		<hr>
		<?php
			echo '<br>';
		}
		
        return ob_get_clean();
	}
	
add_shortcode('schokoProdukte','schokoProdukte_func');