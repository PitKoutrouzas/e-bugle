<?php

namespace App\Providers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('validcaptcha', function($attribute, $value, $parameters) {
            return $this->validateCAPTCHA($value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Validate if CAPTCHA has score > 0.5 hence possibly is not a bot.
     *
     * @return bool
     */
    protected function validateCAPTCHA($token){

        $client = new Client;
        try {
            $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret'=> env('CAPTCHA_SECRET'),
                    'response'=> $token
                ]
            ]);

            $responseParams = json_decode($response->getBody()->getContents());
            if ($responseParams->success){
                if ($responseParams->score >= 0.5){
                    return true;
                } else return false;
            } else return false;
        } catch (GuzzleException $e) {
            return false;
        }
    }
}
