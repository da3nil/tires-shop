<?php

namespace App\Observers;

use App\Tire;

class TireObserver
{
    public function creating(Tire $tire)
    {
        if ($tire->isClean('content')) {
            $tire->content = '';
        }
    }

    /**
     * Handle the tire "created" event.
     *
     * @param  \App\Tire  $tire
     * @return void
     */
    public function created(Tire $tire)
    {
        //
    }

    /**
     * Handle the tire "updated" event.
     *
     * @param  \App\Tire  $tire
     * @return void
     */
    public function updated(Tire $tire)
    {
        //
    }

    /**
     * Handle the tire "deleted" event.
     *
     * @param  \App\Tire  $tire
     * @return void
     */
    public function deleted(Tire $tire)
    {
        //
    }

    /**
     * Handle the tire "restored" event.
     *
     * @param  \App\Tire  $tire
     * @return void
     */
    public function restored(Tire $tire)
    {
        //
    }

    /**
     * Handle the tire "force deleted" event.
     *
     * @param  \App\Tire  $tire
     * @return void
     */
    public function forceDeleted(Tire $tire)
    {
        //
    }
}
