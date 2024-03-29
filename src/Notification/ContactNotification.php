<?php
namespace App\Notification;

use App\Entity\Contact;
use Twig\Environment;

class ContactNotification {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(Contact $contact) {
        $message = (new \Swift_Message('Demande de contact'))
            ->setFrom('no-reply@amediasolutions.fr')
            ->setTo('adrien.durmier@amediasolutions.fr')
            ->setReplyTo($contact->getEmail())
            ->setBody($this->renderer->render('contact/email.html.twig', [
                'contact'   =>  $contact
            ]), 'text/html')
        ;
        $this->mailer->send($message);
    }
}