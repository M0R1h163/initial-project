<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '山田太郎',
            'email' => 'yamada@gmail.com',
            'password' => 'yamada',
            'two_factor_secret' =>'',
            'two_factor_recovery_codes'=>'',
            'two_factor_confirmed_at'=> Carbon::now() ];
            DB::table('users')->insert($param);
        $param = [
            'name' => '佐藤次郎',
            'email' => 'sato@gmail.com',
            'password' => 'sato',
            'two_factor_secret' =>'',
            'two_factor_recovery_codes'=>'',
            'two_factor_confirmed_at'=> Carbon::now() ];
            DB::table('users')->insert($param);
        $param = [
            'name' => '斎藤一郎',
            'email' => 'saitou@yahoo.co.jp',
            'password' => 'saitou',
            'two_factor_secret' =>'',
            'two_factor_recovery_codes'=>'',
            'two_factor_confirmed_at'=> Carbon::now()];
            DB::table('users')->insert($param);
    }
}
