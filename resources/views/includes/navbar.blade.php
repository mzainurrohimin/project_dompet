<div class="logo mt-3">
    <div class="row">
        <div class="col-12 text-center">
            @foreach($logo as $item)
            <img src="{{ Storage::url($item->logo) }}" width="200px" height="200px" alt="" />
            @endforeach
        </div>
    </div>
</div>