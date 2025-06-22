<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{    
	public function store(Request $request)
	{
		// Validate input
		$validated = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:contacts,email',
			'website' => 'nullable|string|max:255',
			'message' => 'required|string',
		]);
		
		if (Contact::where('email', $request->email)->exists()) {
			return response()->json([
				'success' => false,
				'errors' => ['email' => ['This email is already in use.']]
			  ], 422);
			}

		// Save to DB
		Contact::create($validated);

		return response()->json(['success' => true, 'message' => 'Message sent successfully.']);
	}
}

