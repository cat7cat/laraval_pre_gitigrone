<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view ('student123.index');
        $data=[
               'name' => 'chris' ,
               'age' =>'40', 
               'tel' => '0903456978',
               'note'=> ['php','js','jquery']
              ];
                // return view ('student123.index',[ 'data'=> $data ]);
        // dd ('Hello student');
          
        $dada = [
                [
                    'name' => 'chris',
                    'age' => '40',
                    'tel' => '0903456978',
                ],
                [
                    'name' => 'amy',
                    'age' => '20',
                    'tel' => '0908111222',
                ]
                 ];
                return view('student123.index', ['dada' => $dada , 'data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
        return view('student123.create');
        // dd ('Hello create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        // return view('student123.store');
        // dd ('Hello store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        dd('hello show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        dd('hello edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        dd('hello update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        dd('hello destroy');
    }

    /**
     * 自訂義
     */
    public function excel()
    {
        //
        return view('student123.excel');
    }


    public function childpage()
    {
        //
        return view('child');
    }


}
