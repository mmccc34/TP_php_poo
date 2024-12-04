<?php

//Déclaration du NameSpace
namespace Christophe\Poo;





class Card
{
    // Déclaration des propriétés privées
    private $question;
    private $answer;

    // Constructeur pour initialiser les valeurs de $question et $answer
    public function __construct($question, $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    // Méthode publique pour obtenir la question
    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    // Méthode publique pour obtenir la réponse
    public function getAnswer()
    {
        return $this->answer;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }
}

