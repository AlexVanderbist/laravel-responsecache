<?php

namespace Spatie\ResponseCache\Events;


use Illuminate\Http\Request;

class ServedActualResponse
{
    public $request;

    /** @param  Request  $request */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
