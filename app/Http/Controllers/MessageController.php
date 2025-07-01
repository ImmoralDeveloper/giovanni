<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:2000',
            'message' => 'required|string',
        ]);
        
        $ip = $request->ip();
        
        // Obtener datos geográficos
        $geoData = $this->getGeoInfo($ip);

        $messageData = array_merge($validated, [
            'ip' => $ip,
            'user_agent' => $request->header('User-Agent'),
            'locale' => $request->getPreferredLanguage(),
            'country' => $geoData['country'] ?? null,
            'region' => $geoData['region'] ?? null,
            'city' => $geoData['city'] ?? null,
            'timezone' => $geoData['timezone'] ?? null,
        ]);

        Message::create($messageData);

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
    private function getGeoInfo($ip)
{
    try {
        if ($ip === '127.0.0.1') {
            return []; // Para localhost
        }

        // Opción 1: Usando ipinfo.io (necesitas registrarte para obtener token)
        // $response = Http::get("https://ipinfo.io/{$ip}/json", [
        //     'token' => env('IPINFO_TOKEN')
        // ]);
        
        // Opción 2: Usando ip-api.com (gratis sin token)
        $response = Http::get("http://ip-api.com/json/{$ip}");

        if ($response->successful()) {
            $data = $response->json();
            
            // Para ipinfo.io
            // return [
            //     'country' => $data['country'] ?? null,
            //     'region' => $data['region'] ?? null,
            //     'city' => $data['city'] ?? null,
            //     'timezone' => $data['timezone'] ?? null,
            // ];

            // Para ip-api.com

            return [
                'country' => $data['country'] ?? null,
                'region' => $data['regionName'] ?? null,
                'city' => $data['city'] ?? null,
                'timezone' => $data['timezone'] ?? null,
            ];

        }
    } catch (\Exception $e) {
        Log::error("Error getting geo data: " . $e->getMessage());
    }

    return [];
}
    
}
