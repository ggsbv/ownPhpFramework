<?php
namespace App\Controllers;
use App\Core\App;

class UsersController
{

  public function index(){
    $names = App::resolve('database')->selectAll('Names');
    return view('users', compact('names'));
  }

  public function store(){
    App::resolve('database')->insert('Names', [
      'name' => $_POST['name']
    ]);

    return redirect('users');
  }
}

?>
