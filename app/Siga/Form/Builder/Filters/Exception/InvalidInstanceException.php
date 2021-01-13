<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Filters\Exception;


class InvalidInstanceException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = 'Filter object must implement ' . FilterInterface::class;
        parent::__construct($message, $code, $previous);
    }
}
