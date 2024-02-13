<?php

namespace App\Services;


class ResponseService
{
    public int $status = 200;
    public string $message = 'success';
    public  $data = [];
    public array $error = [];

    public function status(int $status): ResponseService
    {
        $this->status = $status;
        return $this;
    }

    public function message(string $message): ResponseService
    {
        $this->message = __($message);
        return $this;
    }

    public function data( $data): ResponseService
    {
        $this->data = is_array($data) ? $data : [$data];
        return $this;
    }

    public function error(int $error): ResponseService
    {
        $this->error = $error;
        return $this;
    }

    public function send()
    {
        return response([
            'message' => $this->message,
            'data' => $this->data,
            'error' => $this->error,
        ], $this->status);
    }


}
