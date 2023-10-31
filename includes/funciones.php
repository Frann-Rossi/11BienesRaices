<?php
require 'app.php';
function incluirTemplade(string $nombre, bool $inicio = false)
{
  include TEMPLADES_URL . "/$nombre.php";
}

function estaAutenticado(): bool
{
  session_start();

  $auth = $_SESSION["login"];
  if ($auth) {
    return true;
  }
  return false;
};