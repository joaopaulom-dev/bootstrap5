<?php include_once 'cima.php'; ?>

<h3>Curso Bootstrap João Ribeiro</h3>

<!-- Pega links das aulas do curso -->
<ul>
    <li><a href="index.php?p=001">001</a>
    <li><a href="index.php?p=002">002</a>
    <li><a href="index.php?p=003">003</a>
    <li><a href="index.php?p=004">004</a>
    <li><a href="index.php?p=005">005</a>
    <li><a href="index.php?p=006">006</a>
</ul>
<hr>

<?php
if(!empty($_GET['p'])){
    //Pega html e apresenta na tela
    include_once $_GET['p'].'/aula.php';
}
?>

<?php include_once 'baixo.php'; ?>