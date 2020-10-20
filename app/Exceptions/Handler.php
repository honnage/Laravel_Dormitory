<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Exception;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function render404($request, Exception $error404)
    {
        if($this->isHttpException($error404)){
            $code = $error404->getStatusCode();
            if($code == '404'){
                return response()->view('layouts.404');
            }
        }

        return parent::render($request, $error404);
    }

    public function render503($request, Exception $error503)
    {
        if($this->isHttpException($error503)){
            $code = $error503->getStatusCode();
            if($code == '503'){
                return response()->view('layouts.503');
            }
        }

        return parent::render($request, $error503);
    }
}
