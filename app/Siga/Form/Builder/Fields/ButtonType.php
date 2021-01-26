<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Fields;


class ButtonType extends FormField
{
    /**
     * @inheritdoc
     */
    protected function getTemplate()
    {
        return 'button';
    }

    /**
     * @inheritdoc
     */
    protected function getDefaults()
    {
        return [
            'wrapper' => false,
            'attr' => ['type' => $this->type]
        ];
    }

    /**
     * @inheritdoc
     */
    public function getAllAttributes()
    {
        // Don't collect input for buttons.
        return [];
    }
}
