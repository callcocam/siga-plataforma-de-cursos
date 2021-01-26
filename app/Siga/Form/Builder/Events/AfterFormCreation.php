<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Siga\Form\Builder\Events;


use App\Siga\Form\Builder\Form;

class AfterFormCreation
{
    /**
     * The form instance.
     *
     * @var Form
     */
    protected $form;

    /**
     * Create a new after form creation instance.
     *
     * @param  Form $form
     * @return void
     */
    public function __construct(Form $form) {
        $this->form = $form;
    }

    /**
     * Return the event's form.
     *
     * @return Form
     */
    public function getForm() {
        return $this->form;
    }
}
