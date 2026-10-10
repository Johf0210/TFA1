<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Maria Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Joshua Lim', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Nina Torres', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Owen Navarro', 'role' => 'Manager'],
            ['username' => 'staff01', 'full_name' => 'Paolo Rivera', 'role' => 'Staff'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
