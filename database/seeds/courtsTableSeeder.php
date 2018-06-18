<?php

use Illuminate\Database\Seeder;

class courtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courts')->insert([
            'name' => 'Court1',
            'adress' => 'Street 1',
            'date' => '2018-12-01',
            'timeFrom' => '10:10:00',
            'timeUntil' => '11:10:00',
            'booked' => '0'
        ]);
        
        DB::table('courts')->insert([
            'name' => 'Court2',
            'adress' => 'Street 2',
            'date' => '2018-12-02',
            'timeFrom' => '10:20:00',
            'timeUntil' => '11:20:00',
            'booked' => '0'
        ]);
        
        DB::table('courts')->insert([
            'name' => 'Court3',
            'adress' => 'Street 3',
            'date' => '2018-12-03',
            'timeFrom' => '10:30:00',
            'timeUntil' => '11:30:00',
            'booked' => '0'
        ]);
        
        DB::table('courts')->insert([
            'name' => 'Court4',
            'adress' => 'Street 4',
            'date' => '2018-12-04',
            'timeFrom' => '10:40:00',
            'timeUntil' => '11:40:00',
            'booked' => '0'
        ]);
        
        DB::table('courts')->insert([
            'name' => 'Court5',
            'adress' => 'Street 5',
            'date' => '2018-12-05',
            'timeFrom' => '10:50:00',
            'timeUntil' => '11:50:00',
            'booked' => '0'
        ]);
        
        DB::table('courts')->insert([
            'name' => 'Court6',
            'adress' => 'Street 6',
            'date' => '2018-12-06',
            'timeFrom' => '10:00:00',
            'timeUntil' => '11:00:00',
            'booked' => '0'
        ]);
    }
}
