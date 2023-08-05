<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'service_create',
            ],
            [
                'id'    => 18,
                'title' => 'service_edit',
            ],
            [
                'id'    => 19,
                'title' => 'service_show',
            ],
            [
                'id'    => 20,
                'title' => 'service_delete',
            ],
            [
                'id'    => 21,
                'title' => 'service_access',
            ],
            [
                'id'    => 22,
                'title' => 'news_create',
            ],
            [
                'id'    => 23,
                'title' => 'news_edit',
            ],
            [
                'id'    => 24,
                'title' => 'news_show',
            ],
            [
                'id'    => 25,
                'title' => 'news_delete',
            ],
            [
                'id'    => 26,
                'title' => 'news_access',
            ],
            [
                'id'    => 27,
                'title' => 'general_setting_access',
            ],
            [
                'id'    => 28,
                'title' => 'slider_create',
            ],
            [
                'id'    => 29,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 30,
                'title' => 'slider_show',
            ],
            [
                'id'    => 31,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 32,
                'title' => 'slider_access',
            ],
            [
                'id'    => 33,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 34,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 35,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 36,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 37,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 38,
                'title' => 'contact_create',
            ],
            [
                'id'    => 39,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 40,
                'title' => 'contact_show',
            ],
            [
                'id'    => 41,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 42,
                'title' => 'contact_access',
            ],
            [
                'id'    => 43,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 44,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 45,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
