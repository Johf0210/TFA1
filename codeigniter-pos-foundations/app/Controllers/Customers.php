<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Alicia Santos', 'email' => 'alicia.santos@example.com', 'phone' => '0917-555-0101'],
            ['full_name' => 'Brian Reyes', 'email' => 'brian.reyes@example.com', 'phone' => '0917-555-0102'],
            ['full_name' => 'Camille Cruz', 'email' => 'camille.cruz@example.com', 'phone' => '0917-555-0103'],
            ['full_name' => 'Daniel Garcia', 'email' => 'daniel.garcia@example.com', 'phone' => '0917-555-0104'],
            ['full_name' => 'Erika Mendoza', 'email' => 'erika.mendoza@example.com', 'phone' => '0917-555-0105'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
