<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $message]
            ],
        ]);

        // Tambahkan dd untuk debugging
        dd($response->json());

        $botResponse = $response->json()['choices'][0]['message']['content'] ?? 'Error';

        return response()->json(['choices' => [['message' => ['content' => $botResponse]]]]);
    }
}
 ?>