<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant = Restaurant::all();

        return view('user.index', compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurant = Restaurant::all();

        return view('user.index', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique|numeric',
            'name' => 'required|unique|min:3|max:50',
            'address' => 'required|unique|min:5|max:70',
            'piva' => 'required|unique|numeric|min:13|max:13',
        ]);

        $data = $request->all();

        $singleRestaurant = new Restaurant;
        $singleRestaurant->name = $data['restaurant_name'];
        $singleRestaurant->address = $data['address'];
        $singleRestaurant->piva = $data['piva'];
        $singleRestaurant->save();

        return redirect()->route('welcome.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view(('user.show'), compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view(('user.edit'), compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id' => 'required|unique|numeric',
            'name' => 'required|unique|min:3|max:50',
            'address' => 'required|unique|min:5|max:70',
            'piva' => 'required|unique|numeric|min:13|max:13',
        ]);

        $restaurant = Restaurant::findOrFail($id);

        $data = $request->all();

        $singleRestaurant = new Restaurant;
        $singleRestaurant->name = $data['name'];
        $singleRestaurant->address = $data['address'];
        $singleRestaurant->piva = $data['piva'];
        $singleRestaurant->save();

        return redirect()->route('welcome.show', $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $restaurant->delete();

        return redirect()->route('guest.index');
    }
}
