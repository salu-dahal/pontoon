<?php
use App\Model\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Admin::create([
            'name' => 'admin',
            'username' => 'admin',
            'usertype' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin002'),
        

        ]);
    }
}
