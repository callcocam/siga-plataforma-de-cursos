<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Fields;


class CheckableType extends FormField
{

    /**
     * @inheritdoc
     */
    protected $valueProperty = 'checked';

    /**
     * @inheritdoc
     */
    protected function getTemplate()
    {
        return $this->type;
    }

    /**
     * @inheritdoc
     */
    public function getDefaults()
    {
        return [
            //'attr' => ['class' =>  $this->getConfig(sprintf('defaults.%s.choice_options.wrapper.class', $this->type)), 'id' => $this->getName()],
            'attr' => ['class' => null, 'id' => $this->getName()],
            'value' => 1,
            'checked' => null
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function isValidValue($value)
    {
        return $value !== null;
    }
}
