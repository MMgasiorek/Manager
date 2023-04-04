<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content_areas')->insert([
            'name' => 'main',
        ]);

        DB::table('content_areas')->insert([
            'name' => 'about',
        ]);

        DB::table('employeers')->insert([
            'name' => 'Bart',
            'surname' => 'Bartkowski',
            'email' => 'bartek@email.com',
            'phone' => '123123123',
        ]);

        DB::table('employeers')->insert([
            'name' => 'Caroline',
            'surname' => 'Carolinowska',
            'email' => 'karoina@email.com',
            'phone' => '123123123',
        ]);

        DB::table('employeers')->insert([
            'name' => 'Nicodem',
            'surname' => 'Nicodemowski',
            'email' => 'nikodem@email.com',
            'phone' => '123123123',
        ]);

        DB::table('employeers')->insert([
            'name' => 'Kaja',
            'surname' => 'Kajowa',
            'email' => 'kaja@email.com',
            'phone' => '123123123',
        ]);

        DB::table('employeers')->insert([
            'name' => 'Mike',
            'surname' => 'Mikeowski',
            'email' => 'prezydent@email.com',
            'phone' => '123123123',
        ]);

        DB::table('accessories')->insert([
            'name' => 'Needle',
            'amount' => 100,
            'safety_level' => 500,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Mask',
            'amount' => 400,
            'safety_level' => 1000,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Ink',
            'amount' => 300,
            'safety_level' => 500,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Gloves',
            'amount' => 70,
            'safety_level' => 500,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Liquid',
            'amount' => 120,
            'safety_level' => 1000,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Healing',
            'amount' => 220,
            'safety_level' => 1000,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Soap',
            'amount' => 50,
            'safety_level' => 200,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Anesthesia',
            'amount' => 19,
            'safety_level' => 1000,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Calque',
            'amount' => 432,
            'safety_level' => 500,
        ]);
        
        DB::table('accessories')->insert([
            'name' => 'Holder',
            'amount' => 47,
            'safety_level' => 500,
        ]);

        DB::table('contents')->insert([
            'content_area_id' => 1,
            'column_type' => '1',
            'block_margin_top' => '5',
            'block_margin_bottom' => '1',
            'title' => 'Example Title from Content Manager',
            'title_color' => 'white',
            'title_size' => '5',
            'title_position' => 'center',
            'title_margin_top' => '3',
            'title_margin_bottom' => '3',
            'content' => 'but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious,   ',
            'content_color' => 'white',
            'content_size' => '2',
            'content_position' => 'center',
            'content_margin_top' => '3',
            'content_margin_bottom' => '1',
            'block_2_margin_top' => '',
            'block_2_margin_bottom' => '',
            'title_2' => '',
            'title_color_2' => '',
            'title_size_2' => '',
            'title_position_2' => '',
            'title_margin_top_2' => '',
            'title_margin_bottom_2' => '',
            'content_2' => '',
            'content_color_2' => '',
            'content_size_2' => '',
            'content_position_2' => '',
            'content_margin_top_2' => '',
            'content_margin_bottom_2' => '',

        ]);

        DB::table('contents')->insert([
            'content_area_id' => 1,
            'column_type' => '2',
            'block_margin_top' => '5',
            'block_margin_bottom' => '2',
            'title' => 'Example Title from Content Manager',
            'title_color' => 'primary',
            'title_size' => '3',
            'title_position' => 'left',
            'title_margin_top' => '3',
            'title_margin_bottom' => '3',
            'content' => 'but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious,   ',
            'content_color' => 'primary',
            'content_size' => '1',
            'content_position' => 'left',
            'content_margin_top' => '3',
            'content_margin_bottom' => '3',
            'block_2_margin_top' => '5',
            'block_2_margin_bottom' => '5',
            'title_2' => 'Example Title from Content Manager',
            'title_color_2' => 'success',
            'title_size_2' => '3',
            'title_position_2' => 'left',
            'title_margin_top_2' => '3',
            'title_margin_bottom_2' => '3',
            'content_2' => 'but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious,   ',
            'content_color_2' => 'success',
            'content_size_2' => '1',
            'content_position_2' => 'left',
            'content_margin_top_2' => '3',
            'content_margin_bottom_2' => '2',

        ]);

        DB::table('contents')->insert([
            'content_area_id' => 2,
            'column_type' => '2',
            'block_margin_top' => '5',
            'block_margin_bottom' => '5',
            'title' => 'Example from Content Manager',
            'title_color' => 'danger',
            'title_size' => '5',
            'title_position' => 'left',
            'title_margin_top' => '3',
            'title_margin_bottom' => '3',
            'content' => 'but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious,   ',
            'content_color' => 'warning',
            'content_size' => '2',
            'content_position' => 'left',
            'content_margin_top' => '3',
            'content_margin_bottom' => '3',
            'block_2_margin_top' => '5',
            'block_2_margin_bottom' => '5',
            'title_2' => 'Example from Content Manager',
            'title_color_2' => 'warning',
            'title_size_2' => '5',
            'title_position_2' => 'left',
            'title_margin_top_2' => '3',
            'title_margin_bottom_2' => '3',
            'content_2' => 'but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious,   ',
            'content_color_2' => 'danger',
            'content_size_2' => '2',
            'content_position_2' => 'left',
            'content_margin_top_2' => '3',
            'content_margin_bottom_2' => '3',

        ]);

        DB::table('contents')->insert([
            'content_area_id' => 2,
            'column_type' => '1',
            'block_margin_top' => '5',
            'block_margin_bottom' => '5',
            'title' => 'Example from Content Manager',
            'title_color' => 'white',
            'title_size' => '5',
            'title_position' => 'center',
            'title_margin_top' => '3',
            'title_margin_bottom' => '3',
            'content' => 'but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious,   ',
            'content_color' => 'success',
            'content_size' => '2',
            'content_position' => 'center',
            'content_margin_top' => '3',
            'content_margin_bottom' => '3',
            'block_2_margin_top' => '',
            'block_2_margin_bottom' => '',
            'title_2' => '',
            'title_color_2' => '',
            'title_size_2' => '',
            'title_position_2' => '',
            'title_margin_top_2' => '',
            'title_margin_bottom_2' => '',
            'content_2' => '',
            'content_color_2' => '',
            'content_size_2' => '',
            'content_position_2' => '',
            'content_margin_top_2' => '',
            'content_margin_bottom_2' => '',

        ]);

        for ($i=1; $i < 21; $i++)
        {
            DB::table('clients')->insert([
                'name' => 'Client_Name_' . $i,
                'surname' => 'Client_Surname_' . $i,
                'email' => 'Email_Client_' . $i,
                'phone'=> rand(100000000,900000000),
            ]);
        }

        for ($i=1; $i < 21; $i++)
        {
            DB::table('tattoos')->insert([
                'name' => 'Tattoo_name_' . $i,
                'picture_number' => $i,
            ]);
        }

        for ($i=1; $i < 6; $i++)
        {
            DB::table('visits')->insert([
                'client_id' => $i,
                'employeer_id' => $i,
                'tattoo_id' => $i,
                'amount' => 300,
                'date' => '2022-11-02 19:00:08',
                'time' => 4,
                'consume_needle' => 10,
                'consume_mask' => 10,
                'consume_ink' => 10,
                'consume_glove' => 10,                
                'consume_liquid' => 10,
                'consume_healing' => 10,
                'consume_soap' => 10,
                'consume_anesthesia' => 10,
                'consume_calque' => 10,
                'consume_holder' => 10,
            ]);
        }

        for ($i=6; $i < 11; $i++)
        {
            DB::table('visits')->insert([
                'client_id' => $i,
                'employeer_id' => $i-5,
                'tattoo_id' => $i,
                'amount' => 300,
                'date' => '2022-11-02 19:00:08',
                'time' => 4,
                'consume_needle' => 10,
                'consume_mask' => 10,
                'consume_ink' => 10,
                'consume_glove' => 10,                
                'consume_liquid' => 10,
                'consume_healing' => 10,
                'consume_soap' => 10,
                'consume_anesthesia' => 10,
                'consume_calque' => 10,
                'consume_holder' => 10,
            ]);
        }

        for ($i=11; $i < 16; $i++)
        {
            DB::table('visits')->insert([
                'client_id' => $i,
                'employeer_id' => $i-10,
                'tattoo_id' => $i,
                'amount' => 300,
                'date' => '2022-11-02 19:00:08',
                'time' => 4,
                'consume_needle' => 10,
                'consume_mask' => 10,
                'consume_ink' => 10,
                'consume_glove' => 10,                
                'consume_liquid' => 10,
                'consume_healing' => 10,
                'consume_soap' => 10,
                'consume_anesthesia' => 10,
                'consume_calque' => 10,
                'consume_holder' => 10,
            ]);
        }

        for ($i=16; $i < 21; $i++)
        {
            DB::table('visits')->insert([
                'client_id' => $i,
                'employeer_id' => $i-15,
                'tattoo_id' => $i,
                'amount' => 300,
                'date' => '2022-11-02 19:00:08',
                'time' => 4,
                'consume_needle' => 10,
                'consume_mask' => 10,
                'consume_ink' => 10,
                'consume_glove' => 10,                
                'consume_liquid' => 10,
                'consume_healing' => 10,
                'consume_soap' => 10,
                'consume_anesthesia' => 10,
                'consume_calque' => 10,
                'consume_holder' => 10,
            ]);
        }
            DB::table('events')->insert([
                'id' => 1,
                'title' => 'Example_Order_1',
                'start' => '2022-12-19 19:00:08',
                'end' => '2022-12-19 19:00:08',
                'client_id' => 10,
                'employeer_id' => 1,
                'width' => 10,
                'height' => 10,
                'place' => 'leg',
                'color' => 'no',                
                'description' => 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
            ]);

            DB::table('events')->insert([
                'id' => 2,
                'title' => 'Example_Order_2',
                'start' => '2022-12-20 19:00:08',
                'end' => '2022-12-20 19:00:08',
                'client_id' => 11,
                'employeer_id' => 2,
                'width' => 14,
                'height' => 12,
                'place' => 'arm',
                'color' => 'yes',                
                'description' => 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
            ]);

                DB::table('events')->insert([
                'id' => 3,
                'title' => 'Example_Order_3',
                'start' => '2022-12-21 19:00:08',
                'end' => '2022-12-21 19:00:08',
                'client_id' => 12,
                'employeer_id' => 3,
                'width' => 14,
                'height' => 11,
                'place' => 'back',
                'color' => 'yes',                
                'description' => 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
            ]);

            DB::table('events')->insert([
                'id' => 4,
                'title' => 'Example_Order_4',
                'start' => '2022-12-22 19:00:08',
                'end' => '2022-12-22 19:00:08',
                'client_id' => 13,
                'employeer_id' => 4,
                'width' => 18,
                'height' => 11,
                'place' => 'head',
                'color' => 'no',                
                'description' => 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
            ]);

            DB::table('events')->insert([
                'id' => 5,
                'title' => 'Example_Order_5',
                'start' => '2022-12-23 19:00:08',
                'end' => '2022-12-23 19:00:08',
                'client_id' => 14,
                'employeer_id' => 5,
                'width' => 18,
                'height' => 11,
                'place' => 'hand',
                'color' => 'no',                
                'description' => 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
            ]);

            for ($i=1; $i < 11; $i++)
            {
                DB::table('orders')->insert([
                    'name' => 'Client_name_' . $i,
                    'surname' => 'Client_surname_' . $i,
                    'phone'=> rand(100000000,900000000),
                    'email' => 'Client_email_' . $i,
                    'width' => 27,
                    'height' => 40,
                    'place' => 'arm',
                    'color' => 'no',
                    'description' => 'Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like',
                ]);
            }

    }
}