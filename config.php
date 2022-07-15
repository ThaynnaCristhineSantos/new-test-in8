<?php 
  $dbHost = 'localhost';
  $dbUserName = 'hoot';
  $dbPassword = '';
  $dbName ='registrations';

  $conexão = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName)
  if ($conexão->connect_ernno)
  {
    echo "Erro";
  }
  else 
  {
    echo "Conexão efetuada com sucesso";
  }
?>

