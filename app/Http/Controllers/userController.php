<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4,
        // ];

        // UserModel::insert( $data );

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // $user = UserModel::findOr(20, ['username', 'nama'], function() {
        //     abort(404);
        // });

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // $user = UserModel::where('level_id', 2)->count();

        $user = UserModel::firstOrCreate (
        //     // [
        //     //     'username' => 'manager22',
        //     //     'nama' => 'Manager',
        //     // ],

        //     // [
        //     //     'username' => 'manager22',
        //     //     'nama' => 'Manager',
        //     //     'password' => Hash::make('12345'),
        //     //     'level_id' => 2
        //     // ],

        //     // [
        //     //     'username' => 'manager',
        //     //     'username' => 'Manager'
        //     // ]


        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],

                [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['uername', 'level_id']);
        $user->wasChanged('nama');
        $user->wasChanged(['nama', 'username']);

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);


        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());



        // return view('user', ['data' => $user]);



    }
}
