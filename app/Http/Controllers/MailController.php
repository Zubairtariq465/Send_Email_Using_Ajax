<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        
        
       $data = [
            'name' => 'Zubair Tariq',
            'message' => 'This is a test email from Laravel.'
        ];

        // Send the email
        $email = new SendEmail($data);
        Mail::to('zubairtariq465@gmail.com')->send($email);

        return  'Email sent successfully!';
    }
}  