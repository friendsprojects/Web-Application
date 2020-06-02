<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/testwebapplaravel-b03faf3a4506.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            // ->withDatabaseUri('https://testwebapplaravel.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('books');
        $data = [
            "name" => "TestAdmin1",
            "password" => "testa1",
            "userName" => "testadmin1",
            "status" => "offline",
            "totalBooksAdded" => "0"
        ];
        $array_key = $ref->getChildKeys();
        $key = max($array_key);
        $key_new = $key + 1;
        $key_new = (string)$key_new;

        $ref->getChild($key_new)->set($data);

        return $key_new;

        // $admin_users = $ref->getValue();

        // foreach ($admin_users as $admin) {
        //     $all_admin[] = $admin;
        // }

        // return json_encode($all_admin);

    }
}
