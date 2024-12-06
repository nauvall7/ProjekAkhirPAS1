<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furniture;
class FurnitureController extends Controller
{
    public function index()
    {

        $Furniture = Furniture::all();

        return view('Furniture.index', ['Furniture' => $Furniture]);
    }
}