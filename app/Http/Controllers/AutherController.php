<?php

namespace App\Http\Controllers;

use App\Models\auther;
use App\Http\Requests\StoreautherRequest;
use App\Http\Requests\UpdateautherRequest;

class AutherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auther.index',[
            'authors' => auther::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auther.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreautherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreautherRequest $request)
    {
        auther::create($request->validated());

        return redirect()->route('authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function show(auther $auther)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function edit(auther $auther)
    {
        return view('auther.edit',[
            'auther' => $auther
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateautherRequest  $request
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateautherRequest $request, $id)
    {
        $auther = auther::find($id);
        $auther->name=$request->name;
        $auther->save();

        return redirect()->route('authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auther::find($id)->delete();
        return redirect()->route('authors');
    }
}

/*
{{-- <?php // pagination
    $sql1 = 'SELECT * FROM author';
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        $total_records = mysqli_num_rows($result);

        $total_page = ceil($total_records / $limit);
        // show pagination
        if ($total_page > 1) {
            $pagination = "<ul class='pagination admin-pagination'>";
            if ($page > 1) {
                // show previous button
                $pagination .= '<li class=""><a href="author.php?page=' . ($page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $page) {
                    $active = 'active';
                } else {
                    $active = '';
                }
                $pagination .= '<li class="' . $active . '"><a href="author.php?page=' . $i . '">' . $i . '</a></li>';
            }
            if ($total_page > $page) {
                //show next button
                $pagination .= '<li class=""><a href="author.php?page=' . ($page + 1) . '">Next</a></li>';
            }
            $pagination .= '</ul>';
            echo $pagination;
        }
    } ?> --}}*/
