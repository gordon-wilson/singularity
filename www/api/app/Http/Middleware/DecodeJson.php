<?php

namespace App\Http\Middleware;

use Closure;
use Traits\ChecksForJson;
use Illuminate\Http\Request;

class DecodeJson
{
    use ChecksForJson;

    public function handle(Request $request, Closure $next)
    {
        $inputs = $request->all();
        foreach ($inputs as $inputKey => $inputValue) {
            if ($this->isJson($inputValue)) {
                $request->merge([$inputKey => json_decode($inputValue)]);
            }
        }
        return $next($request);
    }
}