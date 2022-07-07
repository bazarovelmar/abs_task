<?php

namespace App\Http\Services;

use Illuminate\Support\Collection;

class JsonInitializationService
{
    /**
     * @param int $elementsQuantity
     * @return Collection
     */
    public static function jsonCollectInit(int $elementsQuantity): Collection
    {
        $result = [];
        for ($i = 1; $i <= $elementsQuantity; $i++) {
            $result[] = 'Element №' . $i;
        }
        return collect($result);
    }
}
