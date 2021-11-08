<?php
/*
  License Notice :

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>

  Copyright Notice :

This work is made available under the terms of the Creative Commons Attribution-Share Alike License 2.0 France. (http://creativecommons.org/licenses/by-sa/2.0/fr/)
*/
include_once'Connection.php';
class Manager{
		private $bdd;
		public function __construct($bdd){
			$this->bdd=$bdd->dbconnect();
			// $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);/*gestion d'erreur*/
		}

	/*PERSON*/

/*renvoie un tableau contenant toutes les donnees d'une personne - returns an array containing all the person data*/
	public function persTab($id){
		try{
			$requete="SELECT * FROM person WHERE pers_id=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($id));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
				// echo "<br/> apres select persTab, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				if(!empty($res)){
					foreach($res as $ligne){
						return $ligne;
					}
				}else{return null;}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode persTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*renvoie un tableau contenant toutes les personnes speaker - returns an array containing all the speakers*/
	public function allSpeakerTab(){
		try{
			$requete="SELECT * FROM person WHERE pers_id IN(SELECT DISTINCT prog_speak FROM program) ORDER BY pers_l_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
				// echo "<br/> apres select allSpeakerTab, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode allSpeakerTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*affiche le prenom du speaker pris en parametre -  displays the first name of the speaker taken in parameter*/
	public function prenomSpeak($id){
		$persTab = $this->persTab($id);
		if(!empty($persTab)){
				echo $this->majuscule($persTab[2]);
		}else{
			echo " ";
		}
	}
/*affiche le nom du speaker pris en parametre -  displays the last name of the speaker taken in parameter */
	public function nomSpeak($id){
		$persTab = $this->persTab($id);
		if(!empty($persTab)){
				echo strtoupper($persTab[1]);
		}else{
			echo " ";
		}
	}
/*affiche l adresse de la photo du speaker pris en parametre -  displays the image adresse of the speaker taken in parameter */
	public function photoSpeak($id){
		$persTab = $this->persTab($id);
		if(!empty($persTab)){
				echo $persTab[3];
		}else{
			echo "assets/images/avatar.jpg";
		}
	}

	/*PROGRAM*/

/*renvoie un tableau contenant toutes les donnees d'un program - returns an array containing all the program data*/
	public function progTab($id){
		try{
			$requete="SELECT * FROM program WHERE prog_id=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($id));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select progTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			if(!empty($res)){
				foreach($res as $ligne){
					return $ligne;
				}
			}else{
				return null;
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode progTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*affiche le titre du programme pris en parametre - displays the title of the program taken in parameter*/
	public function titreProg($id){
		$titre = $this->progTab($id);
		if(!empty($titre)){
			echo $titre[2];
		}else{
			echo "";
		}
	}
	public function titreProgEn($id){
		$titre = $this->progTab($id);
		if(!empty($titre)){
			echo $titre[3];
		}else{
			echo "";
		}
	}

/*affiche l adresse de l'image du theme du programme pris en parametre - displays the image address of the theme of the program taken in parameter*/
	public function themeProg($id){
		$theme = $this->progTab($id);
		if(!empty($theme)){
			switch($theme[1]){
				case "sob":
					echo('assets/icons/SOB.png');
					break;
				case "sou":
					echo('assets/icons/SOU.png');
					break;
				case "bco":
					echo('assets/icons/BCO.png');
					break;
				case "cyb":
					echo('assets/icons/CYB.png');
					break;
				case "dat":
					echo('assets/icons/DAT.png');
					break;
				default:
					echo('assets/icons/iconeBb.png');
			}
		}else{
			echo('assets/icons/iconeBb.png');
		}
	}

/*renvoie le type, sous forme de chaine, du programme  pris en parametre - returns the type, in the form of a chain, of the program taken in parameter*/
	public function progType($id){
		try{
			$requete="SELECT kind_name FROM kind WHERE kind_prog=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($id));
				// echo "<br/> apres select progType, code d'erreur: ".$stmt->errorCode();
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			if(!empty($res)){
				foreach($res as $ligne){
					$l = $ligne[0];
					switch($l){
						case "conf":
							echo('-conférence- ');
							break;
						case "keyn":
							echo('-keynote- ');
							break;
						case "atel":
							echo('-atelier- ');
							break;
						case "trde":
							echo('-table ronde- ');
							break;
						default:
							echo(' ');
					}
				}
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode progType. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}
	public function progTypeEn($id){
		try{
			$requete="SELECT kind_name FROM kind WHERE kind_prog=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($id));
				// echo "<br/> apres select progType, code d'erreur: ".$stmt->errorCode();
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			if(!empty($res)){
				foreach($res as $ligne){
					$l = $ligne[0];
					switch($l){
						case "conf":
							echo('-conference- ');
							break;
						case "keyn":
							echo('-keynote- ');
							break;
						case "atel":
							echo('-workshop- ');
							break;
						case "trde":
							echo('-round table- ');
							break;
						default:
							echo(' ');
					}
				}
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode progType. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*renvoie les donnes des programmes dans lequel la personne prise en parametre est speaker - returns the data of the programs in which the person taken in parameter is speaker*/
	public function speakerProgTab($idSpeak){
		try{
			$requete="SELECT DISTINCT prog_title_fr, prog_title_en, slot_heure FROM program, slot  WHERE prog_id=slot_prog AND prog_speak=? ORDER BY slot_heure";
			// $requete="SELECT * FROM program WHERE prog_speak=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($idSpeak));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select speakerProgTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			if(!empty($res)){
				// foreach($res as $ligne){
				// 	return $ligne;
				// }
				return $res;
			}else{
				return null;
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode speakerProgTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*renvoie les donnes des programmes dans lequel la personne prise en parametre intervient - returns the data of the programs in which the person taken in parameter is involved*/
	public function interProgTab($idSpeak){
		try{
			$requete="SELECT prog_title_fr,prog_title_en FROM program WHERE prog_id IN(SELECT inter_prog FROM intervention WHERE inter_pers=?)";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($idSpeak));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select speakerProgTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			if(!empty($res)){
				return $res;
			}else{
				return null;
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode speakerProgTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*SLOTS*/

/*renvoie un tableau contenant toutes les donnees d'un slot - returns an array containing all tht slot data*/
	public function slotTab($id){
		try{
			$requete="SELECT * FROM slot WHERE slot_id=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($id));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select slotTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			if(!empty($res)){
				foreach($res as $ligne){
					return $ligne;
				}
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode slotTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*INTERVENTION*/

/*renvoie un tableau contenant toutes les personnes intervenant supplementaire d'un programme - returns an array containing all additional speakers of a program*/
	public function interPersTab($idProg){
		try{
			$requete="SELECT inter_pers FROM intervention WHERE inter_prog=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($idProg));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select interPersTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode interTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}
/*renvoie un tableau contenant toutes les entrees de la table intervention - returns an array containing all the entries of the intervention table*/
	public function allInterTab(){
		try{
			$requete="SELECT * FROM intervention";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select interPersTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode allInterTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*SPONSORS*/

/*renvoie la liste des sponsors - return the list of sponsors */
	public function sponsorTab(){
		try{
			$requete="SELECT * FROM entity, sponsor WHERE entity.entity_id=sponsor.sponsor_entity ORDER BY entity_name";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select sponsorTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode sponsorTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}
/*renvoie la liste des sponsors sylver ou gold - return the list of sponsors sylver or gold */
	public function sAndgSponsorsTab(){
		try{
			$requete="SELECT entity_id, entity_name, entity_logo ,entity_web FROM entity WHERE entity_id IN (SELECT sponsor_entity FROM sponsor WHERE sponsor_badge='g' OR sponsor_badge='s')";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select sAndgSponsorsTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode sAndgSponsorsTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*verifie si une entite est sponsor, renvoie le code du badge si oui et sinon - checks if an entity is a sponsor, returns the badge code if yes and if not */
	public function isSponsor($entityId){
		try{
			$requete="SELECT * FROM sponsor WHERE sponsor_entity=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($entityId));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select isSponsor, code d'erreur: ".$stmt->errorCode();
			// echo "nbre lignes :".$stmt->rowCount();
			if($stmt->rowCount()>0){
				if(!empty($res)){
					foreach($res as $ligne){
						return $ligne[1];
					}
				}
			}else{
				return null;
			}
			$stmt->closeCursor();
		}catch(Exception $e){
			echo'il y a une erreur dans la methode isSponsor. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*PARTENAIRES*/

/*renvoie la liste des partenaires - return the list of partners */
	public function partnerTab(){
		try{
			$requete="SELECT * FROM entity, partner WHERE entity.entity_id=partner.partner_entity ORDER BY entity_name";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select partnerTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode partnerTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

 /*ENTITES*/

/*renvoie la liste de toutes les entites - returns a list of all entities*/
	public function allEntityTab(){
		try{
			$requete="SELECT * FROM entity ORDER BY entity_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select allEntityTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode allEntityTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}
/*renvoie la liste de toutes les entites - returns a list of all entities*/
	public function entityTab($id){
		try{
			$requete="SELECT * FROM entity WHERE entity_id=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($id));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select entityTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			if(!empty($res)){
				foreach($res as $ligne){
					return $ligne;
				}
			}else{
				return null;
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode entityTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

 /*ENTREPRISES*/

/*renvoie la liste de toutes les entites enregistrees en tant qu'entreprise - returns a list of all entities registered as a company*/
	public function allEntTab(){
		try{
			$requete="SELECT * FROM entity WHERE entity_type='compa' ORDER BY entity_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select allEntTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode allEntTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

 /*EXPOSANTS*/

/*renvoie la liste de toutes les entites enregistrees en tant qu'entreprise - returns a list of all entities registered as a company*/
	public function allExpTab(){
		try{
			$requete="SELECT DISTINCT entity_id, entity_name, entity_logo, exhib_stand FROM entity, exhibitor WHERE entity.entity_id=exhibitor.exhib_entity ORDER BY entity_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select allExpTab, code d'erreur: ".$stmt->errorCode();
			$stmt->closeCursor();
			return $res;
		}catch(Exception $e){
			echo'il y a une erreur dans la methode allExpTab. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*verifie si une entite est exposante et renvoie son numero de stand si oui et null sinon - checks if an entity is an exponent and returns its stand number if yes and null otherwise*/
	public function isExhibitor($entityId){
		try{
			$requete="SELECT * FROM exhibitor WHERE exhib_entity=?";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($entityId));
			$res=$stmt->fetchAll(PDO::FETCH_NUM);
			// echo "<br/> apres select isExhibitor, code d'erreur: ".$stmt->errorCode();
			// echo "nbre lignes :".$stmt->rowCount();
			if($stmt->rowCount()>0){
				if(!empty($res)){
					foreach($res as $ligne){
						return $ligne[1];
					}
				}
			}else{
				return null;
			}
			$stmt->closeCursor();
		}catch(Exception $e){
			echo'il y a une erreur dans la methode isExhibitor. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*AUTRES FONCTION*/

/*Renvoie la chaine prise en parametre avec les majuscules en premiers caracteres*/
	public function majuscule($str){
		$str=strtolower($str);
		if(substr_count($str,'-')!=0){
			$strTip=explode('-',$str);
			return ucfirst($strTip[0]).'-'.ucfirst($strTip[1]);
		}elseif(substr_count($str,' ')!=0){
			$strTip=explode(' ',$str);
			return ucfirst($strTip[0]).' '.ucfirst($strTip[1]);
		}else{
			return ucfirst($str);
		}
	}/*$this->majuscule($prenom).strtoupper($nom);*/

/*renvoie la chaine prise en caractere, */
	public function filtreAccents($str){
		$search=array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
		$replace=array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
		return str_replace($search,$replace,$str);
	}/*$this->filtreAccents($str);*/

/*filtre et met en forme le texte avant affichage*/
public function formatting($str){
	$str=nl2br(nl2br($str));
	return $str;
}

/*tri matrice avec une cle en ASC ou DESC*/
function array_sort($array, $on, $order=SORT_ASC){
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }
        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }
        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }
    return $new_array;
}

}/*fin classe Manager*/
?>
