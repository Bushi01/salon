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
class Connection{

		private $hote;
		private $bd;
		private $charset;
		private $user;
		private $password;

	// public function __construct($hote, $bd, $charset, $user, $password){
	// 	$this->hote=$hote;
	// 	$this->bd= $bd;
	// 	$this->charset=$charset;
	// 	$this->user=$user;
	// 	$this->password=$password;
	// }

	public function __construct(){
		$this->hote="OVH.net";
		$this->bd="truc";
		$this->charset="utf8";
		$this->user="truc";
		$this->password="passW";
	}

	public function dbconnect(){
	  try{
			return new PDO('mysql:host='.$this->hote.';dbname='.$this->bd.';charset='.$this->charset, $this->user, $this->password);
			// return new PDO('mysql:host='.$this->hote.';dbname='.$this->bd.';charset=uft8', $this->user, $this->password);
		} catch(Exception $e){
			print_r($e);
		}

	}
}
?>
