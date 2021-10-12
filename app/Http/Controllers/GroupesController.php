<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupesController extends Controller
{
    //

    public function index()
    {
        // DBよりgroupeテーブルの値を全て取得
        $groupes = Groupe::all();
        // 取得した値をビュー「groupe/index」に渡す
        return view('groupe/index', compact('groupes'));
        // return view('groupe/index', compact('groupes'));
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つgroupeの情報を取得
        $groupe = Groupe::findOrFail($id);
        // 取得した値をビュー「groupe/edit」に渡す
        return view('groupe/edit', compact('groupe'));
    }



    public function update(Request $request, $id)
{
    $groupe = groupe::findOrFail($id);
    $groupe->name = $request->name;
    $groupe->save();

    return redirect("/groupe");
}

public function destroy($id)
{
    $groupe = groupe::findOrFail($id);
    $groupe->delete();

    return redirect("/groupe");
}

}
