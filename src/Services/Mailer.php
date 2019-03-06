<?php


namespace App\Services;

use Symfony\Component\Templating\EngineInterface;
use App\Entity\Commande;

class Mailer
{
    private $mailer;
    protected $templating;
    private $from = 'no-reply@louvre.fr';
    private $reply = 'contact@louvre.fr';
    private $name = 'Musée du Louvre - Billetterie';

    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    public function sendMessage($to, $subject, $body)
    {
        $mail = \Swift_Message::newInstance();

        $mail
            ->setFrom(array($this->from => $this->name))
            ->setTo($to)
            ->setSubject($subject)
            ->setBody($body)
            ->setReplyTo(array($this->reply => $this->name))
            ->setContentType('text/html')
        ;

        $this->mailer->send($mail);
    }

    public function sendOrderSuccess(Commande $commande)
    {
        $subject = "[Musée du Louvre - Billetterie] Votre commande a été validée.";
        $template = 'App:template:form:Mail:commande_ok.html.twig';
        $to = $commande->getMail();
        $body = $this->templating->render($template, array('commande' => $commande));
        $this->sendMessage($to, $subject, $body);
    }
}
