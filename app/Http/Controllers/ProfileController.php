<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Akses untuk Admin dan Kasir
    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }

    // Bisa dieksekusi oleh Admin maupun Kasir
    public function updateAvatar(Request $request)
    {
        $user = auth()->user();

        // Validasi file gambar
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            // Hapus foto lama jika ada
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Simpan foto baru ke folder storage/app/public/avatars
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
            $user->save();
        }

        return redirect()->back();
    }
}