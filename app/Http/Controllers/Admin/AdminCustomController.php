<?php

namespace App\Http\Controllers\Admin;

use App\Forms\CustomForm;
use App\Http\Controllers\Controller;
use App\Models\Custom;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class AdminCustomController extends Controller
{
    use FormBuilderTrait;

    public function __construct(private FormBuilder $builder, private Filesystem $filesystem)
    {
        // ConvertNullableInput::convert(['history' => '']);
    }

    public function index(): View
    {
        return view('admin.custom.index', ['custom' => Custom::all()]);
    }

    public function create(): View
    {
        $form = $this->builder->create(CustomForm::class);

        return view('admin.custom.create', compact('form'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->form(CustomForm::class, ['method' => 'PUT'])->redirectIfNotValid();

        $data = $request->all();
        $data['poster'] = $this->filesystem->put('/', $request->file('poster'));
        Custom::create($data);

        return redirect()->route('admin.custom.index')->with('success', "Запись добавлена");
    }

    public function edit(int $id): View
    {
        $custom = Custom::findOrFail($id);
        $form = $this->builder->create(CustomForm::class, ['model' => $custom, 'method' => 'PUT']);

        return view('admin.custom.edit', compact('form', 'custom'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $custom = Custom::findOrFail($id);
        $this->form(CustomForm::class, ['method' => 'PUT'])->redirectIfNotValid();
        $data = $request->all();

        if ($request->file('poster')) {
            $this->filesystem->delete($custom->poster);
            $data['poster'] = $this->filesystem->put('/', $request->file('poster'));
        }
        $custom->update($data);

        return redirect()->route('admin.custom.index')->with('success', 'Запись обновлена');
    }

    public function destroy(int $id): RedirectResponse
    {
        $route = route('admin.custom.index');
        $custom = Custom::findOrFail($id);

        if ($custom->delete()) {
            $this->filesystem->delete($custom->poster);
            return redirect($route)->with('success', 'Запись удалена');
        }
        return redirect($route)->withErrors('Ошибка при удалении записи');
    }
}
