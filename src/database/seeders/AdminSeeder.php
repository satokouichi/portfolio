<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Admin::truncate();
        Schema::enableForeignKeyConstraints();
        $param = [
            'name' => '管理画面ユーザー',
            'email' => 'admin@test.test',
            'email_verified_at' => now(),
            'password' => Hash::make('aaa123456'),
        ];
        DB::table('admins')->insert($param);
    }
}