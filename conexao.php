<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'testt');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar: {mysqli_connect_errno()} -> {mysqli_connect_error()}');