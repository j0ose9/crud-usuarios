<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::latest()->get();
      return view('index', ['users'=> $users]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'nombre' => 'required|min:3|max:255',
      'email' => 'required',
      'password' => 'required|min:8|max:32',
    ]);
    User::create($request->all());
    return redirect()-> route('users.index')->with('success', 'Su nuevo usuario ha sido registrado correctamente');
  }
=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
>>>>>>> parent of b3ff035 (añadido Create y Read)

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $user)
  {
    return view('edit', ['user' => $user]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, User $user)
  {
    $request->validate([
      'nombre' => 'required|min:3|max:255',
      'email' => 'required',
      'password' => 'required|min:8|max:32',
    ]);

    $user->update($request->all());
    return redirect()-> route('users.index')->with('success', 'Su nuevo usuario ha sido actualizado correctamente');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    $user->delete();
    return redirect()-> route('users.index')->with('success', 'Su usuario ha sido eliminado correctamente');
  }
}