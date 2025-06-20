<?php
require_once __DIR__ . '/../../service/CheckSession.php';



switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        if (isset($_GET['id']))  require_once __DIR__ . '/../../featurs/cards/displayCard.php';
        else require_once __DIR__ . '/../../featurs/cards/displayAllCards.php';
        break;
    case 'POST':
        require_once __DIR__ . '/../../featurs/cards/addCard.php';
        break;
    default:
        echo 'unsupported';}
?>

