<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;
use Illuminate\Support\Facades\View;

class ParkingController extends Controller
{
    // Parking page
    public function parkingPage(){
        //
        $parking = Parking::find(1);
        return View::make('parking', ['banner_title' => 'GAME DAY PARKING', 'parking' => $parking]);






    }
     // Store a new parking entry
        public function store(Request $request)
        {
            // Validate request data
            $request->validate([
                'content' => 'required|string',
                     ]);

            if ($request->input('active') == 'on') {
                $active = 1;
                }
            else {
                $active = 0;
            }


            // Create a new parking entry
            $parking = Parking::create([
                'content' => $request->input('content'),
                'active' => $active
            ]);

            // Redirect or return success response
            return redirect()->route('admin.parking')->with('success', 'Parking entry created successfully.');
        }

        // Update an existing parking entry
        public function update(Request $request, $id)
        {
            // Find the parking entry by ID
            $parking = Parking::findOrFail($id);

            // Validate request data
            $request->validate([
                'content' => 'required|string',

            ]);

             if ($request->input('active') == 'on') {
                           $active = 1;
                           }
                       else {
                           $active = 0;
                       }
            // Update the parking entry
            $parking->update([
                'content' => $request->input('content'),
                'active' => $active,
            ]);

            // Redirect or return success response
            return redirect()->route('admin.parking')->with('success', 'Parking entry updated successfully.');
        }

        // Display a list of parking entries
        public function index()
        {
            $parking = Parking::find(1);
            return view('admin.parking', compact('parking'));
        }

        // Delete a parking entry
        public function destroy($id)
        {
            $parking = Parking::findOrFail($id);
            $parking->delete();

            return redirect()->route('admin.parking')->with('success', 'Parking entry deleted successfully.');
        }
    public function edit($id)
    {
        $parking = Parking::findOrFail($id);
        return view('admin.parking.edit', compact('parking'));
    }

}
