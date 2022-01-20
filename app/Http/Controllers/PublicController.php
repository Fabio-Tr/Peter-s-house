<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){


        return view('welcome');
    }

    public function appartments(){


        return view('appartments');
    }

    public function where(){


        return view('where');
    }

    public function merchandising(){


        return view('merchandising');
    }

    public function what(){


        return view('what');
    }

    public function contact(){


        return view('contact');
    }
}
