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
class Login{
		private $bdd;

		public function __construct($bdd){
			$this->bdd=$bdd->dbconnect();
		}

		/*fonction de log pour le back*/
		public function login($user,$mdp){
			try{
				if(!empty($user)&&!empty($mdp)){
					$user= trim(filter_var($user, FILTER_SANITIZE_STRING));
					$mdp= trim(filter_var($mdp, FILTER_SANITIZE_STRING));
					$requete="SELECT log_mdp FROM log WHERE log_nom=?";
					$stmt=$this->bdd->prepare($requete);
					$stmt->execute(array($user));
					// echo "<br/> rowcount:".$stmt->rowCount();
					if ($stmt->rowCount()==1){
						$ligne=$stmt->fetch(PDO::FETCH_NUM);
						$hash=$ligne[0];
						if (password_verify($mdp, $hash)) {
						    // echo '<br/>Le mot de passe est valide !';
								/*stockage des variables dans la session*/
								$_SESSION['login']=$user;
								$stmt->closeCursor();
								/*redirection*/
								header ('location:back-entity.php');
								return true;
						}else {
						    // echo '<br/>Le mot de passe est invalide.';
						}
					}elseif($stmt->rowCount()>1){
						// echo"Il y a plusieurs entrées pour cet utilisateur";
						$stmt->closeCursor();
						return false;
					}else{
						// echo"autres erreurs";
						$stmt->closeCursor();
						return false;
					}
				}else{
					// echo"champs vides";
					$stmt->closeCursor();
					return false;
				}
			}catch(Exeption $e){
				echo'il y a une erreur dans la methode login. Ligne : '.$e->getLine();
				echo'<br/> erreur : '.$e->getMessage();
				echo'<br/> trace : '.$e->getTraceAsString();
			}
		}

}/*fin classe Login*/
?>
