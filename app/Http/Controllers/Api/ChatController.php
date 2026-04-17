<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChatRequest;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function chat(ChatRequest $request)    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
            'Content-Type'  => 'application/json',
                ])->withOptions([
                'verify' => false, // disable SSL check
            ])->post('https://api.groq.com/openai/v1/chat/completions', [
                    'model' => 'llama-3.1-8b-instant',
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => $request->message
                        ]

                    ]
                ]);

        if ($response->failed()) {
            return response()->json([
                'error' => 'AI request failed',
                'details' => $response->json()
            ], 500);
        }

        $content = $response['choices'][0]['message']['content'];

        // 1. Remove markdown bold (**text** → text)
        $content = preg_replace('/\*\*(.*?)\*\*/', '$1', $content);

        // 2. Remove single * (for bullet points like * text)
        $content = preg_replace('/^\*\s*/m', '', $content);

        // 3. Remove double quotes
        $content = str_replace('"', '', $content);

        // 4. Remove extra empty lines & trim
        $lines = array_filter(array_map('trim', explode("\n", $content)));

        // 5. Re-index array
        $lines = array_values($lines);

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => [
                'reply' => $lines
            ]
        ]);
    }
}
