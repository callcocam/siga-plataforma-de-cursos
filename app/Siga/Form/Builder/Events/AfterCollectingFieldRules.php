<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Events;


use App\Siga\Form\Builder\Fields\FormField;
use App\Siga\Form\Builder\Form;
use App\Siga\Form\Builder\Rules;

class AfterCollectingFieldRules
{
    /**
     * The field instance.
     *
     * @var FormField
     */
    protected $field;

    /**
     * The field's rules.
     *
     * @var Rules
     */
    protected $rules;

    /**
     * Create a new after field creation instance.
     *
     * @param Form $form
     * @param FormField $field
     * @return void
     */
    public function __construct(FormField $field, Rules $rules) {
        $this->field = $field;
        $this->rules = $rules;
    }

    /**
     * Return the event's field.
     *
     * @return FormField
     */
    public function getField() {
        return $this->field;
    }

    /**
     * Return the event's field's rules.
     *
     * @return Rules
     */
    public function getRules() {
        return $this->rules;
    }
}
