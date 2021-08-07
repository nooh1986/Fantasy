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
        DB::table('permissions')->delete();

        $permissions = [
            'اللاعبين',
            'الصلاحيات',
            'إضافه نتائج الفنتازيا',
            'إضافه نتائج الفورمولا',
            'الاحصائيات',
            'الترتيب العام',
            'نتائج المراحل ',
        ];
        
        foreach($permissions as $permission)
        {
            DB::table('permissions')->insert(['name' => $permission , 'guard_name' => 'web']);
        }
    }
}
