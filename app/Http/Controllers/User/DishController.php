<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user_id = auth()->user()->id;
        $dishes = Dish::where('restaurant_id', $user_id)->orderBy('name')->get();
        return view("user.dishes.index")->with("dishes", $dishes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Dish $dish)
    {
        return view("user.dishes.create", compact("dish"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['restaurant_id'] = 1;
        $newDish = new Dish();
        $newDish->fill($data)->save();
        return redirect()->route('dishes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view("user.dishes.show", compact("dish"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        $dish = Dish::find($dish->id);
        return view("user.dishes.edit", compact("dish"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->all();
        $dish->update($data);
        return redirect()->route('dishes.index', compact('dish'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('dishes.index');
    }
}
