<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\Stat;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function store_with_stats(): void
    {
        $stats = new Stat;
        $stats->increment(['projects_count']);
        $stats->save();
    }
}
