<?php

namespace Pawanyd\EntireValidation;

use Illuminate\Support\Facades\Http;

class EntireValidation {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}