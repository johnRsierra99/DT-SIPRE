<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Illuminate\Database\QueryException) {
            if ($exception->errorInfo[1] == 1062) {
                if (strpos($exception->errorInfo[2], 'personas_id_unique') !== false) {
                    $errorMessage = "Ya existe una persona con ese ID";
                } elseif (strpos($exception->errorInfo[2], 'personas_correo_unique') !== false) {
                    $errorMessage = "Ya existe una persona con ese correo electrónico";
                } else {
                    $errorMessage = "Error de integridad de datos";
                }
                return response()->view('error', ['errorMessage' => $errorMessage]);
            }
        }

        return parent::render($request, $exception);
    }


}
