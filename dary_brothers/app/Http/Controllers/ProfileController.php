<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;

class ProfileController extends RegisterController
{
    public function create_user() {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $data = array("email" => $email, "password" => $password);
      $result = parent::create($data);
      if ($result) {
          $user = User::where('email', $email)->first();
          session(['CUSTOMER_USER_ID' => $user->id]);
          if (Auth::attempt($data)) {
              return view('account.profile_edit', ['isLoggedIn' => true, 'email' => $email]);
          }
          return ('F');
      }

      return ('Failed');
    }

    public function logout_user() {
      return ('Log out');
    }

}
