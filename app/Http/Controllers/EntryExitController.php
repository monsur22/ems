<?php

namespace App\Http\Controllers;

use App\Services\EntryExitServiceInterface;
use Illuminate\Http\Request;

class EntryExitController extends Controller
{
    protected $entryService;
    public function __construct(EntryExitServiceInterface $entryService)
    {
        $this->entryService = $entryService;
    }

    public function entryStore(Request $request)
    {
        // dd('hello');
        $data = $this->entryService->entryStore($request);
        return $data;
    }
    public function hello(Request $request)
    {
        dd('hello');

    }
}
