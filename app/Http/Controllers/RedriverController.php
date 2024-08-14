<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redriver;
use Illuminate\Support\Facades\View;

class RedriverController extends Controller
{
    public function index()
    {
        $redriver = Redriver::find(1);
        return View::make('admin.redriver', compact('redriver'));
    }

    public function publicPage(){
        $redriver = Redriver::find(1);
         return View::make('outx', ['banner_title' => 'RED RIVER RIVALRY', 'redriver' => $redriver]);
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
              'game_price' => $request('game_price'),
               'home_content' =>$request->input('home_content'),
           ]
        );

        $redrivers = Redriver::all();
        return View::make('admin.redriver', compact('redrivers'));
    }

   public function update(Request $request, $id) {
       // Find the Redriver entry by ID
       $redriver = Redriver::find($id);

       // Check if the entry exists
       if (!$redriver) {
           return redirect()->back()->with('error', 'Redriver entry not found.');
       }

       // Determine the active status
       $active = ($request->input('active') == 1) ? 1 : 0;

       // Update the fields
       $redriver->active = $active;
       $redriver->details = $request->input('details');
       $redriver->title = $request->input('title');
       $redriver->bus_tickets = $request->input('bus_tickets');
       $redriver->price = $request->input('price');
       $redriver->game_price = $request->input('game_price');
       $redriver->home_content = $request->input('home_content');

       // Save the updated entry
       $redriver->save();

       // Retrieve all Redriver entries for the view
       $redrivers = Redriver::all();

       // Redirect back to the view with a success message
       return redirect()->route('admin.redriver')->with('success', 'Redriver entry updated successfully.');
   }

    public function destroy($id)
    {
        $redriver = Redriver::findOrFail($id);
        $redriver->delete();
        return View::make('admin.redriver');
    }
}
