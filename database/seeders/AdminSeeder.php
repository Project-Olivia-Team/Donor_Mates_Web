<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin1234',
            'bloodType' => 'O+',
            'role' => 'admin',
        ]);
    }
}

?>