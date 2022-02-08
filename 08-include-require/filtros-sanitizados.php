<?php
	// FILTROS VALIDATE APOS SANITIZAR

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$erros [] = "E-mail inválido";
	}

	if(!filter_var($idade, FILTER_VALIDATE_INT)) {
		$erros [] = "Idade inválida";
	}

	if(!filter_var($peso, FILTER_VALIDATE_FLOAT)) {
		$erros [] = "Peso inválido";
	}
