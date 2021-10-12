<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Groupe;
use App\Models\TelTime;
use Illuminate\Http\Request;

class TelTimeController extends Controller
{
    //

    public function index()
    {
        // DBよりBookテーブルの値を全て取得
        $groupes = Groupe::orderBy('teltime_id', 'asc')->get();

  
        // 取得した値をビュー「book/index」に渡す
 return view('teltime/index', compact('groupes'));
                // return view('groupe/index', compact('groupes'));
    }
    public function change(Request $request)
    {
        $teiltimes=TelTime::all();
        $teltimes_count=$teiltimes->count();
        $groupes = Groupe::orderBy('teltime_id', 'asc')->get();
        foreach ($groupes as $groupe) {
            echo $groupe->teltime_id;
            $groupe->teltime_id +=1;
            if ($groupe->teltime_id>3) {
                $groupe->teltime_id=1;
            }
            $groupe->save();
        }
        return redirect("/teltime");
    }



    public static function change_tel()
    {
        $teiltimes=TelTime::all();
        $teltimes_count=$teiltimes->count();
        $groupes = Groupe::orderBy('teltime_id', 'asc')->get();
        foreach ($groupes as $groupe) {
            echo $groupe->teltime_id;
            $groupe->teltime_id +=1;
            if ($groupe->teltime_id>3) {
                $groupe->teltime_id=1;
            }
            $groupe->save();
        }
        return redirect("/teltime");
    }
    
    // 記述方法：クラス名::all();

    public function update()
    {
        $groupes = Groupe::orderBy('teltime_id', 'asc')->get();
        foreach ($groupes as $groupe) {
            echo $groupe->teltime_id;
            $groupe->teltime_id +=1;
            if ($groupe === end($groupes)) {
                $groupe->teltime_id=1;
            }
            $groupe->save();
        }
        return redirect("/teltime");
    }

}
