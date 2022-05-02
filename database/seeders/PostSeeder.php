<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\PostModel;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostModel::create([
            'image' => 'https://th.bing.com/th/id/R.070eb703f0cd81312ece899d9d6c7e10?rik=iBoF%2b0jumxqXTA&riu=http%3a%2f%2fsynapsetrading.com%2fwp-content%2fuploads%2f2016%2f12%2frich-people.jpg&ehk=WqzH%2bH1jG9Zv3tMY3wrrO6e2%2bcroyjvG5iVglH8KL6w%3d&risl=&pid=ImgRaw&r=0',
            'name' => 'Lilchris',
            'description' => 'We Bride The Gap Between Fisherman And Customers By Delivering Fresh Catch That Every One Can Apreciate. We Do The Hard Job Of Scalling Picking And Shelling, Which Is Why Our Customers Love Our Service.'
        ]);
        PostModel::create([
            'image' => 'https://th.bing.com/th/id/R.61302bcc32c8734c0ef519af095d7765?rik=BqOo4yMRVYmEdw&riu=http%3a%2f%2fimages.huffingtonpost.com%2f2015-07-09-1436461255-1818953-rich_people_daily_habits.jpg&ehk=8AreVfmZzdAh8uaFg%2fWH3Nb%2bS9lCsoRydp0R3MBkapA%3d&risl=&pid=ImgRaw&r=0',
            'name' => 'Wayne',
            'description' => 'We Bride The Gap Between Fisherman And Customers By Delivering Fresh Catch That Every One Can Apreciate. We Do The Hard Job Of Scalling Picking And Shelling, Which Is Why Our Customers Love Our Service.'
        ]);
        PostModel::create([
            'image' => 'https://th.bing.com/th/id/R.0ae4b3dc9f20be180d07bf27548610f5?rik=%2bjCNTpF279FSZA&riu=http%3a%2f%2fwww2.pictures.gi.zimbio.com%2fPeople%2bEn%2bEspanol%2b50%2bMost%2bBeautiful%2bPeople%2bXtvI6-P5-DPx.jpg&ehk=VQOn6lhMdnXipiUTgGBaOnl9Pw8hmjMbOAjRhTO4TCA%3d&risl=&pid=ImgRaw&r=0',
            'name' => 'Angella',
            'description' => 'We Bride The Gap Between Fisherman And Customers By Delivering Fresh Catch That Every One Can Apreciate. We Do The Hard Job Of Scalling Picking And Shelling, Which Is Why Our Customers Love Our Service.'
        ]);
        PostModel::create([
            'image' => 'https://media.timesfreepress.com/img/photos/2017/04/03/1491249045_TARVER-2017-0309--ChatterBeautifulPeople-037_t1000_h7742c0ca211024c96f4d262d17b1cecf8f7aa342.jpg',
            'name' => 'Christina',
            'description' => 'We Bride The Gap Between Fisherman And Customers By Delivering Fresh Catch That Every One Can Apreciate. We Do The Hard Job Of Scalling Picking And Shelling, Which Is Why Our Customers Love Our Service.'
        ]);
        PostModel::create([
            'image' => 'https://qph.fs.quoracdn.net/main-qimg-fab35817af734631af5d37d6466db201',
            'name' => 'Lisa',
            'description' => 'We Bride The Gap Between Fisherman And Customers By Delivering Fresh Catch That Every One Can Apreciate. We Do The Hard Job Of Scalling Picking And Shelling, Which Is Why Our Customers Love Our Service.'
        ]);
    }
}
