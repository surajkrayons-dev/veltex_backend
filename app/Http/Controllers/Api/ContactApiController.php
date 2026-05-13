<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactEnquiryMail;
use App\Models\ContactEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $enquiry = ContactEnquiry::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ]);

        Mail::to('suraj.krayons@gmail.com')
            ->send(new ContactEnquiryMail($enquiry));

        return response()->json([
            'status' => true,
            'message' => 'Enquiry submitted successfully'
        ]);
    }
}