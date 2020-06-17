<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class ReferenceController extends Controller
{
    //
    public function index()
    {
        //list of all phones
        $phones = Phone::paginate(3);
        return view('welcome', array("phones" => $phones));

    }

    public function add()
    {
       # die('xx');
        //add page
        return view('add');
    }

    public function save(Request $request)
    {
        //save phone

        $validatedData = $request->validate([
            'name' => 'required|unique:phones|max:100',
            'number' => 'required|unique:phones|digits_between:10,20',
        ]);

        $phone = new Phone();
        $phone->name = $request->name;
        $phone->number = $request->number;
        $phone->save();
        return redirect('/')->with('message', 'Номер успешно добавлен!');
        #dd($validatedData);
        #return view('add');
    }
    public function get_data(Request $request){
        //search result table
        #dd($request->name);
        $where = [];
        if($request->name){
            array_push($where, ['name', 'like', "%".$request->name."%"]);
        }
        if($request->number){
            array_push($where, ['number', 'like', "%".$request->number."%"]);
        }
       # dd($where);
        if(count($where)){
            $phones = Phone::where($where)->paginate(3);
        }else{
            $phones = Phone::paginate(3);
        }

        $phones->setPath('/');
        $table = view('table', array("phones" => $phones));

        echo $table;
    }

}
