<?php
require_once "config.php";
echo "antes: " . $_SESSION["nome"] . "<br >";
session_unset($_SESSION["nome"]);
session_destroy();
echo "depois: " . $_SESSION["nome"] . "<br >";