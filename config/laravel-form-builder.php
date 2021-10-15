<?php

return [
    'defaults' => [
        'wrapper_class' => 'form-group',
        'wrapper_error_class' => 'has-error',
        'label_class' => 'control-label',
        'field_class' => 'form-control',
        'help_block_class' => 'small form-text text-muted',
        'required_class' => 'required',
        'field_error_class' => 'form-control is-invalid fix-rounded-right',
        'error_class' => 'invalid-feedback',
        'attr' => [
            'form' => 'form',
        ],

        // Override a class from a field.
        //'text'                => [
        //    'wrapper_class'   => 'form-field-text',
        //    'label_class'     => 'form-field-text-label',
        //    'field_class'     => 'form-field-text-field',
        //]
        //'radio'               => [
        //    'choice_options'  => [
        //        'wrapper'     => ['class' => 'form-radio'],
        //        'label'       => ['class' => 'form-radio-label'],
        //        'field'       => ['class' => 'form-radio-field'],
        //],

        'select' => [
            'field_class' => 'custom-select'
        ],

        'file' => [
            'field_class' => 'form-control-file'
        ],

        'checkbox' => [
            'wrapper_class' => 'form-group custom-control custom-checkbox',
            'label_class' => 'custom-control-label',
            'field_class' => 'custom-control-input',
            'choice_options' => [
                'wrapper' => ['class' => 'custom-control custom-checkbox'],
                'label_attr' => ['class' => 'custom-control-label'],
                'attr' => ['class' => 'custom-control-input'],
            ],
        ],

        'submit' => [
            'field_class' => 'btn btn-success mt-3 btn-icon-split',

        ]
    ],
    // Templates
    'form' => 'laravel-form-builder::form',
    'text' => 'laravel-form-builder::text',
    'textarea' => 'laravel-form-builder::textarea',
    'button' => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio' => 'laravel-form-builder::radio',
    'checkbox' => 'laravel-form-builder::checkbox',
    'select' => 'laravel-form-builder::select',

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
