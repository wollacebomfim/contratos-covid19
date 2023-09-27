<?php
define('HOST', 'queirozcavalcanti.adv.br');
define('USUARIO', 'qca');
define('SENHA', 'rfngy7vmMs3ZB6b');
define('DB', 'qca_relatorios');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');