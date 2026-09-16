<?php

namespace App\Policies;

use App\Models\Penjualan;
use App\Models\User;

class PenjualanPolicy
{
    /**
     * Menentukan apakah user bisa melanjutkan / melihat transaksi OPEN.
     */
    public function view(User $user, Penjualan $penjualan): bool
    {
        // Kasir dan Admin diizinkan melihat / melanjutkan transaksi OPEN
        return in_array($user->role->name, ['admin', 'kasir']) 
            && $penjualan->status === 'OPEN';
    }

    /**
     * Menentukan apakah user bisa menghapus transaksi OPEN.
     */
    public function delete(User $user, Penjualan $penjualan): bool
    {
        // Jika kasir juga boleh menghapus transaksi OPEN:
        // return in_array($user->role->name, ['admin', 'kasir']) 
        //     && $penjualan->status === 'OPEN';

        // ATAU jika HANYA Admin yang boleh menghapus:
        return $user->role->name === 'admin' && $penjualan->status === 'OPEN';
    }
}