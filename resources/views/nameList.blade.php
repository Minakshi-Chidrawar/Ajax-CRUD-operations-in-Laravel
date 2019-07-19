<div class="col-4 rounded">
    <ul class="list-unstyled pl-3">
        @foreach($names as $name)
            <div class="row">
                <li>{{ $name }}</li>
            </div>
        @endforeach
    </ul>
</div>