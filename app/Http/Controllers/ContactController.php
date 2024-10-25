<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Veri doğrulama
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // XSS koruması için veriyi temizleme
        $validatedData = $validator->validated();
        array_walk_recursive($validatedData, function (&$value) {
            $value = strip_tags($value);
        });

        // Veriyi veritabanına kaydetme
        try {
            Contact::create($validatedData);
            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Bir hata oluştu. Lütfen daha sonra tekrar deneyin.');
        }
    }
}