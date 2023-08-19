<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'id_pegawai'=>'admin',
                'password' => Hash::make('12345678'),
                'nama' => 'admin',
                'no_ktp' => '1234567890123456',
                'no_telepon' => '+6285346949935',
                'role' => 'admin',
            ],
            [
                'id_pegawai'=>'pengawas',
                'password' => Hash::make('12345678'),
                'nama' => 'pengawas',
                'no_ktp' => '1234567890123456',
                'no_telepon' => '+6285346949935',
                'role' => 'pengawas',
            ],
            [
                'id_pegawai'=>'cleaner',
                'password' => Hash::make('12345678'),
                'nama' => 'cleaner',
                'no_ktp' => '1234567890123456',
                'no_telepon' => '+6285346949935',
                'role' => 'cleaner',
            ]
        ];
        DB::table('users')->insert($users);
    }
}
