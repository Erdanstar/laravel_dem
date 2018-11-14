<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {
        DB::table((new User)->getTable())->truncate();

        User::insert([
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$MfBY73EZeMzBQVsQYGTAL.X70La6z43QwIllG2RgNK30E.fUk75CO',
                'role_id'        => 1,
                'remember_token' => '',
            ],
        ]);
    }
}
