<?php declare(strict_types=1);


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:sendMail,0.5',
        ];
    }
}
