@if($errors->any())
    <div class="notification is-danger mt-1">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
