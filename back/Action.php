<?php
/*
  Avis de licence :

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

  Avis de copyright :

Ce(tte) œuvre est mise à disposition selon les termes de la Licence Creative Commons Attribution - Partage dans les Mêmes Conditions 2.0 France. (http://creativecommons.org/licenses/by-sa/2.0/fr/)
*/
include_once'Connection.php';
include_once'Message.php';
class Action{
		private $bdd;
		public function __construct($bdd){
		$this->bdd=$bdd->dbconnect();
}

	/*ENTITES*/

/*Insertion ou modification d'une entite - Insert or modify an entity*/
	public function insertEntity($tab){
		 /*verif des donnees identifiantes - check identifying data*/
			if(isset($tab["nom"]) && isset($tab["web"])){
				$tab["nom"] = strtolower(trim(filter_var($tab["nom"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)));
				$tab["web"] = trim(filter_var($tab["web"], FILTER_SANITIZE_URL));
				$nom=$tab["nom"];
				$web=$tab["web"];
				$etat="insert";
			}
			if(isset($tab["entity"]) && isset($tab["entity"])){
				$id=$tab["entity"];
				$etat="update";
			}
			//verif de la presence de l'entite dans la base - check the presence of the entity in the database
			if(isset($nom) && !empty($nom) && isset($web) && !empty($web)){
				try{
					$requeteInit="SELECT entity_id FROM entity WHERE entity_name=? AND entity_web=?";
					$stmtInit=$this->bdd->prepare($requeteInit);
					$stmtInit->execute(array($nom,$web));
					// echo "<br/> entité ds la base :".$stmtInit->rowCount();
				}catch(Exception $e){
					echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
					echo'<br/> erreur : '.$e->getMessage();
					echo'<br/> trace : '.$e->getTraceAsString();
				}
			}elseif(isset($id) && !empty($id)){
				try{
					$requeteInit="SELECT entity_id FROM entity WHERE entity_id=?";
					$stmtInit=$this->bdd->prepare($requeteInit);
					$stmtInit->execute(array($id));
					// echo "<br/> entité ds la base :".$stmtInit->rowCount();
				}catch(Exception $e){
					echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
					echo'<br/> erreur : '.$e->getMessage();
					echo'<br/> trace : '.$e->getTraceAsString();
				}
			}else{
				// return false;
				$str="Le participant n'a pas été renseigné.";
				return new Message($str);
			}
			if($stmtInit->rowCount()!=0){//entite presente dans la base
				if($etat=="update"){
					/*changer nom - change name*/
					if(isset($tab["nom2"]) && !empty($tab["nom2"])){
						$tab["nom2"] = strtolower(trim(filter_var($tab["nom2"], FILTER_SANITIZE_STRING)));
						try{
							$requete="UPDATE entity SET entity_name=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["nom2"]));
							// echo "<br/> apres update nom, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer type - change type*/
					if(isset($tab["type2"]) && !empty($tab["type2"])){
						$tab["type2"] = trim(filter_var($tab["type2"], FILTER_SANITIZE_STRING));
						try{
							$requete="UPDATE entity SET entity_type=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["type2"]));
							// echo "<br/> apres update type, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer adresse - change address*/
					if(isset($tab["adresse2"]) && !empty($tab["adresse2"])){
						$tab["adresse2"] = trim(filter_var($tab["adresse2"], FILTER_SANITIZE_STRING));
						try{
							$requete="UPDATE entity SET entity_adresse=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["adresse2"]));
							// echo "<br/> apres update adresse, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer mail*/
					if(isset($tab["mail2"]) && !empty($tab["mail2"])){
						$tab["mail2"] = trim(filter_var($tab["mail2"], FILTER_SANITIZE_EMAIL));
						if(!filter_var($tab["mail2"], FILTER_VALIDATE_EMAIL)===false){
							try{
								$requete="UPDATE entity SET entity_mail=? WHERE entity_id='".$id."'";
								$stmt=$this->bdd->prepare($requete);
								$stmt->execute(array($tab["mail2"]));
								// echo "<br/> apres update mail, code d'erreur: ".$stmt->errorCode();
								$stmt->closeCursor();
							}catch(Exception $e){
								echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
								echo'<br/> erreur : '.$e->getMessage();
								echo'<br/> trace : '.$e->getTraceAsString();
							}
						}else{
							$str="L'entité ".strtoupper($tab["nom"])." a bien été enregistrée mais son mail n'est pas valide, il n'a pas été pris en compte.";
						}
					}
					/*changer adresse web - change web address*/
					if(isset($tab["web2"]) && !empty($tab["web2"])){
						$tab["web2"] = trim(filter_var($tab["web2"], FILTER_SANITIZE_URL));
						try{
							$requete="UPDATE entity SET entity_web=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["web2"]));
							// echo "<br/> apres update web, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer presentation français - change french presentation*/
					if(isset($tab["textFr2"]) && !empty($tab["textFr2"])){
						$tab["textFr2"] = trim(filter_var($tab["textFr2"], FILTER_SANITIZE_STRING));
						try{
							$requete="UPDATE entity SET entity_text_fr=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["textFr2"]));
							// echo "<br/> apres update texte français, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer presentation anglais - change english presentation*/
					if(isset($tab["textEn2"]) && !empty($tab["textEn2"])){
						$tab["textEn2"] = trim(filter_var($tab["textEn2"], FILTER_SANITIZE_STRING));
						// $tab["textEn2"] = trim(htmlentities($tab["textEn2"]));
						try{
							$requete="UPDATE entity SET entity_text_en=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["textEn2"]));
							// echo "<br/> apres update texte anglais, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer telephone - change phone number*/
					if(isset($tab["tel2"]) && !empty($tab["tel2"])){
						$tab["tel2"] = trim(filter_var($tab["tel2"], FILTER_SANITIZE_NUMBER_INT));
						try{
							$requete="UPDATE entity SET entity_phone=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["tel2"]));
							// echo "<br/> apres update telephone, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer twitter*/
					if(isset($tab["tw2"]) && !empty($tab["tw2"])){
						$tab["tw2"] = trim(filter_var($tab["tw2"], FILTER_SANITIZE_URL));
						try{
							$requete="UPDATE entity SET entity_twitter=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["tw2"]));
							// echo "<br/> apres update twitter, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer linkedIn*/
					if(isset($tab["lin2"]) && !empty($tab["lin2"])){
						$tab["lin2"] = trim(filter_var($tab["lin2"], FILTER_SANITIZE_URL));
						try{
							$requete="UPDATE entity SET entity_linkedIn=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["lin2"]));
							// echo "<br/> apres update linkedIn, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					/*changer dirigeant - change leader*/
					if(isset($tab["dir2"]) && !empty($tab["dir2"])){
						$tab["dir2"] = trim(filter_var($tab["dir2"], FILTER_SANITIZE_NUMBER_INT));
						try{
							$requete="UPDATE entity SET entity_dir=? WHERE entity_id='".$id."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["dir2"]));
							// echo "<br/> apres update dirigeant, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
						}catch(Exception $e){
							echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
							echo'<br/> erreur : '.$e->getMessage();
							echo'<br/> trace : '.$e->getTraceAsString();
						}
					}
					$stmtInit->closeCursor();
					if(isset($stmt)){
						$stmt->closeCursor();
					}
					// return true;
					if(!isset($str) || empty($str)){
						$str="L'entité a bien été modifiée.";
					}
					return new Message($str);
				}
				$stmtInit->closeCursor();
				// return false;
				$str="Pas de champ renseigné. L'entité n'a pas été modifiée.";
				return new Message($str);
			}elseif(isset($tab["nom"]) && isset($tab["web"])){
				$tab["adresse"]= trim(filter_var($tab["adresse"], FILTER_SANITIZE_STRING));
				$tab["mail"]= trim(filter_var($tab["mail"], FILTER_SANITIZE_EMAIL));
				$tab["tel"]= trim(filter_var($tab["tel"], FILTER_SANITIZE_NUMBER_INT));
				$tab["textFr"]= trim(filter_var($tab["textFr"], FILTER_SANITIZE_STRING));
				// $tab["textFr"]= trim(htmlentities($tab["textFr2"]));
				$tab["textEn"]= trim(filter_var($tab["textEn"], FILTER_SANITIZE_STRING));
				// $tab["textEn"]= trim(htmlentities($tab["textEn"]));
				$tab["tw"] = trim(filter_var($tab["tw"], FILTER_SANITIZE_URL));
				$tab["lin"] = trim(filter_var($tab["lin"], FILTER_SANITIZE_URL));
				/*respect contrainte d'integrite - respect of integrity constraint*/
				if(empty($tab["dir"])){
					$tab["dir"]=null;
				}
				/*creation path logo*/
				$logo="assets/images/avatarLogo.jpg";
				// echo "<br/>logo existe :".isset($tab["logo"]);/* 1 pour true et rien sinon*/
				// echo "<br/>logo est null :".empty($tab["logo"]);/*1 pour true et rien sinon*/
				if(isset($tab["logo"])){/*["logo"]=="on"*/
					$l=strtoupper($tab["nom"]);
					$logo="assets/images/LOGO-".$l.".png";
				}
				/*verif de l'email - check email*/
				if(!filter_var($tab["mail"], FILTER_VALIDATE_EMAIL)===false && !empty($tab["mail"])){
					$mail=$tab["mail"];
					$str="L'entité ".strtoupper($tab["nom"])." a bien été enregistrée.";
				}elseif(empty($tab["mail"])){
					$mail="";
					$str="L'entité ".strtoupper($tab["nom"])." a bien été enregistrée.";
				}else{
					$mail="";
					$str="L'entité ".strtoupper($tab["nom"])." a bien été enregistrée mais son mail n'est pas valide, il n'a pas été pris en compte.";
				}
				/*insertion*/
					try{
						$requete="INSERT INTO entity VALUES (DEFAULT,?,?,?,?,?,?,?,?,?,?,?,?)";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($nom,$tab["type"],$logo,$tab["adresse"],$mail,$tab["web"],$tab["textFr"],$tab["textEn"],$tab["tel"],$tab["tw"],$tab["lin"],$tab["dir"]));
						// echo "<br/> apres insertion totales, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					// return true;
					return new Message($str);
			}else{
				// return false;
				$str="L'entité n'a pas été enregistrée.";
				return new Message($str);
			}
		}/*fin insertEnt*/

/*Associe une entite à un statut*/
	public function insertStatut($tab){
		try{
			//insert sponsor
			if(isset($tab["sponsor"]) && !empty($tab["sponsor"]) && isset($tab["entity"]) && !empty($tab["entity"])){
				//verif que le sponsor ne soit pas une collectivite - check the sponsor is not a community
				$requeteInit="SELECT entity_type FROM entity WHERE entity_id=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($tab["entity"]));
				// echo "<br/> apres verif sponsor, code d'erreur: ".$stmtInit->errorCode();
				$type="commu";
				foreach($stmtInit as $ligne){
					// print_r($ligne);
					$type=$ligne[0];
				}
				$stmtInit->closeCursor();
				if($type!='commu'){
					if(isset($tab["sponsor"]) && !empty($tab["sponsor"]) && isset($tab["badge"]) && !empty($tab["badge"]) && $tab["badge"]!='n'){
						//verif de la presence du sponsor - check the presence of the sponsor
						$requeteInit="SELECT sponsor_entity FROM sponsor WHERE sponsor_entity=? AND sponsor_badge=?";
						$stmtInit=$this->bdd->prepare($requeteInit);
						$stmtInit->execute(array($tab["entity"],$tab["badge"]));
						// echo "<br/> entité ds la base :".$stmtInit->rowCount();
						if($stmtInit->rowCount()==0){
							$requete="INSERT INTO sponsor VALUES (?,?)";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["entity"],$tab["badge"]));
							// echo "<br/> apres insertion sponsor, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
							$stmtInit->closeCursor();
							$str="Le sponsor a été enregistré.";
							return new Message($str);
						}elseif($stmtInit->rowCount()>0){
							$requete="UPDATE sponsor SET sponsor_badge=? WHERE sponsor_entity='".$tab["entity"]."'";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["badge"]));
							// echo "<br/> apres update sponsor, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
							$stmtInit->closeCursor();
							$str="Le badge du sponsor a été remplacé.";
							return new Message($str);
						}
					}else{
						$str="Un sponsor ne peut être enregistré sans badge.";
						return new Message($str);
					}
				}else{
					$str="Une entité collectivité ne peut pas être sponsor!";
					return new Message($str);
				}
			}

			//insert partner
			if(isset($tab["partner"]) && !empty($tab["partner"]) && isset($tab["entity"]) && !empty($tab["entity"])){
				//verif que le partenaire ne soit pas une collectivite - check the partner is not a community
				$requeteInit="SELECT entity_type FROM entity WHERE entity_id=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($tab["entity"]));
				// echo "<br/> apres verif partner, code d'erreur: ".$stmtInit->errorCode();
				$type="commu";
				foreach($stmtInit as $ligne){
					// echo"<br/>";
					// print_r($ligne);
					$type=$ligne[0];
				}
				$stmtInit->closeCursor();
				if($type!='commu'){
					//verif de la presence du partenaire - check the presence of the partner
					$requeteInit="SELECT partner_entity FROM partner WHERE partner_entity=?";
					$stmtInit=$this->bdd->prepare($requeteInit);
					$stmtInit->execute(array($tab["entity"]));
					// echo "<br/> entité ds la base :".$stmtInit->rowCount();
					if($stmtInit->rowCount()==0){
						$requete="INSERT INTO partner VALUES (?)";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["entity"]));
						// echo "<br/> apres insertion partenaire, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
						$stmtInit->closeCursor();
						$str="Le partenaire a été enregistré.";
						return new Message($str);
					}else{
					$str="Le partenaire n'a pas été enregistré.";
					return new Message($str);
					}
				}else{
					$str="Une entité collectivité ne peut pas être partenaire!";
					return new Message($str);
				}
			}

			//insert support
			if(isset($tab["support"]) && !empty($tab["support"]) && isset($tab["entity"]) && !empty($tab["entity"])){
				//verif que le soutien soit bien une collectivite - check the support is a community
				$requeteInit="SELECT entity_type FROM entity WHERE entity_id=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($tab["entity"]));
				// echo "<br/> apres verif support, code d'erreur: ".$stmtInit->errorCode();
				$type="compa";
				foreach($stmtInit as $ligne){
					// echo"<br/>";
					// print_r($ligne);
					$type=$ligne[0];
				}
				$stmtInit->closeCursor();
				if($type=='commu'){
						//verif de la presence du partenaire - check the presence of the partner
						$requeteInit="SELECT support_entity FROM support WHERE support_entity=?";
						$stmtInit=$this->bdd->prepare($requeteInit);
						$stmtInit->execute(array($tab["entity"]));
						// echo "<br/> entité ds la base :".$stmtInit->rowCount();
						if($stmtInit->rowCount()==0){
							$requete="INSERT INTO support VALUES (?)";
							$stmt=$this->bdd->prepare($requete);
							$stmt->execute(array($tab["entity"]));
							// echo "<br/> apres insertion soutien, code d'erreur: ".$stmt->errorCode();
							$stmt->closeCursor();
							$stmtInit->closeCursor();
							$str="Le psoutien a été enregistré.";
							return new Message($str);
						}else{
						$str="Le soutien n'a pas été enregistré.";
						return new Message($str);
						}
					}else{
						$str="Un soutien doit être une entité collectivité!";
						return new Message($str);
					}
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode insertStatut. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Associe une entite à un statut*/
	public function deleteStatut($tab){
		try{
			if(isset($tab["sponsor3"]) && !empty($tab["sponsor3"])){
				echo"<br/> sponsor3 : ".$tab["sponsor3"];
				$requete="DELETE FROM sponsor WHERE sponsor_entity=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["sponsor3"]));
				// echo "<br/> après delete sponsor, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				$str="Le sponsor a été supprimé!";
				return new Message($str);
			}
			if(isset($tab["partner3"]) && !empty($tab["partner3"])){
				$requete="DELETE FROM partner WHERE partner_entity=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["partner3"]));
				// echo "<br/> après delete partner, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				$str="Le partenaire a été supprimé!";
				return new Message($str);
			}
			if(isset($tab["support3"]) && !empty($tab["support3"])){
				$requete="DELETE FROM support WHERE support_entity=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["support3"]));
				// echo "<br/> après delete support, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				$str="Le soutien a été supprimé!";
				return new Message($str);
			}
			$str="Le statut de cette entité n'a pas été supprimé.";
			return new Message($str);
		} catch(Exception $e){
			echo'il y a une erreur dans la methode insertStand. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les exposants- displays the option line with the exhibitors*/
	public function getPartner(){
		try{
			$requete="SELECT entity_id, entity_name FROM entity, partner WHERE entity.entity_id=partner.partner_entity ORDER BY entity_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
				echo "<option name='partner3' value='".$ligne[0]."'>".strtoupper($ligne[1])."</option>";
			}
		}catch(Exception $e){
			echo'il y a une erreur dans la methode getPartner. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les sponsors- displays the option line with the sponsors*/
	public function getSponsor(){
		try{
			$requete="SELECT entity_id, entity_name, sponsor_badge FROM entity, sponsor WHERE entity.entity_id=sponsor.sponsor_entity ORDER BY entity_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
				if($ligne[2]=='b'){
					$badge="Bronze";
				}elseif($ligne[2]=='s'){
					$badge="Sylver";
				}elseif($ligne[2]=='g'){
					$badge="Gold";
				}
				echo "<option name='stand4' value='".$ligne[0]."'>".strtoupper($ligne[1])." ".$badge."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getSponsor. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les sponsors- displays the option line with the sponsors*/
	public function getSupport(){
		try{
			$requete="SELECT entity_id, entity_name FROM entity, support WHERE entity.entity_id=support.support_entity ORDER BY entity_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
				echo "<option name='stand4' value='".$ligne[0]."'>".strtoupper($ligne[1])."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getSupport. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*STAND*/

/*Associe ou supprime un stand à une entreprise - Associate or delete a booth with a company*/
	public function insertStand($tab){
		try{
			//ajout exposant - add exhibitor
			if(isset($tab["stand"]) && !empty($tab["stand"]) && isset($tab["ent"]) && !empty($tab["ent"])){
				//verif presence de l'entreprise - company presence check
				$requeteInit="SELECT * FROM exhibitor WHERE exhib_entity=? AND exhib_stand=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($tab["ent"],$tab["stand"]));
				// echo "<br/> entite ds la liste des exposants :".$stmtInit->rowCount();
				if($stmtInit->rowCount()==0){
					$requete="INSERT INTO exhibitor VALUES (?,?)";
					$stmt=$this->bdd->prepare($requete);
					$stmt->execute(array($tab["ent"],$tab["stand"]));
					// echo "<br/> apres insertion stand, code d'erreur: ".$stmt->errorCode();
					$stmt->closeCursor();
					$stmtInit->closeCursor();
					$str="Le stand ".$tab["stand"]." a été attribué.";
					return new Message($str);
				}else{
					$stmtInit->closeCursor();
					$str="Ce stand est déjà attribué à cette entité!";
					return new Message($str);
				}
			}
			//suppression exposant - delete exhibitor
			if(isset($tab["stand4"]) && !empty($tab["stand4"])){
				$exhib=explode('-',$tab["stand4"]);
				$requete="DELETE FROM exhibitor WHERE exhib_entity=? AND exhib_stand=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($exhib[0],$exhib[1]));
				// echo "<br/> apres suppression de stand, code d'erreur: ".$stmt->errorCode();
				$str="Le stand ".$exhib[1]." a été libéré.";
				return new Message($str);
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode insertStand. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les stands - displays the option line with the stands*/
	public function getStand(){
			try{
				$requete="SELECT stand_id FROM stand  ORDER BY stand_id ASC";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array());
				$tab=array();
				while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
					$tab[]=$ligne[0];
				}
				for($i=1;$i<41; $i++){
					if($i>9){
						$st="0".$i;
					}else{
						$st="00".$i;
					}
					if(!in_array($st)){
						echo "<option name='stand4' value='".$st."'>".$st."</option>";
					}
				}
			} catch(Exception $e){
				echo'il y a une erreur dans la methode getStand. Ligne : '.$e->getLine();
				echo'<br/> erreur : '.$e->getMessage();
				echo'<br/> trace : '.$e->getTraceAsString();
			}
		}

/*Affiche la ligne d'option avec les stands libres - displays the option line with the empty stands*/
	public function getStandLibre(){
		try{
			$requete="SELECT stand_id FROM stand WHERE stand_id NOT IN(SELECT exhib_stand FROM exhibitor) ORDER BY stand_id ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			$tab=array();
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
				$tab[]=$ligne[0];
			}
			for($i=1;$i<41; $i++){
				if($i>9){
					$st="0".$i;
				}else{
					$st="00".$i;
				}
				if(!in_array($st)){
					echo "<option name='stand4' value='".$st."'>".$st."</option>";
				}
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getStandLibre. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les stands deja occupes par une entreprise - Displays the option line with the occupied stands*/
	public function getStandOccupe(){
		try{
			$requete="SELECT entity_id, entity_name, exhib_stand FROM entity, exhibitor WHERE entity.entity_id=exhibitor.exhib_entity ORDER BY exhib_stand ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
				echo "<option name='stand4' value='".$ligne[0]."-".$ligne[2]."'>".$ligne[2]." ".strtoupper($ligne[1])."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getStandOccupe. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche le nom de l'entreprise dont le stand est pris en parametre - Displays the name of the company whose booth is taken as a parameter*/
	public function getEntName($stand){
		try{
			$requete="SELECT entity_name FROM entity WHERE entity_id IN (SELECT exhib_entity FROM exhibitor WHERE exhib_stand=?)";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array($stand));
			// echo "<br/>".$stmt->rowCount();
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
					echo "".strtoupper($ligne[0])."<br/>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getEnt. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'options avec le nom des entites - Displays the option line with the name of the entities*/
	public function getEntity(){
		try{
			$requete="SELECT entity_id,entity_name FROM entity ORDER BY entity_name ASC ";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
					echo "<option name='entity' value='".$ligne[0]."'>".strtoupper($ligne[1])."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getEntity. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'options avec le nom des entreprises - Displays the option line with the company names*/
	public function getEnt(){
		try{
			$requete="SELECT entity_id,entity_name FROM entity WHERE entity_type='compa' ORDER BY entity_name ASC ";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
					echo "<option name='ent' value='".$ligne[0]."'>".strtoupper($ligne[1])."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getEnt. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*PARTICIPANTS*/

/*Insertion et modification d'une personne - Inserting and editing a person*/
	public function insertPers($tab){
		/*verif des donnees identifiantes. Attention, ne tolere pas les homonymes parfaits - check identifying data. Warning, does not tolerate perfect homonyms*/
		if(isset($tab["nom"]) && isset($tab["prenom"])){
			$tab["nom"] = strtolower(trim(filter_var($tab["nom"], FILTER_SANITIZE_STRING)));
			$tab["prenom"] = strtolower(trim(filter_var($tab["prenom"], FILTER_SANITIZE_STRING)));
			$nom=$tab["nom"];
			$prenom=$tab["prenom"];
			$etat="insert";
			// echo "<br/> personne et etat :".$nom." ".$prenom.": ".$etat;
		}
		if(isset($tab["nom3"])){
			$id=$tab["nom3"];
			$etat="update";
			// echo "<br/> personne3 et etat :".$nom." ".$prenom.": ".$etat;
		}
		/*verif de la presence du participant dans la base - check the presence of the participant in the database*/
		if(isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom)){
			try{
				$requeteInit="SELECT pers_id FROM person WHERE pers_l_name=? AND pers_f_name=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($nom,$prenom));
				// echo "<br/> participant ds la base :".$stmtInit->rowCount();
				foreach($stmtInit as $ligne){
					// print_r($ligne);
					$id=$ligne[0];
				}
			}catch(Exception $e){
				echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
				echo'<br/> erreur : '.$e->getMessage();
				echo'<br/> trace : '.$e->getTraceAsString();
			}
		}elseif(isset($id) && !empty($id)){
			try{
				$requeteInit="SELECT pers_id FROM person WHERE pers_id=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($id));
				// echo "<br/> entité ds la base :".$stmtInit->rowCount();
			}catch(Exception $e){
				echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
				echo'<br/> erreur : '.$e->getMessage();
				echo'<br/> trace : '.$e->getTraceAsString();
			}
		}else{
			// return false;
			return new Message('Les champs NOM et PRENOM ne sont pas renseignés.');
		}
		if($stmtInit->rowCount()!=0){//utilisateur present dans la base
			if($etat=="update"){
				// echo "<br/> etat = update";
				/*changer nom - change last name*/
				if(isset($tab["nom2"]) && !empty($tab["nom2"])){
					$tab["nom2"]= strtolower(trim(filter_var($tab["nom2"], FILTER_SANITIZE_STRING)));
					try{
						$requete="UPDATE person SET pers_l_name=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["nom2"]));
						// echo "<br/> apres update nom, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				/*changer prenom - change first name*/
				if(isset($tab["prenom2"]) && !empty($tab["prenom2"])){
					$tab["prenom2"]= strtolower(trim(filter_var($tab["prenom2"], FILTER_SANITIZE_STRING)));
					try{
						$requete="UPDATE person SET pers_f_name=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["prenom2"]));
						// echo "<br/> apres update prenom, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				/*changer pays - change country*/
				if(isset($tab["pays2"]) && !empty($tab["pays2"])){
					$tab["pays2"]= strtoupper(trim(filter_var($tab["pays2"], FILTER_SANITIZE_STRING)));
					try{
						$requete="UPDATE person SET pers_country=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["pays2"]));
						// echo "<br/> apres update pays, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				/*changer presentation en français - change french presentation*/
				if(isset($tab["textFr2"]) && !empty($tab["textFr2"])){
					$tab["textFr2"] = trim(filter_var($tab["textFr2"], FILTER_SANITIZE_STRING));
					try{
						$requete="UPDATE person SET pers_bio_fr=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["textFr2"]));
						// echo "<br/> apres update texte français, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				/*changer presentation anglais - change english presentation*/
				if(isset($tab["textEn2"]) && !empty($tab["textEn2"])){
					$tab["textEn2"] = trim(filter_var($tab["textEn2"], FILTER_SANITIZE_STRING));
					try{
						$requete="UPDATE person SET pers_bio_en=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["textEn2"]));
						// echo "<br/> apres update texte anglais, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				/*changer adresse twitter - change twitter address*/
				if(isset($tab["tw2"]) && !empty($tab["tw2"])){
					$tab["tw2"] = trim(filter_var($tab["tw2"], FILTER_SANITIZE_URL));
					try{
						$requete="UPDATE person SET pers_twitter=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["tw2"]));
						// echo "<br/> apres update twitter, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				/*changer adresse linkedIn - change linkedIn address*/
				if(isset($tab["lin2"]) && !empty($tab["lin2"])){
					$tab["lin2"] = trim(filter_var($tab["lin2"], FILTER_SANITIZE_URL));
					try{
						$requete="UPDATE person SET pers_linkedIn=? WHERE pers_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["lin2"]));
						// echo "<br/> apres update linkedIn, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				$stmtInit->closeCursor();
				if(isset($stmt)){
					$stmt->closeCursor();
				}
				// return true;
				$str="Le participant ".$tab["nom2"]." ".$tab["prenom2"]."a bien été modifié.";
				return new Message($str);
			}
			$stmtInit->closeCursor();
			// return false;
			$str="Pas de champ renseigné. Le participant n'a pas été modifié.";
			return new Message($str);
		}elseif(isset($tab["nom"]) && isset($tab["prenom"])){
				// echo "<br/> utilisateur pas dans la base";
			$tab["pays"]= strtoupper(trim(filter_var($tab["pays"], FILTER_SANITIZE_STRING)));
			$tab["textFr"]= trim(filter_var($tab["textFr"], FILTER_SANITIZE_STRING));
			$tab["textEn"]= trim(filter_var($tab["textEn"], FILTER_SANITIZE_STRING));
			$tab["tw"] = trim(filter_var($tab["tw"], FILTER_SANITIZE_URL));
			$tab["lin"] = trim(filter_var($tab["lin"], FILTER_SANITIZE_URL));
			/*creation path photo*/
			$photo="assets/images/avatar.jpg";
			// echo "logo existe :".isset($tab["photo"]);/* 1 pour true et rien sinon*/
			// echo "<br/>logo est null :".empty($tab["photo"]);/*1 pour true et rien sinon*/
			if(isset($tab["photo"])){/*["photo"]=="on"*/
				$ph=$this->majuscule($prenom).strtoupper($nom);/*ex : SylvainCOSTES*/
				$photo="assets/images/".$ph.".png";
			}
			/*insertion*/
			try{
				$requete="INSERT INTO person VALUES (DEFAULT,?,?,?,?,?,?,?,?)";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($nom,$prenom,$photo,$tab["pays"],$tab["textFr"],$tab["textEn"],$tab["tw"],$tab["lin"]));
				// echo "<br/> apres insert, code d'erreur: ".$stmt->errorCode();
				$stmtInit->closeCursor();
				$stmt->closeCursor();
			} catch(Exception $e){
				echo'il y a une erreur dans la methode insertPers. Ligne : '.$e->getLine();
				echo'<br/> erreur : '.$e->getMessage();
				echo'<br/> trace : '.$e->getTraceAsString();
			}
			// return true;
			$str="Le participant ".strtoupper($tab["nom"])." ".ucfirst($tab["prenom"])." a bien été enregistré.";
			return new Message($str);
		}else{
			// return false;
			$str="L'utilisateur a déjà été enregistré, veuillez renseigner le formulaire de modification ci-dessous.";
			return new Message($str);
		}
	}/*fin insertPers*/

/*Affichage la ligne d'options avec le nom et le prenom de la personne*/
	public function getPers(){
		try{
			echo "debut";
			$requete="SELECT pers_id,pers_l_name,pers_f_name FROM person ORDER BY pers_l_name ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
					echo "<option value='".$ligne[0]."'>".strtoupper($this->filtreAccents($ligne[1]))." ".ucfirst($ligne[2])."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getPers. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

	/*PROGRAMME*/

/*Insertion et modification d'un programme - Inserting and editing a program*/
 	public function insertProg($tab){
 		/*verif des donnees identifiantes - check identifying data*/
 		if(isset($tab["titreFr"]) && isset($tab["theme"])){
 			$tab["titreFr"] = trim(filter_var($tab["titreFr"], FILTER_SANITIZE_STRING));
 			$tab["theme"] = strtolower(trim(filter_var($tab["theme"], FILTER_SANITIZE_STRING)));
 			$titreFr=$tab["titreFr"];
 			$theme=$tab["theme"];
 			$etat="insert";
			// echo '<br/>'.$etat;
 		}
 		if(isset($tab["titre3"])){
			$id=$tab["titre3"];
 			$etat="update";
			// echo '<br/>'.$etat.' id :'.$id;
 		}
 		/*verif de la presence du programme dans la base - check the presence of the programme in the database*/
 		if(isset($titreFr) && !empty($titreFr) && isset($theme) && !empty($theme)){
 			try{
 				$requeteInit="SELECT prog_id FROM program WHERE prog_titre_fr=? AND prog_theme=?";
 				$stmtInit=$this->bdd->prepare($requeteInit);
 				$stmtInit->execute(array($titreFr,$theme));
 				// echo "<br/> programme ds la base :".$stmtInit->rowCount();
 				foreach($stmtInit as $ligne){
 					// print_r($ligne);
 					$id=$ligne[0];
					// echo 'id :'.$id;
 				}
 			}catch(Exception $e){
 				echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 				echo'<br/> erreur : '.$e->getMessage();
 				echo'<br/> trace : '.$e->getTraceAsString();
 			}
 		}elseif(isset($id) && !empty($id)){
			try{
				$requeteInit="SELECT prog_id FROM program WHERE prog_id=?";
				$stmtInit=$this->bdd->prepare($requeteInit);
				$stmtInit->execute(array($id));
				// echo "<br/> prog ds la base :".$stmtInit->rowCount();
			}catch(Exception $e){
				echo'il y a une erreur dans la methode insertEntity. Ligne : '.$e->getLine();
				echo'<br/> erreur : '.$e->getMessage();
				echo'<br/> trace : '.$e->getTraceAsString();
			}
		}else{
 			// return false;
 			return new Message('Les champs TITRE et THEME ne sont pas renseignés.');
 		}
 		if($stmtInit->rowCount()!=0){//utilisateur present dans la base
			// echo '</br> utilisateur présent dans la base';
 			if($etat=="update"){
				/*changer theme - change theme*/
				if(isset($tab["theme2"]) && !empty($tab["theme2"])){
					$tab["theme2"]= strtolower(trim(filter_var($tab["theme2"], FILTER_SANITIZE_STRING)));
					try{
						$requete="UPDATE program SET prog_theme=? WHERE prog_id='".$id."'";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($tab["theme2"]));
						// echo "<br/> apres update theme, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
 				/*changer titre français- change french title*/
 				if(isset($tab["titreFr2"]) && !empty($tab["titreFr2"])){
 					$tab["titreFr2"]= trim(filter_var($tab["titreFr2"], FILTER_SANITIZE_STRING));
 					try{
 						$requete="UPDATE program SET prog_title_fr=? WHERE prog_id='".$id."'";
 						$stmt=$this->bdd->prepare($requete);
 						$stmt->execute(array($tab["titreFr2"]));
 						// echo "<br/> apres update titreFr, code d'erreur: ".$stmt->errorCode();
 						$stmt->closeCursor();
 					}catch(Exception $e){
 						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 						echo'<br/> erreur : '.$e->getMessage();
 						echo'<br/> trace : '.$e->getTraceAsString();
 					}
 				}
 				/*changer titre anglais- change english title*/
 				if(isset($tab["titreEn2"]) && !empty($tab["titreEn2"])){
 					$tab["titreEn2"]= trim(filter_var($tab["titreEn2"], FILTER_SANITIZE_STRING));
 					try{
 						$requete="UPDATE program SET prog_title_en=? WHERE prog_id='".$id."'";
 						$stmt=$this->bdd->prepare($requete);
 						$stmt->execute(array($tab["titreEn2"]));
 						// echo "<br/> apres update titreEn, code d'erreur: ".$stmt->errorCode();
 						$stmt->closeCursor();
 					}catch(Exception $e){
 						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 						echo'<br/> erreur : '.$e->getMessage();
 						echo'<br/> trace : '.$e->getTraceAsString();
 					}
 				}
 				/*changer presentateur - change speaker*/
 				if(isset($tab["speaker2"]) && !empty($tab["speaker2"])){
 					$tab["speaker2"]= trim(filter_var($tab["speaker2"], FILTER_SANITIZE_NUMBER_INT));
 					try{
 						$requete="UPDATE program SET prog_speak=? WHERE prog_id='".$id."'";
 						$stmt=$this->bdd->prepare($requete);
 						$stmt->execute(array($tab["speaker2"]));
 						// echo "<br/> apres update speaker, code d'erreur: ".$stmt->errorCode();
 						$stmt->closeCursor();
 					}catch(Exception $e){
 						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 						echo'<br/> erreur : '.$e->getMessage();
 						echo'<br/> trace : '.$e->getTraceAsString();
 					}
 				}
 				/*changer presentation en français - change french presentation*/
 				if(isset($tab["textFr2"]) && !empty($tab["textFr2"])){
 					$tab["textFr2"] = trim(filter_var($tab["textFr2"], FILTER_SANITIZE_STRING));
 					try{
 						$requete="UPDATE program SET prog_text_fr=? WHERE prog_id='".$id."'";
						// var_dump($this->bdd->errorInfo());
 						$stmt=$this->bdd->prepare($requete);
 						$stmt->execute(array($tab["textFr2"]));
						// var_dump($stmt->errorInfo());
 						// echo "<br/> apres update texte français, code d'erreur: ".$stmt->errorCode();
 						$stmt->closeCursor();
 					}catch(Exception $e){
 						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 						echo'<br/> erreur : '.$e->getMessage();
 						echo'<br/> trace : '.$e->getTraceAsString();
 					}
 				}
 				/*changer presentation anglais - change english presentation*/
 				if(isset($tab["textEn2"]) && !empty($tab["textEn2"])){
 					$tab["textEn2"] = trim(filter_var($tab["textEn2"], FILTER_SANITIZE_STRING));
 					try{
 						$requete="UPDATE program SET prog_text_en=? WHERE prog_id='".$id."'";
 						$stmt=$this->bdd->prepare($requete);
 						$stmt->execute(array($tab["textEn2"]));
 						// echo "<br/> apres update texte anglais, code d'erreur: ".$stmt->errorCode();
 						$stmt->closeCursor();
 					}catch(Exception $e){
 						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 						echo'<br/> erreur : '.$e->getMessage();
 						echo'<br/> trace : '.$e->getTraceAsString();
 					}
 				}

				/*definir des types - define types*/
				if(isset($tab["conf"]) && !empty($tab["conf"])){
					try{
						$requeteInit2="DELETE FROM kind WHERE kind_prog=? AND kind_name=?";;
						$stmtInit2=$this->bdd->prepare($requeteInit2);
						$stmtInit2->execute(array($id,$tab["conf"]));
						// echo "<br/> apres delete conf, code d'erreur: ".$stmtInit2->errorCode();
						$stmtInit2->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					try{
						$requete="INSERT INTO kind VALUES (?,?)";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($id,$tab["conf"]));
						// echo "<br/> apres insert conf, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				if(isset($tab["keyn"]) && !empty($tab["keyn"])){
					try{
						$requeteInit2="DELETE FROM kind WHERE kind_prog=? AND kind_name=?";;
						$stmtInit2=$this->bdd->prepare($requeteInit2);
						$stmtInit2->execute(array($id,$tab["keyn"]));
						// echo "<br/> apres delete keyn, code d'erreur: ".$stmtInit2->errorCode();
						$stmtInit2->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					try{
						$requete="INSERT INTO kind VALUES (?,?)";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($id,$tab["keyn"]));
						// echo "<br/> apres insert keyn, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				if(isset($tab["atel"]) && !empty($tab["atel"])){
					try{
						$requeteInit2="DELETE FROM kind WHERE kind_prog=? AND kind_name=?";;
						$stmtInit2=$this->bdd->prepare($requeteInit2);
						$stmtInit2->execute(array($id,$tab["atel"]));
						// echo "<br/> apres delete atel, code d'erreur: ".$stmtInit2->errorCode();
						$stmtInit2->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					try{
						$requete="INSERT INTO kind VALUES (?,?)";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($id,$tab["atel"]));
						// echo "<br/> apres insert atel, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}
				if(isset($tab["trde"]) && !empty($tab["trde"])){
					try{
						$requeteInit2="DELETE FROM kind WHERE kind_prog=? AND kind_name=?";;
						$stmtInit2=$this->bdd->prepare($requeteInit2);
						$stmtInit2->execute(array($id,$tab["trde"]));
						// echo "<br/> apres delete trde, code d'erreur: ".$stmtInit2->errorCode();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					try{
						$requete="INSERT INTO kind VALUES (?,?)";
						$stmt=$this->bdd->prepare($requete);
						$stmt->execute(array($id,$tab["trde"]));
						$stmtInit2->closeCursor();
						// echo "<br/> apres insert trde, code d'erreur: ".$stmt->errorCode();
						$stmt->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
				}

				/*associer des intervenants - combine interventions*/
				if(isset($tab["interv"]) && !empty($tab["interv"])){
					try{
						$requeteInit1="SELECT prog_speak FROM program WHERE prog_id=?";;
						$stmtInit1=$this->bdd->prepare($requeteInit1);
						$stmtInit1->execute(array($id));
						// echo "<br/> apres select speak, code d'erreur: ".$stmt->errorCode();
						while($ligne=$stmtInit1->fetch(PDO::FETCH_NUM)){
							$speak=$ligne[0];
						}
						$stmtInit1->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					try{
						$requeteInit2="DELETE FROM intervention WHERE inter_prog=?";;
						$stmtInit2=$this->bdd->prepare($requeteInit2);
						$stmtInit2->execute(array($id));
						// echo "<br/> apres delete interv, code d'erreur: ".$stmt->errorCode();
						$stmtInit2->closeCursor();
					}catch(Exception $e){
						echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
						echo'<br/> erreur : '.$e->getMessage();
						echo'<br/> trace : '.$e->getTraceAsString();
					}
					foreach ($tab["interv"] as $key => $value) {
						if($value!=$speak){//verif si l'intervenant n'est pas deja speaker
							try{
								$requete="INSERT INTO intervention VALUES (?,?)";
								$stmt=$this->bdd->prepare($requete);
								$stmt->execute(array($value,$id));
								// echo "<br/> apres insert interv, code d'erreur: ".$stmt->errorCode();
								$stmt->closeCursor();
							}catch(Exception $e){
								echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
								echo'<br/> erreur : '.$e->getMessage();
								echo'<br/> trace : '.$e->getTraceAsString();
							}
						}
					}
				}
 				// return true;
 				$str="Le programme a bien été modifié.";
 				return new Message($str);
 			}
 			$stmtInit->closeCursor();
 			// return false;
 			$str="Pas de champ renseigné. Le programme n'a pas été modifié.";
 			return new Message($str);
 		}elseif(isset($titreFr) && isset($theme)){
 			$tab["textFr"]= trim(filter_var($tab["textFr"], FILTER_SANITIZE_STRING));
 			$tab["titreEn"]= trim(filter_var($tab["titreEn"], FILTER_SANITIZE_STRING));
 			$tab["textEn"]= trim(filter_var($tab["textEn"], FILTER_SANITIZE_STRING));
 			$tab["speaker"] = trim(filter_var($tab["speaker"], FILTER_SANITIZE_NUMBER_INT));
 			/*insertion prog*/
 			try{
 				$requete="INSERT INTO program VALUES (DEFAULT,?,?,?,?,?,?)";
 				$stmt=$this->bdd->prepare($requete);
 				$stmt->execute(array($theme,$titreFr,$tab["titreEn"],$tab["textFr"],$tab["textEn"],$tab["speaker"]));
 				// echo "<br/> apres insert, code d'erreur: ".$stmt->errorCode();
 				$stmtInit->closeCursor();
 				$stmt->closeCursor();
 			} catch(Exception $e){
 				echo'il y a une erreur dans la methode insertProg. Ligne : '.$e->getLine();
 				echo'<br/> erreur : '.$e->getMessage();
 				echo'<br/> trace : '.$e->getTraceAsString();
 			}
 			// return true;
 			$str="Le programme ".$titreFr." a bien été enregistré.";
 			return new Message($str);
 		}else{
 			// return false;
 			$str="Le programme a déjà été enregistré, veuillez renseigner le formulaire de modification ci-dessous.";
 			return new Message($str);
 		}
 	}/*fin insertProg*/

/*Supprime le programme identifie - delete an identify program*/
	public function deleteProg($tab){
		try{
			if(isset($tab["progSup"]) && !empty($tab["progSup"])){
				// echo"<br/> progSup: ".$tab["progSup"];
				/*suppression des interventions - delete interventions*/
				$requete="DELETE FROM intervention WHERE inter_prog=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["progSup"]));
				// echo "<br/> apres delete programme inter, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				/*suppression des types - delete the kinds*/
				$requete="DELETE FROM kind WHERE kind_prog=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["progSup"]));
				// echo "<br/> apres delete programme kind, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				/*suppression dans le slot - delete in the slot*/
				$requete="UPDATE slot SET slot_prog=? WHERE slot_prog=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array("null",$tab["progSup"]));
				// echo "<br/> apres update programme slot, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				/*suppression du programme - delete program*/
				$requete="DELETE FROM program WHERE prog_id=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["progSup"]));
				// echo "<br/> apres delete programme, code d'erreur: ".$stmt->errorCode();
				$stmt->closeCursor();
				$str="Le programme a été supprimé.";
				return new Message($str);
			}
			$str="Le programme n'a pas été supprimé!";
			return new Message($str);
		} catch(Exception $e){
			echo'il y a une erreur dans la methode insertStand. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les titres des programme par ordre alphabetique*/
	public function getProg(){
		try{
			$requete="SELECT prog_id, prog_theme, prog_title_fr FROM program ORDER BY prog_title_fr ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
				echo "<option value='".$ligne[0]."'>".$ligne[2]." ".strtoupper($ligne[1])."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getProg. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Affiche la ligne d'option avec les numeros de slot - Displays the option line with the slot numbers*/
	public function getSlot(){
		try{
			$requete="SELECT slot_id,slot_prog FROM slot ORDER BY slot_id ASC";
			$stmt=$this->bdd->prepare($requete);
			$stmt->execute(array());
			while($ligne=$stmt->fetch(PDO::FETCH_NUM)){
					echo "<option name='' value='".$ligne[0]."'>".$ligne[0]."</option>";
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode getSlot. Ligne : '.$e->getLine();
			echo'<br/> erreur : '.$e->getMessage();
			echo'<br/> trace : '.$e->getTraceAsString();
		}
	}

/*Configure un slot*/
	public function insertSlot($tab){
		try{
			if(isset($tab["slot4"]) && isset($tab["salle4"]) && isset($tab["prog4"])){
				if($tab["prog4"]=="none"){
					$tab["prog4"]=null;
					$tab["salle4"]=null;
				}
				$requete="UPDATE slot SET slot_room=?,slot_prog=? WHERE slot_id=?";
				$stmt=$this->bdd->prepare($requete);
				$stmt->execute(array($tab["salle4"],$tab["prog4"],$tab["slot4"]));
				// echo "<br/> apres update de slot, code d'erreur: ".$stmt->errorCode();
				// return true;
				$str="Le slot ".$tab["slot4"]." a été configuré";
				return new Message($str);
			}else{
				// return false;
				$str="Le slot n'a pas été configuré!";
				return new Message($str);
			}
		} catch(Exception $e){
			echo'il y a une erreur dans la methode insertSlot. Ligne : '.$e->getLine();
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
	}

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

}/*fin classe Action*/
?>
