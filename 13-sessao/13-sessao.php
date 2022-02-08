<?php
    session_start();
    
    $_SESSION['nome'] = "Edson";
    $_SESSION['idade'] = 39;

    echo "<h2>Sessão:</h2>";

    echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos <br>";

    echo "ID " . session_id();
    