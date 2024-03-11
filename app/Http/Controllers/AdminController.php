<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index() {
        $pdfs = Pdf::all();
        return view ('admin.index', compact('pdfs'));
    }

    public function showLoginForm()
    {
        return view('login'); // Assuming you have a "login.blade.php" view
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.index');
        }

        return back()->withErrors(['loginError' => 'Invalid login credentials']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login'); // Redirect to the login page
    }
}
