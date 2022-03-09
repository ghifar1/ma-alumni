<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AlumniController extends Controller
{
    public function index()
    {
        return DataTables::of(Alumni::query())->toJson();
    }


}
