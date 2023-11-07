<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
        public function __construct()
    {
        $this->middleware('dish')->except(['index', 'create', 'store']);
    }
        protected $validatedDish = [
        "name" => ["required", "string"],
        "description" => ["required", "string"],
        "ingredients" => ["required", "string"],
        "photo" => ["url:https", "nullable"],
        "visible" => ["required", "boolean"],
        "price" => ["required","decimal:2"]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = Auth::user();
        $dishes = Dish::where('restaurant_id', $user->id)->get();
        return view("user.dishes.index", compact("dishes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Dish $dish)
    {
        $dish->visible = true;
        return view("user.dishes.create", compact("dish"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validatedDish);
        $data['restaurant_id'] = auth()->user()->id;
        $data['photo'] = $data['photo'] ?? 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg';
        $newDish = new Dish();
        $newDish->fill($data)->save();
        return redirect()->route('dishes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        // $user = Auth::user();
        // if($user->restaurant->id === $dish->restaurant_id){
            return view("user.dishes.show", compact("dish"));
        // } else {
        //     abort(404);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        // $user = Auth::user();
        // if($user->restaurant->id === $dish->restaurant_id){
        return view("user.dishes.edit", compact("dish"));
        // } else {
            // abort(404);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        // $user = Auth::user();
        // if($user->restaurant->id === $dish->restaurant_id){
        $data = $request->validate($this->validatedDish);
        $dish->update($data);
        return redirect()->route('dishes.index');
        // } else {
        //     abort(404);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {   
        // $user = Auth::user();
        // if($user->restaurant->id === $dish->restaurant_id){
            $dish->delete();
            return redirect()->route('dishes.index');
        // } else { 
        //     abort(404);
        // }
    }

    // public function destroyAll(Dish $dishes){
    //     $dishes->query()->delete();
    //     return redirect()->route('dishes.index');
    // }
    
}
