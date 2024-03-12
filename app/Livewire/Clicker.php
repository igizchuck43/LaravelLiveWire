<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    // public function handleClick(){
    //     dump('clicked');
    // }

    public $name;
    public $email;
    public $password;
    

    public function createNewUser(){

        $this->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
    ]);

    $this->reset(['name', 'email', 'password']);

    // Flash message
    request()->session()->flash('success', 'User created successfully!');
    // request()->session()->flash('success', 'User created successfully!');
}
    
    public function render()
    {
        // $title = 'Title';
        $users = User::all();

        return view('livewire.clicker', [
            // 'title' => $title,
            'users' => $users
        ]);
    }
}
