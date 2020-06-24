<?php

$aluno = array(
    "aluno1" => array("Nome" => "Ana Clara Fernandes", "Cidade" => "São Paulo", "P1" => 7.0, "P2" => 5.0),
    "aluno2" => array("Nome" => "Bruno Silva Junior ", "Cidade" => "Santo André", "P1" => 4.0, "P2" => 5.0),
    "aluno3" => array("Nome" => "Claudio Dias", "Cidade" => "São Paulo", "P1" => 8.0, "P2" => 4.0),
    "aluno4" => array("Nome" => "Diana Souza Melo", "Cidade" => "São Caetano", "P1" => 6.0, "P2" => 5.0)
);


print_r($aluno["aluno1"]["Nome"]);
print_r($aluno["aluno1"]["Cidade"]);
print_r($aluno["aluno1"]["P1"]);
print_r($aluno["aluno1"]["P2"]);

echo "</br>";

print_r($aluno["aluno2"]["Nome"]);
print_r($aluno["aluno2"]["Cidade"]);
print_r($aluno["aluno2"]["P1"]);
print_r($aluno["aluno2"]["P2"]);

echo "</br>";

print_r($aluno["aluno3"]["Nome"]);
print_r($aluno["aluno3"]["Cidade"]);
print_r($aluno["aluno3"]["P1"]);
print_r($aluno["aluno3"]["P2"]);

echo "</br>";

print_r($aluno["aluno4"]["Nome"]);
print_r($aluno["aluno4"]["Cidade"]);
print_r($aluno["aluno4"]["P1"]);
print_r($aluno["aluno4"]["P2"]);
