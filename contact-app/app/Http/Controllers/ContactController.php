<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct()
    {
    }

    public function index(CompanyRepository $company, Request $request)
    {

        $companies = $company->pluck();
        $contacts = [
            ['name' => 'name 1', 'phone' => 'phone 1'],
            ['name' => 'name 2', 'phone' => 'phone 2'],
            ['name' => 'name 3', 'phone' => 'phone 3'],
        ];

        return view('contacts.index', ['contacts' => $contacts, 'companies' => $companies]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show($id)
    {
        return view('contacts.show', ['id' => $id]);
    }
}
