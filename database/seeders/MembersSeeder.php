<?php

namespace Database\Seeders;

use App\Models\Members;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = new Members();
        $members->name = 'Jorge';
        $members->last_name = 'Gonzalez';
        $members->phone = '5598765432';
        $members->date_born = '2000-04-02';
        $members->idcity = '1';
        $members->save();
    }
}
