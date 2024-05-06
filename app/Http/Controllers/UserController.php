<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use resources\views\layouts\create;

class UserController extends Controller
{
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
        'nombre' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);
      User::create($request->all());
      return redirect()-> route('users.index')->with('success', 'Su nuevo usuario ha sido registrado correctamente');
    }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
