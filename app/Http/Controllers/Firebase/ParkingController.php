<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ParkingController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'parking';
    }

    public function index()
    {
        $lot = $this->database->getReference($this->tablename)->getValue();
        return view('firebase.parking.index', compact('lot'));
    }
}
