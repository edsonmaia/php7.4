<?php
    session_start(); // iniciar a sessão
    session_unset(); // limpar as variáveis de sessão
    session_destroy(); // destruir ou finalizar a sessão

    echo "<p>Logout</p>";
