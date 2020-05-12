<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    protected $roles = [
        [
            'name' => 'superadmin',
            'guard_name' => 'admin',
        ],
        [
            'name' => 'admin',
            'guard_name' => 'admin',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles as $key => $role):
            $data = [
                'name' => $role['name'],
                'guard_name' => $role['guard_name'],
            ];

            $this->create($data);
        endforeach;
    }

    private function create($data)
    {
        \DB::beginTransaction();
            Role::create($data);
        \DB::commit();
    }
}
