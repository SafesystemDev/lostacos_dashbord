<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    function index()
    {
        return DB::select("SELECT * FROM users");
    }
}