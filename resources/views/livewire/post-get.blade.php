
@foreach($data as $key => $val)
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            @if($val['image_url'])
                <img src="{{ $val['image_url'] }}" class="card-img-top" />
            @endif
            @if($val['image'])
                <img src="{{ $val['image'] }}" class="card-img-top" />
            @endif
            <div class="card-body">
                {{ $val['short_content'] }}
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">繼續閲讀</button>
            </div>
        </div>
    </div>
@endforeach

