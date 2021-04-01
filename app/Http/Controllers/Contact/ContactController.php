<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\contact\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::where('user_id', Auth::id())
            ->orderBy('name', 'ASC')->paginate(10);

        return view('contacts\contacts_list')->with([
            'contacts' => $contacts
        ]);
    }
}
