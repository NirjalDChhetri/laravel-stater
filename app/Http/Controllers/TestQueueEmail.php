<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\TestSendEmail;

class TestQueueEmail extends Controller
{
    public function sendTestEmails()
    {
        TestSendEmail::dispatch()->onQueue('Processing');
        return "Message sent Successfully";
    }
}
