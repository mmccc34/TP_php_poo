<?php

require_once __DIR__ . '/vendor/autoload.php';

use Christophe\Poo\Card;
use Christophe\Poo\ListCards;

// Demander à l'utilisateur combien de cartes il souhaite ajouter
echo "Combien de cartes voulez-vous ajouter ? ";
$nbCards = trim(fgets(STDIN));

// Vérifier que l'utilisateur a bien entré un entier positif
while (!is_numeric($nbCards) || $nbCards <= 0) {
    echo "Veuillez entrer un nombre entier positif : ";
    $nbCards = trim(fgets(STDIN));
}

// Créer une instance de ListCards
$listCards = new ListCards();

// Ajouter les cartes demandées
for ($i = 1; $i <= $nbCards; $i++) {
    echo "Entrez une question pour la carte $i : ";
    $question = trim(fgets(STDIN));
    echo "Entrez une réponse à la question : ";
    $answer = trim(fgets(STDIN));
    echo "--------------------------\n";

    // Créer une nouvelle carte et l'ajouter à la liste
    $card = new Card($question, $answer);
    $listCards->addCard($card);
}

// Afficher les informations des cartes
echo "\nListing des cartes :\n\n";
$listCards->printCardsInfo();

