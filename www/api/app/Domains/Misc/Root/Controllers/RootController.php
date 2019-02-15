<?php

namespace Domains\Misc\Root\Controllers;

use Abstracts\Controllers\ApiController as SomethingElse;

class RootController extends SomethingElse
{
    public function index()
    {
        return $this->messageResponse('Welcome to the api');
    }

    public function test()
    {
        return $this->dataResponse([['text'=>'one'], ['text'=>'two']]);
    }
}