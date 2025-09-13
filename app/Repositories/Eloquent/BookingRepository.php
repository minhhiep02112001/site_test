<?php

namespace App\Repositories\Eloquent;

use App\Models\Booking; 
use App\Repositories\Contracts\CategoryContracts;
use App\Repositories\Repository;

class BookingRepository extends Repository implements CategoryContracts
{ 
    public function model()
    {
        return Booking::class;
    }
}
