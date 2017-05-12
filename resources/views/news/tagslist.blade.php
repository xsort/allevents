@extends('body')
@section('centerbox')
    @if(isset($data))
        <md-content class="md-padding" layout-xs="column" layout="row">
            @foreach($data as $tag)
                <div flex-gt-xs="20" layout="column">
                    <md-card>
                        @if (isset($tag->photos{0}))
                        <img ng-src="uploaded/{{$tag->photos{0}->source}}" class="md-card-image" alt="">
                        @endif
                        <md-card-title>
                            <md-card-title-text>
                            <span class="md-title">
                                @if(isset($tag->name))
                                    <a href="{{route('get-'.$type.'-news', $tag->slug)}}">{{$tag->name}}</a>
                                @endif
                            </span>
                            </md-card-title-text>
                        </md-card-title>
                        <md-card-content>

                        </md-card-content>
                    </md-card>
                </div>
            @endforeach
        </md-content>
    @endif
@endsection