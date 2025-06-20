<?php
require_once __DIR__ . '/../../Repostory/CardRepostory.php';

$cards = CardRepostory::getAll();
if (count($cards) > 0) {
    echo '<div class="row">';
    foreach ($cards as $card) {
        echo '<div class="col-md-4 mb-4">';
        echo '<div class="card h-100">';
        echo '<img src="' . htmlspecialchars($card->filePath) . '" class="card-img-top" alt="' . htmlspecialchars($card->name) . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($card->name) . '</h5>';
        echo '<p class="card-text">Admin ID: ' . htmlspecialchars($card->adminId) . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No cards available.</p>';
}
