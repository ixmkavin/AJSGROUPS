




<div class="accordion-box mb-5">
    @foreach ($items as $item)
        <li class="accordion block">
            <div class="acc-btn">{{ $item['title'] }}
                <div class="icon fa fa-plus"></div>
            </div>
            <div class="acc-content">
                <div class="content">
                    <div class="text">
                        {!! $item['content'] !!}
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</div>
