# Laravel AI Chatbot API with Groq

A fast and simple Laravel REST API for AI chat, powered by **Groq** using the **Llama-3.1-8b-instant** model for ultra-low latency responses.

Send a message and get intelligent, fast replies powered by Groq's high-speed LLM.

---

## Features

- Lightweight & fast Laravel API
- Integrated with **Groq** using **Llama-3.1-8b-instant** model
- Simple POST `/api/chat` endpoint
- Supports multipart/form-data
- Full **Swagger UI** documentation
- Easy to extend with other models

---

## Requirements

- PHP 8.2+
- Laravel 10 / 11
- Composer
- Groq API Key

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Karthick-kannan-24/laravel-ai-chatbot-api.git
   cd laravel-ai-chatbot-api

2. Install dependencies:
    ```bash
    composer install

3. Copy environment file:
   ```bash
   cp .env.example .env

4. Generate application key:
   ``` bash 
   php artisan key:generate
   ```
5. Add your Groq API key in .env file:
   ```bash
   GROQ_API_KEY=gsk_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
  
6. Start the development server:
   ``` bash 
   php artisan serve
   ```
## Swagger Installation

If you want to set up Swagger API documentation, follow these steps:

1. Install Swagger Package:
   ```bash
   composer require g4t/swagger
   
2. Publish the Swagger Configuration:
   ```bash
   php artisan vendor:publish --provider "G4T\Swagger\SwaggerServiceProvider"
   
3. Generate Swagger Documentation:
   ```bash
   php artisan swagger:generate

After completing these steps, Swagger UI will be available at:
```bash
    http://127.0.0.1:8000/swagger/documentation
```
## Usage Example

**Endpoint:** POST `/api/chat`

**Body:**
  ```bash
    {
      "message": "What is Laravel?"
    }
  ```
**Response:**
   ```bash
    {
      "status": true,
      "message": "Success",
      "data": {
        "reply": ["Laravel is a popular PHP web framework..."]
      }
    }
   ```

## Tech Stack

- Laravel 13
- Groq API
- Llama-3.1-8b-instant model
- g4t/swagger (^4.1)


## License
   This project is open-source and available under the `MIT License`.

   Made with using Laravel 13 + Groq
