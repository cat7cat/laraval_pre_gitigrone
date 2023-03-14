<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student; //串接MODEL
use App\Imports\StudentsImport;

// 掛載匯出匯入功能
use Maatwebsite\Excel\Facades\Excel;
// EXCEL 匯出
use App\Exports\StudentsExport;
// EXCEL 匯入
use App\Imports\StudentImport;




class StudentController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Student::get(); //顯示全部

        //單顯示頁面
        // return view('student123.index');

        //串接資料庫
        return view('student123.index', ['data'=> $data]);




        // 把陣列放進變數
        // return view('student123.index', ['data'=> $data , 'data2'=> $data2, 'data3'=> $data3,]);
        // $data2 = Student::take(1)->get(); //顯示一筆
        // $data3 = Student::where('age',21)->get(); //只顯示amy


        // $data=[
        //        'name' => 'chris' ,
        //        'age' =>'40', 
        //        'tel' => '0903456978',
        //        'note'=> ['php','js','jquery']
        //       ];
                // return view ('student123.index',[ 'data'=> $data ]);
        // dd ('Hello student');
          
        // $dada = [
        //         [
        //             'name' => 'chris',
        //             'age' => '40',
        //             'tel' => '0903456978',
        //         ],
        //         [
        //             'name' => 'amy',
        //             'age' => '20',
        //             'tel' => '0908111222',
        //         ]
        //          ];
        //         return view('student123.index', ['dada' => $dada , 'data' => $data]);

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

    public function store(Request $request)
    {
        $data = new Student;

        $data->name = $request->name;
        $data->age = $request->age;
        $data->save();

        return redirect()->route('students.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // 1. check id
        // dd($id);

        // 2.id 丟到前面
        // id 抓到
        // id 丟到前面的blade?

        // 3.該筆資料 丟到前端
        // select * FROM student WHERE id=1
        // $data = Student::get(); //index select all
        // ex=1
        $data = Student::find($id); //where id = $id
        // ex=2
        // $data = Student::where('id',$id); 

        return view('student123.edit',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($id);
        // $_GET;
        // $_POST;
        // dd($request);
        $input = $request->except(['_token','_method']);
        // dd($input);
        // dd('update OK');

        // 1. 透過ID 抓到這筆的資料
        // 2. 修改後的檔案 update 剛剛上面那筆ID的資料

        // 1. id get 單筆data
        $data= Student:: find($id);
        // 2.修改後data updata單筆data
        $data->name = $input['name'];
        $data->age = $input['age'];
        $data->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd('hello destroy');
        $data = Student::find($id)->delete();
        return redirect()->route('students.index'); 
    }

    /**
     * 自訂義
     */


    public function export()
    {
        return Excel::download(new StudentsExport, 'export.xlsx');
    }





    public function import()
    {
        Excel::import(new StudentsImport, 'import.xlsx');

        return redirect('/')->with('成功!!', 'All good!');
    }


}
