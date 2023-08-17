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

    public function store(Request $request){
    if($request->input('active') != 1 || !$request->input('active')){
        $active = 0;
    }

    //die($request->input('details'));
//        $data = $request->validate([
//         'active' => 'required|boolean',
//         'details' => 'nullable|string',
//         'title' => 'nullable|string',
//         'details' =>'nullable|string',
//         'bus_tickets' =>'nullable|int',
//         'price' => 'nullable|int',
//         'home_content' =>'nullable|string'
//        ]);
     //  die('before Create');
        $redriver = Redriver::create([
              'active' => $active,
             'details' => $request->input('details'),
             'title' => $request->input('title'),
             'bus_tickets' =>$request->input('bus_tickets'),
              'price' =>$request->input('price'),
               'home_content' =>$request->input('home_content'),
           ]
        );

        $redrivers = Redriver::all();
        return View::make('admin.redriver', compact('redrivers'));
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
