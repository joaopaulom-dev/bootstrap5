<?php include_once 'cima.php'; ?>

<h2>Curso Bootstrap João Ribeiro</h2>

<!-- Pega links das aulas do curso -->
<ul>
    <li><a href="index.php?p=001">001</a>
</ul>
<hr>

<?php
if(!empty($_GET['p'])){
    //Pega html e apresenta na tela
    include_once $_GET['p'].'/aula.php';
}
?>

<?php include_once 'baixo.php'; ?>