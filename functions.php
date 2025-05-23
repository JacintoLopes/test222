<?php
// functions.php

// Récupère le nom de la machine
$hostname = gethostname();

// Récupère l'IP du client
function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    }
    if (!empty($_SERVER['REMOTE_ADDR'])) {
        return $_SERVER['REMOTE_ADDR'];
    }
    return 'IP non disponible';
}

// Récupère l’utilisateur système
function get_system_user() {
    return getenv('USER') ?: (getenv('USERNAME') ?: get_current_user());
}

$client_ip   = get_client_ip();
$system_user = get_system_user();

// Adresse en fonction de l’utilisateur
switch (strtolower($system_user)) {
    case 'jacinto':
        $user_address = 'AV de la gare 5';
        break;
    case 'carol':
        $user_address = 'feijodada';
        break;
    case 'fredetic':
        $user_address = 'salayar';
        break;
    default:
        $user_address = 'Non spécifiée';
}