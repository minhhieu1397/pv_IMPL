<?php

namespace App\Services\User\Interfaces;

use Illuminate\Http\Request;

interface UserServiceInterface
{
    public function changeRole();
    public function getPurchasesByUser();
}
