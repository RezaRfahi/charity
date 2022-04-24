<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([[
            'id'=>1,'name'=>'adminManage'
        ],
        [
            'id'=>2,'name'=>'memberManage'
        ],
        [
            'id'=>3,'name'=>'informationManage'
        ]
    ]);
    }
}
