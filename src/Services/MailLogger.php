<?php 

namespace App\Services;

class MailLogger
{
    private $adminEmail;

    public function __construct($adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }
    private function sendEmail()
    {
        /*...*/
    }
}