<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'last_name' => '田中',
            'first_name' => '一郎',
            'gender' => '1',
            'email' => 'abcd123@yahoo.co.jp',
            'postcode' => '123-0123',
            'address' => '和歌山県日高郡美浜町100',
            'building_name' => '美浜マンション101',
            'opinion' => 'お世話になります',
            'created_at' => '2012-05-11 13:17:44',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'last_name' => '山田',
            'first_name' => '太郎',
            'gender' => '1',
            'email' => 'abcd321@yahoo.co.jp',
            'postcode' => '113-0123',
            'address' => '和歌山県日高郡美浜町200',
            'building_name' => '美浜マンションA',
            'opinion' => 'クレームです',
            'created_at' => '2012-07-11 13:17:44',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'last_name' => '中岡',
            'first_name' => '三子',
            'gender' => '2',
            'email' => 'd123@yahoo.co.jp',
            'postcode' => '555-0123',
            'address' => '和歌山県日高郡和田100',
            'opinion' => '商品について',
            'created_at' => '2019-09-11 13:17:44',
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'last_name' => '橋本',
            'first_name' => '勇気',
            'gender' => '1',
            'email' => '23@yahoo.co.jp',
            'postcode' => '123-0553',
            'address' => '兵庫県神戸市西区1000',
            'opinion' => '発送時期について',
            'created_at' => '2022-05-11 13:17:44',
        ];
        DB::table('contacts')->insert($param);

        Contact::factory()->count(31)->create();
    }
        
}
