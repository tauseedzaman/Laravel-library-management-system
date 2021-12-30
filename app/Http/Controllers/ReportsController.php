<?php

namespace App\Http\Controllers;

use App\Models\book_issue;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

    public function date_wise()
    {
        return view('report.dateWise',['books'=> '']);
    }

    public function generate_date_wise_report(Request $request)
    {
        $request->validate(['date' => "required|date"]);
        return view('report.dateWise',[
            'books' => book_issue::where('issue_date',$request->date)->latest()->get()
        ]);

    }
}
