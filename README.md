# Laravel AI Chatbot API with Groq

A fast and simple Laravel REST API for AI chat, powered by **Groq** using the **Llama-3.1-8b-instant** model for ultra-low latency responses.

Send a message and get intelligent, fast replies powered by Groq's high-speed LLM.

---

## Prerequisites

![PHP Version](https://img.shields.io/badge/PHP-%5E8.4.x-blue)
![Laravel Version](https://img.shields.io/badge/Laravel-%5E13-orange)
![Powered by Groq](https://img.shields.io/badge/Powered_by-Groq-00A67E?style=flat-square&logo=groq&logoColor=white)
![Model](https://img.shields.io/badge/Model-Llama_3.1_8B_Instant-FF6B00?style=flat-square)
![g4t/swagger](https://img.shields.io/badge/Swagger-%5E4.1.x-green)

---

## Features

- Lightweight & fast Laravel API
- Integrated with **Groq** using **Llama-3.1-8b-instant** model
- Simple POST `/api/chat` endpoint
- Supports multipart/form-data
- Full Swagger UI documentation
- Easy to extend with other AI models
- Clean and beginner-friendly structure

---

## Requirements

- PHP 8.2+
- Laravel 10 / 11 / 12 / 13
- Composer
- Groq API Key

---

# Installation

## 1. Clone the Repository

```bash
git clone https://github.com/Karthick-kannan-24/laravel-ai-chatbot-api.git

cd laravel-ai-chatbot-api
```

---

## 2. Install Dependencies

```bash
composer install
```

---

## 3. Copy Environment File

```bash
cp .env.example .env
```

---

## 4. Generate Application Key

```bash
php artisan key:generate
```

---

## 5. Get Groq API Key

1. Create or login to your Groq account:

```bash
https://console.groq.com/
```

2. Open API Keys page:

```bash
https://console.groq.com/keys
```

3. Click **Create API Key**

4. Copy your generated API key

---

## 6. Add API Key in `.env`

```env
GROQ_API_KEY=gsk_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

---

## 7. Start Development Server

```bash
php artisan serve
```

Server running at:

```bash
http://127.0.0.1:8000
```

---

# Swagger Installation

If you want Swagger API documentation, follow these steps.

## 1. Install Swagger Package

```bash
composer require g4t/swagger
```

---

## 2. Publish Swagger Configuration

```bash
php artisan vendor:publish --provider="G4T\Swagger\SwaggerServiceProvider"
```

---

## 3. Generate Swagger Documentation

```bash
php artisan swagger:generate
```

---

## Swagger URL

```bash
http://127.0.0.1:8000/swagger/documentation
```

---

# API Usage

## Endpoint

```http
POST /api/chat
```

---

## Request Body

```json
{
  "message": "What is Laravel?"
}
```

---

## Example Response

```json
{
  "status": true,
  "message": "Success",
  "data": {
    "reply": [
      "Laravel is a popular PHP web framework..."
    ]
  }
}
```

---

# Project Structure

```bash
app/
routes/
config/
storage/
```

---

# Tech Stack

- Laravel 13
- PHP 8.4
- Groq API
- Llama-3.1-8b-instant
- Swagger Documentation

---

# License

This project is open-source and available under the MIT License.

---

# Author

Karthick Kannan R

- GitHub: https://github.com/Karthick-kannan-24
- LinkedIn: https://www.linkedin.com/in/karthick-kannan-2421997/
