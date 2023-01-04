<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function __construct()
    {
    }

    public function index(CompanyRepository $company, Request $request)
    {
        $companies = $company->pluck();
        $contacts = Contact::latest()->get();

        return view('contacts.index', ['contacts' => $contacts, 'companies' => $companies]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.show')->with('contact', $contact);
    }
}
