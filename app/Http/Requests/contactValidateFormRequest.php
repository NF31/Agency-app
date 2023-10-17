<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactValidateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'regex:/^[A-Z][a-zA-Z\s]*$/', 'max:255', 'min:5', 'alpha','not_regex:/[!@#$%^&*(),.?":{}|<>]/'],
            'lastname' => ['required', 'regex:/^[A-Z][a-zA-Z\s]*$/', 'max:255', 'alpha','not_regex:/[!@#$%^&*(),.?":{}|<>]/'],
            'email' => ['required', 'email', 'regex:/^.+@.+\..+$/i', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'regex:/^[0-9]*$/', 'max:10', 'min:10'],
            'phone' => ['required', 'regex:/^[0-9]*$/', 'max:10', 'min:10'],
            'subject' => ['required', 'max:255'],
            'message' => ['required', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            // Règles de validation pour le champ prénom
            'firstname.required' => 'The first name is required.',
            'firstname.regex' => 'The first name must start with a capital letter and contain only letters and spaces.',
            'firstname.max' => 'The first name must not exceed 255 characters.',
            'firstname.min' => 'The first name must be at least 5 characters long.',
            'firstname.alpha' => 'The first name must contain only letters.',
            'firstname.regex' => 'The first name must start with a capital letter and contain only letters and spaces.',

            // Règles de validation pour le champ nom de famille
            'lastname.required' => 'The last name is required.',
            'lastname.regex' => 'The last name must start with a capital letter and contain only letters and spaces.',
            'lastname.max' => 'The last name must not exceed 255 characters.',
            'lastname.alpha' => 'The last name must contain only letters.',
            'lastname.regex' => 'The last name must start with a capital letter and contain only letters and spaces.',

            // Règles de validation pour le champ adresse e-mail
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be in a valid format.',
            'email.regex' => 'The email address is not valid.',
            'email.max' => 'The email address must not exceed 255 characters.',
            'email.unique' => 'This email address is already in use.',

            // Règles de validation pour le champ numéro de téléphone
            'phone.required' => 'The phone number is required.',
            'phone.regex' => 'The phone number must contain only digits and have exactly 10 digits.',
            'phone.max' => 'The phone number must not exceed 10 digits.',
            'phone.min' => 'The phone number must have at least 10 digits.',

            // Règles de validation pour le champ sujet
            'subject.required' => 'The subject is required.',
            'subject.max' => 'The subject must not exceed 255 characters.',

            // Règles de validation pour le champ message
            'message.required' => 'The message is required.',
            'message.max' => 'The message must not exceed 255 characters.',
        ];
    }
}
