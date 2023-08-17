<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redriver;
use Illuminate\Support\Facades\View;

class RedriverController extends Controller
{
    public function index()
    {
        $redrivers = Redriver::all();
        return View::make('admin.redriver', compact('redrivers'));
    }

    public function show($id)
    {
        $redriver = Redriver::findOrFail($id);
        return View::make('admin.redriver', compact('redriver'));
    }

    public function store(Request $request)
    {
        $redriver = Redriver::create($request->all());
        return View::make('admin.redriver', compact('redriver'));
    }

    public function update(Request $request, $id)
    {
        $redriver = Redriver::findOrFail($id);
        $redriver->update($request->all());
        return View::make('admin.redriver', compact('redriver'));
    }

    public function destroy($id)
    {
        $redriver = Redriver::findOrFail($id);
        $redriver->delete();
        return View::make('admin.redriver');
    }
}
