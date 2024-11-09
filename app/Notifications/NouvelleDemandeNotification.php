<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NouvelleDemandeNotification extends Notification
{
    use Queueable;

    protected $demande;

    public function __construct($demande)
    {
        $this->demande = $demande;
    }

    public function via($notifiable)
    {
        return ['mail', 'database']; // Tu peux également ajouter 'database' ou d'autres canaux
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouvelle demande de prêt')
            ->greeting('Bonjour Prêt Horizon')
            ->line('Une nouvelle demande de prêt a été soumise.')
            ->line('Nom : ' . $this->demande->user->nom )
            ->line('Email : ' . $this->demande->user->email)
            ->line('Montant : ' . $this->demande->montant . ' €')
            ->line('Type prêt : ' . $this->demande->typepret->nompret )
            ->line('Date de création : ' . $this->demande->created_at)
            ->action('Voir la demande', url('/dashboard/demandes/' . $this->demande->id)) // Change l'URL selon ta route
            ->line('Merci de votre attention !');
    }

    public function toDatabase($notifiable)
   {
    return [
        'demandePret_id' => $this->demande->id,
        'nom' => $this->demande->user->nom,
        'montant' => $this->demande->montant,
        'created_at' => $this->demande->created_at,
    ];
   }
}
