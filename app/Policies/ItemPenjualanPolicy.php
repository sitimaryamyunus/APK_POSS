<?php

namespace App\Policies;

use App\Models\ItemPenjualan;
use App\Models\User;

class ItemPenjualanPolicy
{
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ItemPenjualan $itemPenjualan): bool
    {
        return $user->role->name === 'admin';
    }
}