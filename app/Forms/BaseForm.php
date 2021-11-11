<?php


namespace App\Forms;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Kris\LaravelFormBuilder\Form as FormBuilder;

abstract class BaseForm extends FormBuilder
{

    protected function isEditForm(): bool
    {
        return $this->getMethod() === 'PUT' || $this->getMethod() === 'PATCH';
    }

    protected function isCreateForm(): bool
    {
        return !$this->isEditForm();
    }

    protected function addDivier(string $title, string $description = ''): static
    {
        $this->add(Str::random(10), 'static', [
            'tag' => 'div',
            'attr' => ['class' => 'form__section-title'],
            'value' => $title,
            'wrapper' => ['class' => 'form__section'],
            'label' => false,
            'help_block' => [
                'text' => $description,
            ],
        ]);

        return $this;
    }

    protected function addImage(string $modelKey, $options = [])
    {
        if ($this->model && $this->model->{$modelKey}) {
            $this->addBefore($modelKey, "{$modelKey}_image", 'static', [
                'label' => false,
                'tag' => 'img',
                'attr' => [
                    'width' => $options['width'] ?? '200px',
                    'class' => "img-thumbnail p-2",
                    'src' => Storage::url($this->model->{$modelKey})
                ],
            ]);
        }
    }

    protected function imageRules(): array
    {
        $rules = ['image', 'max:4000'];
        if ($this->isCreateForm()) {
            $rules = array_merge($rules, ['required']);
        }
        return $rules;
    }
}
