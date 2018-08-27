<?php

namespace App\Library\Search;
use Illuminate\Http\Request;

interface SearchImpl
{
    function handle(Request $request);
}
