<?php
require_once __DIR__ . '/../../Repostory/CardRepostory.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$card = CardRepostory::getById($id);
if ($card) {
    echo '<h1>Card Details</h1>';
    echo '<p>ID: ' . htmlspecialchars($card->id) . '</p>';
    echo '<p>Name: ' . htmlspecialchars($card->name) . '</p>';
    echo '<p>File Path: ' . htmlspecialchars($card->filePath) . '</p>';
    echo '<p>Admin ID: ' . htmlspecialchars($card->adminId) . '</p>';
} else {
    echo '<h1>Card not found</h1>';
}
