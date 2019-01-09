<?php
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {
        DB::table((new User)->getTable())->truncate();

        User::insert([
            [
                'id'             => 1,
                'surname'        => 'Khan',
                'name'           => 'Kerei',
                'email'          => 'kerei.khan@gmail.com',
                'birthday'       =>  Carbon::create('1997', '02', '27'),
                'password'       => '$2y$10$MfBY73EZeMzBQVsQYGTAL.X70La6z43QwIllG2RgNK30E.fUk75CO',
                'sex'            => 'Мужской',
                'is_admin'       => 1,
                'remember_token' => '',
            ],
        ]);
    }
}
