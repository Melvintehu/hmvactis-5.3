<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

use App\Http\Requests;

class MailController extends Controller
{
   public function lidWorden($name, $email)
   {

   		$beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.inschrijving', [], function($message) use ($name, $email)
        {
            $message
                ->from('info@hmvactis.nl', 'HMV Actis')
                ->to($email, $name)
                ->subject('Bedankt voor je inschrijving op HMV Actis!');
        });
   }

   public function contactMail(Request $request)
   {

    $name = $request->input('voornaam') . " " . $request->input('achternaam');
    $email = $request->input('emailadres');

    $telefoonnummer = $request->input('telefoonnummer');
    $bericht = $request->input('bericht');

    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.contact', ['telefoonnummer' => $telefoonnummer, 'bericht' => $bericht], function($message) use ($name, $email)
        {
            $message
                ->from($email, $name)
                ->to('bestuur@hmvactis.nl', 'HMV Actis')
                ->subject('Contactbericht van ' . $name);
        });

        return redirect('/');
   }
}
