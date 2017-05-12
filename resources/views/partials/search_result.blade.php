<div class="search-item search-item-report">
    @if ($type == 'news' || $type == 'reports')
        <a href="{{ route('get-news', $data->slug) }}" class="item-title item-title-mobile">{{ $data->name }}</a>
    @else
        <a href="{{ route('get_slug', $data->slug) }}" class="item-title item-title-mobile">{{ $data->name }}</a>
    @endif


        <div class="search-item-image">
            @if ($type == 'news' || $type == 'reports')
                <a href="{{ route('get-news', $data->slug) }}" style="background-image:url('uploaded/thumbs/{{ $data->mainPhoto() }}');">
                    <img src="uploaded/thumbs/{{ $data->mainPhoto() }}" alt="{{ $data->name }}">
                </a>
                @else
                <a href="{{ route('get_slug', $data->slug) }}" style="background-image:url('uploaded/thumbs/{{ $data->mainPhoto() }}');">
                    <img src="uploaded/thumbs/{{ $data->mainPhoto() }}" alt="{{ $data->name }}">
                </a>
            @endif
        </div>

        <div class="search-item-desc">
            @if ($type == 'news' || $type == 'reports')
                <a href="{{ route('get-news', $data->slug) }}" class="item-title item-title-desktop">{{ $data->name }}</a>
            @else
                <a href="{{ route('get_slug', $data->slug) }}" class="item-title item-title-desktop">{{ $data->name }}</a>
            @endif
            <div class="item-cat">
                @if ($type == 'news')
                    <a href="{{ route('news') }}">Новости</a>
                @endif
                @if ($type == 'reports')
                    <a href="{{ route('reports') }}">Отчеты</a> /
                    <a href="{{ route('get_slug', $data->products{0}->slug) }}">{{ $data->products{0}->name }}</a>
                @endif
                @if ($type == 'products')
                    @foreach($data->parents as $category)
                        <a href="{{ route('get_slug', $category->slug) }}">{{ $category->name }}</a> @if ($category !== $data->parents->last()) / @endif
                    @endforeach
                @endif
            </div>

            <table class="item-descs">
                <tr>
                    <td>
                        <span data-toggle="tooltip" data-placement="bottom" title="">
                            {{ $data->description_short }}
                        </span>
                    </td>
                </tr>
            </table>

            <div class="item-contact">
                <div class="item-date">
                    @if ($type == 'news' || $type == 'reports')
                        <span>
                            <i class="icon-calendar"></i>
                        </span>
                        <span>{{ date('d', strtotime($data->created_at)) }} {{ ucfirst(Date::parse($data->created_at)->format('M')) }}</span>
                    @endif
                </div>
            </div>

        </div>
</div>