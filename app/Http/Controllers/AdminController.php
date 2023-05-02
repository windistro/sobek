<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;


class AdminController extends Controller
{
    public function AdminDashboard() {
        return view('admin/dashboard-admin');
    }

    public function AdminPeternak() {
        $user = User::all();
        return view('admin/admin-peternak', compact('user'));

        // return response()->view('admin/admin-peternak', [
        //     'user' => User::orderBy('id', 'desc')->get(),
        // ]);
    }

    public function AdminUserAdd() {
        return view('admin/create');
    }
    
    public function AdminUserEdit($id) {
        // $user = User::all();

        // return response()->view('admin/edit', [
        //     'user' => User::orderBy('id', 'desc')->get(),
        // ]);

        $user = User::where('id', $id)->first();
        return view('admin/edit', compact('user'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:50', 'unique:'.User::class],
            'no' => ['required', 'string', 'max:50'],
            'gender' => 'required',
            'address' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no = $request->no;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->birthdate = $request->birthdate;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('admin.peternak')->with('success', 'Akun berhasil dibuat');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:50'],
            'no' => ['required', 'string', 'max:50'],
            'gender' => 'required',
            'address' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'role' => 'required'
        ]);

        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->no = $request->no;
        // $user->gender = $request->gender;
        // $user->address = $request->address;
        // $user->birthdate = $request->birthdate;
        // $user->password = Hash::make($request->password);
        // $user->role = $request->role;
        // $user->save();
        
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.peternak')->with('success', 'Akun berhasil diupdate');
    }
}
