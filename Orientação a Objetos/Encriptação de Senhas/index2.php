<?php

$senha = '1234';

$hash = '$2y$10$brprVNDhEYkz1YQvx8nYDu8Ha56ytLXGaqd415e75Q2wGeaoSVxs6';

if(password_verify($senha, $hash)){
    echo "Senha CORRETA";
} else {
    echo "Senha ERRADA";
}

