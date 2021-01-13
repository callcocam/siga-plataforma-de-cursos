<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Siga\Form\Builder\Events;

use App\Siga\Form\Builder\Form;
use Illuminate\Contracts\Validation\Validator;

class BeforeFormValidation
{
    /**
     * The form instance.
     *
     * @var Form
     */
    protected $form;

    /**
     * The validator instance.
     *
     * @var Validator
     */
    protected $validator;

    /**
     * Create a new event instance.
     *
     * @param  Form  $form
     * @param  Validator  $validator
     * @return void
     */
    public function __construct(Form $form, Validator $validator)
    {
        $this->form = $form;
        $this->validator = $validator;
    }

    /**
     * Get the Form instance of this event.
     *
     * @return Form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Get the Validator instance of this event.
     *
     * @return Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }
}
