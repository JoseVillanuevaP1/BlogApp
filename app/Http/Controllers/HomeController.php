<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $post = [
            [
                'title' => 'Curso de Laravel 9',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, veritatis. Minima dolores
                accusantium neque recusandae corporis nulla non commodi quaerat aut error, optio ex fuga iure
                exercitationem numquam dolorem velit?'
            ],
            [
                'title' => 'Novedades de Laravel 9',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, veritatis. Minima dolores
                accusantium neque recusandae corporis nulla non commodi quaerat aut error, optio ex fuga iure
                exercitationem numquam dolorem velit?'
            ],
            [
                'title' => 'Manejo básico de Eloquent',
                'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, veritatis. Minima dolores
                accusantium neque recusandae corporis nulla non commodi quaerat aut error, optio ex fuga iure
                exercitationem numquam dolorem velit?'
            ]
        ];
        return view('welcome')->with('posts', $post);
    }
}
