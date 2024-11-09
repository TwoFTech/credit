<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NouvelleDemandeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $demande;

    /**
     * Create a new message instance.
     *
     * @param $demande
     */
    public function __construct($demande)
    {
        $this->demande = $demande;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('your-email@example.com')
                    ->subject('Confirmation de votre demande de prêt')
                    ->view('emails.nouvelle_demande') // Assurez-vous de créer cette vue
                    ->with([
                        'montant' => $this->demande->montant,
                        'nom' => $this->demande->user->nom, // Utilisation de $demande->user->nom si 'nom' est dans le modèle User
                    ]);
    }
}
