<?php

namespace core;

class Response
{
    public function setStatus(int $code)
    {
        http_response_code($code);
    }
}