<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
// use Exception;

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

    public function render($request, Throwable $error)
    {
        if($this->isHttpException($error)){
            $code = $error->getStatusCode();
            if($code == '401'){
                return response()->view('layouts.401');
            }
        }

        if($this->isHttpException($error)){
            $code = $error->getStatusCode();
            if($code == '403'){
                return response()->view('layouts.403');
            }
        }

        if($this->isHttpException($error)){
            $code = $error->getStatusCode();
            if($code == '404'){
                return response()->view('layouts.404');
            }
        }

        if($this->isHttpException($error)){
            $code = $error->getStatusCode();
            if($code == '419'){
                return response()->view('layouts.419');
            }
        }

        if($this->isHttpException($error)){
            $code = $error->getStatusCode();
            if($code == '500'){
                return response()->view('layouts.500');
            }
        }



        if($this->isHttpException($error)){
            $code = $error->getStatusCode();
            if($code == '503'){
                return response()->view('layouts.503');
            }
        }
        return parent::render($request, $error);
    }


}
