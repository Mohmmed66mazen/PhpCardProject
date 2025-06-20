<?php


  class  CardHandler
{
    

    public static function displayCards()
    {
     echo '<h1>Card List</h1>';  
    }

    public static function addCard($card)
    {
        // Logic to add a card
        // This would typically involve calling a method on the repository
        // e.g., $this->cardRepository->add($card);
    }

    public static function updateCard($card)
    {
        // Logic to update a card
        // e.g., $this->cardRepository->update($card);
    }

    public static function deleteCard($cardId)
    {
        // Logic to delete a card
        // e.g., $this->cardRepository->delete($cardId);
    }
}