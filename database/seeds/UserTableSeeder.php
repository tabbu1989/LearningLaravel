<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $arrUserData = [
//            [
//                'name' => 'tabby',
//                'email' => 'tabbu1989@gmail.com',
//                'password' => 'tabby'
//            ],
//            [
//                'name' => 'hiaham',
//                'email' => 'hisham@gmail.com',
//                'password' => 'hisham'
//            ]
//        ];
//        factory(\App\User::class)->create()->each(function ($user) {
////            $user->fields()->createMany([
////                [
////                    'name' => 'tabby',
////                    'email' => 'tabbu1989@gmail.com',
////                    'password' => 'tabby'
////                ],
////                [
////                    'name' => 'hiaham',
////                    'email' => 'hisham@gmail.com',
////                    'password' => 'hisham'
////                ]
////            ]);
////            $user->fields()->save(factory(Field::class, 2)->make());
//            $user->save([
//                'name' => 'tabby',
//                'email' => 'tabbu1989@gmail.com',
//                'password' => 'tabby'
//            ]);
//            $user->save([
//                'name' => 'hiaham',
//                'email' => 'hisham@gmail.com',
//                'password' => 'hisham'
//            ]);
//        });

        print_r(factory(\App\User::class));
//        factory(\App\User::class)->save([
//            'name' => 'tabby',
//            'email' => 'tabbu1989@gmail.com',
//            'password' => 'tabby'
//        ]);
//        factory(\App\User::class)->save([
//            'name' => 'hiaham',
//            'email' => 'hisham@gmail.com',
//            'password' => 'hisham'
//        ]);
    }
}
