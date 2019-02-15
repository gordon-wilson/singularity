<?php

namespace Abstracts\Controllers;

use Illuminate\Routing\Controller;

class ApiController extends Controller
{
    protected $responseCode = 200;

    protected function messageResponse(string $message = null, $code = null)
    {
        $jsonResponse = [];
        if (!is_null($message)) {
            $jsonResponse['message'] = $message;
        }
        return $this->respond($jsonResponse, $code);
    }

    protected function dataResponse(array $data = [], $code = null)
    {
        $jsonResponse = [];
        if (!is_null($data)) {
            $jsonResponse['data'] = $data;
        }
        return $this->respond($jsonResponse, $code);
    }

    protected function respond(array $jsonResponsePayload, $responseCodeOverride = null)
    {
        $code = $responseCodeOverride ?? $this->responseCode;
        return response()->json($jsonResponsePayload, $code);
    }
}