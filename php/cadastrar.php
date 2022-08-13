<?php
//incluir a conexao
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");

//Extrair os dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao, $sql);


//Exportar

$curso = [
  'nomeCurso' => $nomeCurso,
  'valorCurso' => $valorCurso
]

json_encode(['curso']=>$curso);


?>