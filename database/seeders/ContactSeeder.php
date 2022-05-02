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
            'name' => 'Snapper',
            'email' => 1000,
            'phone' => 'Red Snapper',
            'subject' => 'https://www.thefishsociety.co.uk/media/image/b3/95/c3/snapper-whole-min.jpg',
            'message' => ' whats up'
        ]);
        ContactModel::create([
            'name' => 'Snapper',
            'email' => 1000,
            'phone' => 'Red Snapper',
            'subject' => 'https://www.thefishsociety.co.uk/media/image/b3/95/c3/snapper-whole-min.jpg',
            'message' => ' You good'
        ]);
        ContactModel::create([
            'name' => 'Snapper',
            'email' => 1000,
            'phone' => 'Red Snapper',
            'subject' => 'https://www.thefishsociety.co.uk/media/image/b3/95/c3/snapper-whole-min.jpg',
            'message' => ' i really  like the stuff'
        ]);
        ContactModel::create([
            'name' => 'Snapper',
            'email' => 1000,
            'phone' => 'Red Snapper',
            'subject' => 'https://www.thefishsociety.co.uk/media/image/b3/95/c3/snapper-whole-min.jpg',
            'message' => ' whats up'
        ]);
        ContactModel::create([
            'name' => 'Snapper',
            'email' => 1000,
            'phone' => 'Red Snapper',
            'subject' => 'https://www.thefishsociety.co.uk/media/image/b3/95/c3/snapper-whole-min.jpg',
            'message' => ' whats up'
        ]);
        ContactModel::create([
            'name' => 'Snapper',
            'email' => 1000,
            'phone' => 'Red Snapper',
            'subject' => 'https://www.thefishsociety.co.uk/media/image/b3/95/c3/snapper-whole-min.jpg',
            'message' => ' whats up'
        ]);
    }
    }

