<?php

use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    protected $admins = [
        [
            'email' => 'admin@devadmin.com',
            'last_name' => 'Admin',
            'first_name' => 'Dev',
            'password' => 'password',
            'avatar_path' => '',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->init();

        foreach($this->admins as $key => $admin):
            $data = [
                'email' => $admin['email'],
                'last_name' => $admin['last_name'],
                'first_name' => $admin['first_name'],
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make($admin['password']),
                'avatar_path' => $admin['avatar_path'],
            ];

            $this->create($data);
        endforeach;

        $this->assignSuperAdmin();
    }

    private function init()
    {
        Admin::truncate();
    }

    private function create($data)
    {
        \DB::beginTransaction();
            Admin::create($data);
        \DB::commit();
    }

    private function assignSuperAdmin()
    {
        $admin = Admin::where('email', 'admin@devadmin.com')->first();

        $admin->assignRole('superadmin');
    }
}
