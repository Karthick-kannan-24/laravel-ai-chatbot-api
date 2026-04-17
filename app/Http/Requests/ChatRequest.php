<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'message' => 'required|string|min:2|max:1000'
        ];
    }

    public function messages(): array
    {
        return [
            'message.required' => 'Message is required',
            'message.string' => 'Message must be text',
            'message.min' => 'Message should be at least 2 characters',
        ];
    }
}
