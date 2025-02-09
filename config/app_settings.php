<?php

return [

    // All the sections for the settings page
    'sections' => [
        'app' => [
            'title' => 'Paramètre général',
            'descriptions' => '', // (optional)
            'icon' => 'fa fa-cog', // (optional)

            'inputs' => [
                [
                    'name' => 'app_name', // unique key for setting
                    'type' => 'text', // type of input can be text, number, textarea, select, boolean, checkbox etc.
                    'label' => 'Nom de l\'appli', // label for input
                    // optional properties
                    'placeholder' => 'Application Name', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => config('app.name'), // any default value
                    'hint' => 'Mettez le nom de l\'application ici' // help block text for input
                ],
                [
                    'name' => 'app_currency',
                    'type' => 'text',
                    'label' => 'Money de l\'appli',
                    'placeholder' => 'Application Currency',
                    'class' => 'form-control',
                    'style' => '', // any inline styles
                    'rules' => 'required|max:10', // validation rules for this input
                    'value' => '$', // any default value
                    'hint' => 'Utiliser la money telle que $',
                ],
                [
                    'name' => 'logo',
                    'type' => 'image',
                    'label' => 'Choisir le logo',
                    'hint' => 'La taille d\'image recommandée est  150px x 150px',
                    'rules' => 'image|max:500',
                    'disk' => 'public', // which disk you want to upload
                    'path' => '/logos', // path on the disk,
                    'preview_class' => 'thumbnail',
                    'preview_style' => 'height:40px'
                ]
                   ,
                [
                    'name' => 'favicon',
                    'type' => 'image',
                    'label' => 'choisir le favicon',
                    'hint' => 'La taille d\'image recommandée est  16px x 16px or 32px x 32px',
                    'rules' => 'image|max:500',
                    'disk' => 'public', // which disk you want to upload
                    'path' => '/logos', // path on the disk,
                    'preview_class' => 'thumbnail',
                    'preview_style' => 'height:40px'
                ],
            ]
        ],
        'email' => [
            'title' => 'Paramètre Email',
            'descriptions' => '',
            'icon' => 'fa fa-envelope',

            'inputs' => [
                [
                    'name' => 'from_email',
                    'type' => 'email',
                    'label' => 'Email',
                    'placeholder' => 'Soumission depuis le mail',
                    'rules' => 'required|email',
                ],
                [
                    'name' => 'from_name',
                    'type' => 'text',
                    'label' => 'Nom' ,
                    'placeholder' => 'Nom',
                ]
            ]
        ]
    ],

    // Setting page url, will be used for get and post request
    'url' => 'settings',

    // Any middleware you want to run on above route
    'middleware' => ['auth'],

    // View settings
    // 'setting_page_view' => 'app_settings::settings_page',
    'setting_page_view' => 'settings',
    'flash_partial' => 'app_settings::_flash',

    // Setting section class setting
    'section_class' => 'card mb-3',
    'section_heading_class' => 'card-header',
    'section_body_class' => 'card-body',

    // Input wrapper and group class setting
    'input_wrapper_class' => 'form-group',
    'input_class' => 'form-control',
    'input_error_class' => 'has-error',
    'input_invalid_class' => 'is-invalid',
    'input_hint_class' => 'form-text text-muted',
    'input_error_feedback_class' => 'text-danger',

    // Submit button
    'submit_btn_text' => 'Enregistrer le paramètre',
    'submit_success_message' => 'Le paramètre a été enregistré.',

    // Remove any setting which declaration removed later from sections
    'remove_abandoned_settings' => false,

    // Controller to show and handle save setting
    'controller' => '\App\Http\Controllers\SettingController',

    // settings group
    'setting_group' => function() {
        // return 'user_'.auth()->id();
        return 'default';
    }
];
