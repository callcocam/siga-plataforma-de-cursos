<?php
return [
    'defaults' => [
        'wrapper_class' => '',
        'wrapper_error_class' => 'has-error',
        'label_class' => 'block text-sm font-medium text-gray-700 dark:text-gray-200',
        'field_class' => 'bg-white-input-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray sm:text-sm',
        'field_error_class' => '',
        'help_block_class' => 'help-block',
        'error_class' => 'text-red-500',
        'required_class' => 'required',

        // Override a class from a field.
        //'text'                => [
        //    'wrapper_class'   => 'form-field-text',
        //    'label_class'     => 'form-field-text-label',
        //    'field_class'     => 'form-field-text-field',
        //]
        'choice' => [
            'field_class' =>'',
            'wrapper_class' =>'mt-4 space-y-4',
            'label_class' =>'',
            'choice_options' => [
                'wrapper_class'=>'flex items-center',
                'label_class'=>'block ml-3 text-sm font-medium text-gray-700 dark:text-gray-200 cursor-pointer',
                'field_class'=>'white-radio-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray'
            ],
        ],
        'radio' => [
            'field_class' =>'white-radio-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray cursor-pointer',
            'wrapper_class' =>'flex items-center',
            'label_class' =>'block ml-3 text-sm font-medium text-gray-700 dark:text-gray-200 cursor-pointer',
        ],
        'checkbox' => [
            'field_class' =>'white-radio-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray',
            'wrapper_class' =>'flex items-start',
            'label_class' =>'font-medium text-gray-700 dark:text-gray-200',
        ],
        'submit' => [
            'field_class' =>'inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
            'wrapper_class' =>'px-4 py-3 text-right bg-gray-50 dark:bg-gray-800 sm:px-6'
        ],
        'cover' => [
            'field_class' =>'sr-only',
            'wrapper_class' =>'flex justify-center px-6 pt-5 pb-6 mt-2 border-2 border-gray-300 border-dashed rounded-md',
            'label_class' =>'block text-sm font-medium text-gray-700 dark:text-gray-200',
            'description' =>'PNG, JPG, GIF up to 10MB',
        ],
        'avatar' => [
            'field_class' =>'sr-only avatar',
            'wrapper_class' =>'',
            'label_class' =>'block text-sm font-medium text-gray-700 dark:text-gray-200'
        ],
    ],
    // Templates
    'form' => 'laravel-form-builder::form',
    'text' => 'laravel-form-builder::text',
    'avatar' => 'laravel-form-builder::avatar',
    'cover' => 'laravel-form-builder::cover',
    'textarea' => 'laravel-form-builder::textarea',
    'button' => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio' => 'laravel-form-builder::radio',
    'checkbox' => 'laravel-form-builder::checkbox',
    'select' => 'laravel-form-builder::select',
    'choice' => 'laravel-form-builder::choice',
    'repeated' => 'laravel-form-builder::repeated',
    'child_form' => 'laravel-form-builder::child_form',
    'collection' => 'laravel-form-builder::collection',
    'static' => 'laravel-form-builder::static',

    // Remove the laravel-form-builder:: prefix above when using template_prefix
    'template_prefix' => '',

    'default_namespace' => '',

    'custom_fields' => [
//        'datetime' => App\Forms\Fields\Datetime::class
    ]
];
