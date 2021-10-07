@props([
    'confirmMessage' => false,
])

<form method="POST" {!! $attributes->merge() !!}>
    @method("DELETE")
    @csrf
    <button @if($confirmMessage) onclick="return confirm('{{ trim($confirmMessage, "'") }}')" @endif
    class="btn btn-danger"
    >
        <span class="text">{{ trim($slot) ?: 'Удалить' }}</span>
    </button>

</form>
