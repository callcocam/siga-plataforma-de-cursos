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

class AfterFieldCreation
{
    /**
     * The form instance.
     *
     * @var Form
     */
    protected $form;

    /**
     * The field instance.
     *
     * @var FormField
     */
    protected $field;

    /**
     * Create a new after field creation instance.
     *
     * @param Form $form
     * @param FormField $field
     * @return void
     */
    public function __construct(Form $form, FormField $field) {
        $this->form = $form;
        $this->field = $field;
    }

    /**
     * Return the event's form.
     *
     * @return Form
     */
    public function getForm() {
        return $this->form;
    }

    /**
     * Return the event's field.
     *
     * @return FormField
     */
    public function getField() {
        return $this->field;
    }
}
