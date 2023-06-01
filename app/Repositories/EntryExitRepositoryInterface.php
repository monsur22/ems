<?php

namespace App\Repositories;

use App\Models\EntryExit;

interface EntryExitRepositoryInterface
{
    public function entryStore($user): EntryExit;
}
