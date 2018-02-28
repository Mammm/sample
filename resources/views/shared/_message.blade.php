@foreach(['success', 'info', 'danger', 'warning'] as $v)
    @if (session()->has($v))
        <div class="flash-message">
            <p class="alert alert-{{ $v }}">
                {{ session()->get($v) }}
            </p>
        </div>
    @endif
@endforeach