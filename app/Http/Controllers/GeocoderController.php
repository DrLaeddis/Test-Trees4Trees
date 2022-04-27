<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adrianorosa\GeoLocation\GeoLocation;

class GeocoderController extends Controller
{
    public function GeoIndex() {
        $details = GeoLocation::lookup('36.72.241.236');
        return view('welcome', compact('details'));
    }
}
