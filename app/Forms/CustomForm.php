<?php

namespace App\Forms;

class CustomForm extends BaseForm
{
    public function buildForm()
    {
        $this->add('name', 'text', [
            'label' => 'Имя',
            'rules' => 'required'

        ])->add('slug', 'text', [
            'label' => 'Slug',
            'rules' => 'required'

        ])->add('poster', 'file', [
            'label' => 'Постер',
            'rules' => $this->imageRules()

        ])->add('description', 'textarea', [
            'label' => 'Описание',
        ]);

        if ($this->isEditForm()) {
            $this->addImage('poster');
        }
    }
}
