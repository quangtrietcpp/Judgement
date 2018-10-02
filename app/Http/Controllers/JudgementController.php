<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Controller;

class JudgementController extends Controller
{
    /**
     * show list judgement
     *
     * @return void
     */
    public function index()
    {
        $judgements = Models\Judgement::getList();
        return view('welcome', compact('judgements'));
    }
}
