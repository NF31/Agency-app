<?php

namespace App\Http\Controllers;

use App\Models\MessageContact;
use App\Http\Requests\contactValidateFormRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {

        // Autres logiques pour préparer les données si nécessaire

        // Vérifiez si la session contient un message de succès
        $successMessage = session('success');

        // Chargez la vue et transmitted le message de succès (si présent)
        return view('contact.contact', ['successMessage' => $successMessage]);
    }

    public function form(contactValidateFormRequest $request)
    {
        /*  dd($request); // Récupère toutes les données du formulaire
        $verif = $request;

        if ($verif) {
            echo 'verif is god!';
        } else {
            return redirect()->back();
        }
        Une fois le traitement terminé, vous pouvez rediriger l'utilisateur vers une page de confirmation ou une autre page.
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');*/


        // Récupérez toutes les données validées du formulaire
        $formData = $request->validated();

        // Créez une nouvelle instance de MessageContact
        $message = new MessageContact();

        // Attribuez les valeurs des champs du formulaire aux attributs du modèle
        $message->firstname = $formData['firstname'];
        $message->lastname = $formData['lastname'];
        $message->email = $formData['email'];
        $message->phone = $formData['phone'];
        $message->subject = $formData['subject'];
        $message->message = $formData['message'];

        // Enregistrez le message dans la base de données
        $message->save();

        // Une fois le message enregistré, vous pouvez rediriger l'utilisateur vers une page de confirmation
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function faq () {
        return view('contact.faq');
    }
}
