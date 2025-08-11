<?php

namespace App\Helpers\Mail;

use App\Interface\MailInterface;
use App\Interface\MailSenderInterface;
use Twig\Environment;

class Mail implements MailInterface
{
    private string $to;
    private string $subject;
    private string $body;
    private MailSenderInterface $sender;
    private Environment $twig;

    public function __construct(MailSenderInterface $sender, Environment $twig)
    {
        $this->sender = $sender;
        $this->twig = $twig;
    }
    public function setTo(string $email): MailInterface
    {
        $this->to = $email;
        return $this;
    }

    public function setSubject(string $subject): MailInterface
    {
        $this->subject = $subject;
        return $this;
    }

    public function setBody(string $body): MailInterface
    {
        $this->body = $body;
        return $this;
    }
    public function setBodyFromTemplate(string $templateName, array $data): MailInterface
    {
        $this->body = $this->twig->render($templateName, $data);
        return $this;
    }
    public function send(): bool
    {
        return $this->sender->send($this->to, $this->subject, $this->body);
    }
}