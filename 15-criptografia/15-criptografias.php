<?php
    $senha = 123;

    // BASE64 codifica - decodifica - NAO RECOMENDAVEL
    $senha_base64 = base64_encode($senha);
    $senha_decodificada = base64_decode($senha_base64);

    echo "<p>Senha base64 $senha_base64 </p>";
    echo "<p>Senha decodificada $senha_decodificada </p>";

    // MD5 - codifica
    $senha_md5 = md5($senha);
    echo "<p>Senha md5 $senha_md5 </p>";
    
    // SHA1 - codifica
    $senha_sha1 = sha1($senha);
    echo "<p>Senha md5 $senha_md5 </p>";

    // PASSWORD HASH RECOMENDAVEL
    $senha_com_hash = hash($senha, PASSWORD_DEFAULT);
    echo "<p>Senha com hasc $senha_com_hash </p>";
    