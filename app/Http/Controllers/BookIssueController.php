<?php

namespace App\Http\Controllers;

use App\Models\book_issue;
use App\Http\Requests\Storebook_issueRequest;
use App\Http\Requests\Updatebook_issueRequest;
use App\Models\book;
use App\Models\student;

class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.issueBooks', [
            'books' => book_issue::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.issueBook_add',[
            'students' => student::latest()->get(),
            'books' => book::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storebook_issueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storebook_issueRequest $request)
    {
        $issue_date = date('Y-m-d');
        // $return_date = date('Y-m-d',strtotime("+".$return_days." days"));

        // dd($request->all());
        book_issue::create($request->validated() + [
            'book_id' => $request->book_id,
            'student_id' => $request->student_id,
            'issue_date' => $issue_date,
            'issue_status' => 'N',
        ]);
        return redirect()->route('book_issued');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book_issue  $book_issue
     * @return \Illuminate\Http\Response
     */
    public function show(book_issue $book_issue)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book_issue  $book_issue
     * @return \Illuminate\Http\Response
     */
    public function edit(book_issue $book_issue)
    {
        return view('book.edit',[
            'authors' => auther::latest()->get(),
            'publishers' => publisher::latest()->get(),
            'categories' => category::latest()->get(),
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebook_issueRequest  $request
     * @param  \App\Models\book_issue  $book_issue
     * @return \Illuminate\Http\Response
     */
    public function update(Updatebook_issueRequest $request, $id)
    {
        $book = book_issue::find($id);
        $book->name = $request->name;
        $book->auther_id = $request->author_id;
        $book->category_id = $request->category_id;
        $book->publisher_id = $request->publisher_id;
        $book->save();
        return redirect()->route('book_issued');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book_issue  $book_issue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book_issue::find($id)->delete();
        return redirect()->route('book_issued');
    }
}
