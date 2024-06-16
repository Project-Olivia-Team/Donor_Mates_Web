<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function sendMessage(Request $request)
    {
        $apiKey = env('OPENAI_API_KEY');
        
        if (!$apiKey) {
            return response()->json(['error' => 'API key is missing. Please set the OPENAI_API_KEY environment variable.'], 500);
        }

        $message = $request->input('message');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $message]
            ],
        ]);

        // cek eror
        // dd($response->json());

        if ($response->failed()) {
            $error = $response->json()['error']['message'] ?? 'An error occurred';
            return response()->json(['error' => $error], 400);
        }

        $botResponse = $response->json()['choices'][0]['message']['content'] ?? 'Mohon maaf openAI sedang limit, mohon coba beberapa saat lagi.';

        return response()->json(['choices' => [['message' => ['content' => $botResponse]]]]);
    }
}

