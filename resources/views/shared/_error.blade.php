@if (0 < count($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $v)
                <li>{{ $v }}</li>
            @endforeach
        </ul>
    </div>
@endif