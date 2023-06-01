<?php

namespace App\Services\Impl;


use App\Repositories\EntryExitRepositoryInterface;
use App\Services\EntryExitServiceInterface;

class EntryExitServiceImpl implements EntryExitServiceInterface
{
    protected $entryexitRepository;
    public function __construct(EntryExitRepositoryInterface $entryexitRepository)
    {
        $this->entryexitRepository = $entryexitRepository;
    }

    public function entryStore($request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $data = $this->entryexitRepository->entryStore($user);
            return $data;
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}
