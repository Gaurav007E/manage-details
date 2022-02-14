<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MainTitleInterface;
use Illuminate\Routing\Controller;
use App\Models\MainTitle;

class MainTitleController extends Controller
{
    protected $maintitle;

    public function __construct(MainTitleInterface $maintitle)
    {
        $this->maintitle = $maintitle;
    }

    public function index()
    {
        $titles = MainTitle::all();
        return view('front/home',compact('titles'));
    }

    public function addMainTitle(Request $request)
    {
        return $this->maintitle->addMainTitle($request);
    }
}
