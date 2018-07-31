<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            Company::create([
                'company'         => '株式会社ヘッジホッグ'. $i,
                'name'         => 'ありもと'. $i,
                'email'        => 'test'.$i.'@company.jp',
                'password'     => bcrypt('abcd1234'),
            ]);
        }
    }
}
