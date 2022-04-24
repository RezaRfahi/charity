<?php

namespace Database\Seeders;

use App\Models\Permission;
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
        $permission_list=[[
            'id'=>'1','name'=>'adminManage'
        ],
        [
            'id'=>'2','name'=>'memberManage'
        ],
        [
            'id'=>'3','name'=>'informationManage'
        ]
        ];
    foreach($permission_list as $permission){
        Permission::create($permission);
    }
    }
}
