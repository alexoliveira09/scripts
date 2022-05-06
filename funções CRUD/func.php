<?php
/*
 * Função para inserir dados na tabela
 */

function create($tabela, array $datas) {
   $fields = implode(", ", array_keys($datas));
   $values = "'" . implode("', '", array_values($datas)) . "'";
   $qrCreate = "INSERT INTO {$tabela} ($fields) VALUES ($values)";
   $stCreate = mysql_query($qrCreate) or die("Erro ao cadastrar tabela " . $tabela);

   if ($stCreate) {
      return true;
   }
}

$datas = array(
    "titulo" => "Titulo 2",
    "content" => "Conteudo do artigo 2",
    "data" => date("Y-m-d H:i:s")
);


$cadastra = create('tabela', $datas);


if ($cadastra) {
   echo 'Cadastro realizado com sucesso!';
}


/*
 * Função para selecionar dados da tabela
 */

function select($tabela, array $datas) {
   $fields = implode(", ", array_keys($datas));
   $values = "'" . implode("', '", array_values($datas)) . "'";
   $qrCreate = "INSERT INTO {$tabela} ($fields) VALUES ($values)";
   $stCreate = mysql_query($qrCreate) or die("Erro ao cadastrar tabela " . $tabela);

   if ($stCreate) {
      return true;
   }
}

$datas = array(
    "titulo" => "Titulo 2",
    "content" => "Conteudo do artigo 2",
    "data" => date("Y-m-d H:i:s")
);


$cadastra = create('tabela', $datas);


if ($cadastra) {
   echo 'Cadastro realizado com sucesso!';
}