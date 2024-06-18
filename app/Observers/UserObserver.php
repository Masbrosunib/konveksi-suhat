<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Customer;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */

     public function creating(User $user)
     {
         if ($user->role === 'admin') {
             Admin::create([
                 'Nama' => $user->name,
                 'Email' => $user->email,
                 'Phone' => $user->phone,
                 'Address' => 'Default Address', // You can set a default address
                 'Password' => $user->password,
             ]);
         } elseif ($user->role === 'user') {
             Customer::create([
                 'Nama' => $user->name,
                 'Email' => $user->email,
                 'Phone' => $user->phone,
                 'Address' => 'Default Address', // You can set a default address
                 'Password' => $user->password,
             ]);
         }
     }

    public function created(User $user): void
    {
        //
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
