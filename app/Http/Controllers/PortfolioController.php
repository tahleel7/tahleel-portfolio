<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // جلب المشاريع من الأحدث إلى الأقدم لعرضها ديناميكياً للزوار
        $projects = Project::latest()->get();
        return view('portfolio.index', compact('projects'));
    }
}