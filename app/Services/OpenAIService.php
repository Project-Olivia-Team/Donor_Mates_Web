<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class OpenAIService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('OPENAI_API_KEY');
    }

    public function getResponse($prompt)
    {
        try {
            $response = $this->client->post('https://api.openai.com/v1/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'text-davinci-003',
                    'prompt' => $prompt,
                    'max_tokens' => 150,
                ],
            ]);

            $responseBody = json_decode($response->getBody()->getContents(), true);
            Log::info('OpenAI response body: ' . json_encode($responseBody));
            return $responseBody;
        } catch (RequestException $e) {
            Log::error('Error in OpenAIService: ' . $e->getMessage());
            throw $e;
        }
    }
}
