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
		* Gibt alle Produkte der Schokofabrik in einer Tabelle zurueck.
		* @return Bezeichnung aller Produkte in einer Tabelle.
	*/
	function schokoProdukte_func(){
		
		//wenn eine globale Variable verwendet wird muss man diese deklarieren
        global $wpdb;
        ob_start();
		
        $res = $wpdb->get_results("select * from Produkt");
		
		echo '<table class="table-striped table-hover">';
        foreach($res as $r) {
		?>
		<tr>
			<td>
				<?php echo $r->bezeichnung; ?>
			</td>
			<td class="small">
				<?php echo $r->gewicht; ?>
			</td>
		</tr>
		<?php
		}
		echo '</table>';
		
        return ob_get_clean();
	}
	/**
		* Funktion um alle Kunden auszugeben.
		*
		* Gibt alle Kunden der Schokofabrik in einem Formular zurueck.
		* @return Bezeichnung aller Kunden in einem Formular.
	*/
	function schokoKunden_func(){
		global $wpdb;
        ob_start();
	?>
	Bitte ausw&auml;hlen:
	<form method="GET">
		<select name="kunde">
			<?php
				$kunden = $wpdb->get_results("select * from Kunde");
				foreach($kunden as $k){
					echo '<option value="'.$k->firmenname.'">'.$k->firmenname.'</option>';
				}
			?>
		</select>
		<input type="submit" value="Anzeigen" class="btn btn-default">
	</form>
	<?php
		if(isset($_REQUEST['kunde'])){
			$kundendaten = $wpdb->get_results($wpdb->prepare('select * from Kunde where firmenname = %s',$_REQUEST['kunde']));
			$kunde = $kundendaten[0];
			
			echo '<div class="well">Name: '.$kunde->firmenname.'<br>'.'Adresse: '.$kunde->adresse.'<br>'.'Telefonnummer: '.$kunde->telefonnummer.'</div>';
		}
		
		return ob_get_clean();
	}
	
	add_shortcode('schokoProdukte','schokoProdukte_func');
	add_shortcode('schokoKunden','schokoKunden_func');
	add_shortcode('schokoSchnaeppchen','schokoSchnaeppchen_func');
	add_shortcode('schokoKunstschau','schokoKunstschau_func');
//Theme bootstrap philips