<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Filters\Exception;

use Throwable;

/**
 * Class UnableToResolveFilterException
 *
 * @package App\Siga\Form\Builder\Filters\Exception
 * @author  Djordje Stojiljkovic <djordjestojilljkovic@gmail.com>
 */

class UnableToResolveFilterException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = "Passed filter can't be resolved.";
        parent::__construct($message, $code, $previous);
    }
}
