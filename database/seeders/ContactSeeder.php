<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactModel;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactModel::create([
            'name' => 'Christopher Watson',
            'email' => 'Chris@gmail.com',
            'phone' => '18792345673',
            'subject' => 'Sea Food',
            'message' => ' Do you Offer crabs that are alive '
        ]);
        ContactModel::create([
            'name' => 'Angella Marston',
            'email' => 'angella@gmail.com',
            'phone' => '18792345673',
            'subject' => 'Fruits',
            'message' => 'I woukd like to portner with you guys to get fresh suply for my business'
        ]);
        ContactModel::create([
            'name' => 'Mark Williams',
            'email' => 'mark@gmail.com',
            'phone' => '18792345673',
            'subject' => 'Sea Food',
            'message' => ' Do you Offer crabs that are already cooked '
        ]);
        ContactModel::create([
            'name' => 'Wayne Watson',
            'email' => 'wayne@gmail.com',
            'phone' => '18792345673',
            'subject' => 'Sea Food',
            'message' => ' Do you Offer crabs that are alive '
        ]);
        ContactModel::create([
            'name' => 'June Thomas',
            'email' => 'june@gmail.com',
            'phone' => '18792345673',
            'subject' => 'Sea Food',
            'message' => ' Do you Offer crabs that are alive '
        ]);
        ContactModel::create([
            'name' => 'Samie Mark',
            'email' => 'Samie@gmail.com',
            'phone' => '18792345673',
            'subject' => 'Sea Food',
            'message' => ' Do you Offer crabs that are alive '
        ]);
    }
    }

