<?php

function conectarDB(): mysqli
{
  $db = mysqli_connect("localhost", "root", "", "bienesraices_crud");
  if (!$db) {
    echo "Erro no se pudo conectar";
    exit;
  }

  return $db;
}