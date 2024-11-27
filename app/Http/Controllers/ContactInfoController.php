<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first(); // Retrieve the first (or only) record from the database
        return view('contact.index', compact('contactInfo'));
    }

    public function update(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'shop_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'fax' => 'nullable|string|max:20',
            'business_hours' => 'required|string|max:255',
            'social_links' => 'nullable|string|max:255',
            'map' => 'nullable|string',
        ]);

        // Update the contact info (assuming there's only one row in the database)
        $contactInfo = ContactInfo::first();
        $contactInfo->update($validated);

        return redirect()->back()->with('success', 'Thông tin liên hệ đã được cập nhật.');
    }
}
