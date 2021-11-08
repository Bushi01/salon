<!DOCTYPE html>
<!--
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
-->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="B-boost, fallback">
        <meta name="keywords" content="offline, hors connection,fallback, bienvenue, B-boost, open source, salon, event, open source, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost fallback</title>

        <?php
        include("headerEn.php");
        ?>
    </head>

    <body>
      <?php
      $a="../fallback.php";
      include("navbarEn.php");
      ?>
      <div class="container center-align">
        <div class="row">
          <h1 class="center-align">OOPS ...</h1>
          <p class="center-align"><b>It seems that you are not connected to the Internet.</b></p>
          <i class="fas fa-wifi fa-3x center-align">wifi_lock</i>
          <!-- <i class="large material-icons center-align">wifi_lock</i> -->
          <h3 class="center-align">The page you have loaded cannot be read without a connection.</h3>
          <p class="center-align">Please click below if you wish to be redirected to the home page :</p>
          <a href="../accueilEn.php" class="btn">Home</a>
        </div>
      </div>

      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
