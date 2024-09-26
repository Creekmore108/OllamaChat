<?php

namespace App\AI;

use Cloudstudio\Ollama\Facades\Ollama;

class Ochat
{

    public function send(string $message)
    {
        $response = Ollama::model('llama3.1')
            ->prompt($message)
            ->options(['temperature' => 0.8])
            // ->format('json')
            ->stream(false)
            ->ask();

        return $response;
    }
}
