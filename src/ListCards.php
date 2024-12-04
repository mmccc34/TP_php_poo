<?php

namespace Christophe\Poo;

class ListCards
{
    // Déclaration de la propriété privée $listCards :  Le tableau de cartes
    private $listCards = [];

    // Méthode pour ajouter une carte à la liste
    public function addCard(Card $card)
    {
        $this->listCards[] = $card;
    }

    // Méthode publique pour afficher les informations de toutes les cartes (par cartes)
    public function printCardsInfo()
    {
        //On parcours le tableau pour afficher l'index (numéro de la carte et l'objet 'card')
        foreach ($this->listCards as $index => $card) {
            echo "Infos sur la carte " . ($index + 1) . " :\n";
            echo "Question: " . $card->getQuestion() . "\n";
            echo "Réponse: " . $card->getAnswer() . "\n\n";
        }
    }
}
