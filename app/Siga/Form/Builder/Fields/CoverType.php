<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Fields;


class CoverType extends FormField
{

    protected $type = "file";
    /**
     * @inheritdoc
     */
    protected function getTemplate()
    {
        return 'cover';
    }

}
