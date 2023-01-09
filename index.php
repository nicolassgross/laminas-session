<?php 

include_once "vendor/autoload.php";

use Laminas\Session\Container;
use Laminas\Session\SessionManager;

// Cria a sessão
$sessionManager = new SessionManager();
$sessionManager->start();

// Cria um container de sessão com os dados fornecidos
$session = new Container('usuario');
$session->nome = 'Nicolas';
$session->idade = 21;

// Recupera os dados da sessão
$nome = $session->nome;
$idade = $session->idade;

// Destrói a sessão
$session->getManager()->destroy();