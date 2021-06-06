<div class="tirulo">Tipo string</div>

<?php

echo 'Eu su uma string';
echo '<br>';
var_dump("Eu tambem"); //problema com acentos
echo '<br>';

//concatenação
echo "Nós também " . 'somos' . '<br>';
echo('Número é ' . 123);
echo '<br>';

echo "'Teste' " . '"Teste" ' . '\'teste\' ';

print("<br>Também tem o print"); 

//algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantas palavras');
echo '<br>' . mb_strlen('eu também', "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>';
echo '<br>' . str_replace ('isso', 'aquilo', "Trocar isso");