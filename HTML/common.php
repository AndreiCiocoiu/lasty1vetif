<?php
function outputHeader($title){
  echo '<!DOCTYPE html>';
  echo '<html>';
  echo '<head>';
  echo '<title>' . $title . '</title>';
  echo '<!-- Link to external style sheet -->';
  echo '<link rel="stylesheet" type="text/css" href="../CSS/try1.css">';
  echo '</head>';
  echo '<body>';
}

function logo(){
 echo '<h1 class="Logo">
Tic-Tac
</h1>' ;
}

function navbar(){
  echo '<button><a href="Gamepahe.php" class="navigationbar">Game</a></button>
  <button><a href="Instructions.php" class="navigationbar">Instructions</a></button>
  <button><a href="Register2.php" class="navigationbar">Register</a></button>
  <button><a href="leaderboard.php" class="navigationbar">Leader Board</a></button>
  <button><a href="Index.php" class="navigationbar">Home</a></button>' ;
}

function footer(){
echo'<div class="footer" id="footer1">
<div class="contact">
    <h3>Tic Tac</h3>
    <p>Tic tac is a website created by Andrei Ciocoiu where people can play Tic tac toe<br>
        earn points and check their ranking for weekly prices.
    </p> 
</div>' ;
}