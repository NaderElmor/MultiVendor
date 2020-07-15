<?php

namespace App\Observers;

use App\Models\MainCategory;

class MainCategoryObserver
{
    /**
     * Handle the main categoty "created" event.
     *
     * @param  \App\MainCategory  $MainCategory
     * @return void
     */
    public function created(MainCategory $MainCategory)
    {
        //
    }

    /**
     * Handle the main categoty "updated" event.
     *
     * @param  \App\MainCategory  $MainCategory
     * @return void
     */
    public function updated(MainCategory $MainCategory)
    {
        $MainCategory->vendors()->update(['active' => $MainCategory->active]);
    }

    /**
     * Handle the main categoty "deleted" event.
     *
     * @param  \App\MainCategory  $MainCategory
     * @return void
     */
    public function deleted(MainCategory $MainCategory)
    {
        //
    }

    /**
     * Handle the main categoty "restored" event.
     *
     * @param  \App\MainCategory  $MainCategory
     * @return void
     */
    public function restored(MainCategory $MainCategory)
    {
        //
    }

    /**
     * Handle the main categoty "force deleted" event.
     *
     * @param  \App\MainCategory  $MainCategory
     * @return void
     */
    public function forceDeleted(MainCategory $MainCategory)
    {
        //
    }
}
