<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class ReCaptcha implements Rule
{
  /**
   * Create a new rule instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * Determine if the validation rule passes.
   *
   * @param  string  $attribute
   * @param  mixed  $value
   * @return bool
   */
  public function passes($attribute, $value)
  {
    $client = new Client();

    $response = $client->post(
      'https://www.google.com/recaptcha/api/siteverify',
      ['form_params'=>
        [
          'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
          'response' => $value,
          'remoteip' => $_SERVER['REMOTE_ADDR'],
        ]
      ]
    );

    $body = json_decode((string)$response->getBody());
    return $body->success;
  }

  /**
   * Get the validation error message.
   *
   * @return string
   */
  public function message()
  {
    return 'Please ensure that you are a human!';
  }
}