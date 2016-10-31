<div class="row">
    <div class="layoutInstMenu hidden-xs">
        <div class="instMenuWrapper container hidden-xs">
            <div class="row">
                <table class="instMenuLeft">
                     <tr>
                         @if($data->type == 0)          {{-- menu for default object type --}}
                             <th><md-button ng-href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_videos', $data->slug) }}">{{ trans('common.video') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_promo', $data->slug) }}">{{ trans('common.promo') }}</md-button></th>
                         @elseif($data->type == 1)      {{-- menu for photographers --}}
                             <th><md-button ng-href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_videos', $data->slug) }}">{{ trans('common.video') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_menu', $data->slug) }}">{{ trans('common.services') }}</md-button></th>
                         @endif
                     </tr>
                </table>
                <a href="{{$data->slug}}" class="instMenuLogo md-whiteframe-1dp hidden-sm hidden-xs">
                        <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                </a>
                <table class="instMenuRight">
                    <tr>
                        @if($data->type == 0)       {{-- menu for default object type --}}
                            <th><md-button  ng-href="{{ route('get_plan', $data->slug) }}">{{ trans('common.plan') }}</md-button></th>
                            <th><md-button ng-href="{{ route('get_menu', $data->slug) }}">{{ trans('common.menu') }}</md-button></th>
                            <th><md-button ng-href="{{ route('get_reservation',$data->slug) }}">{{ trans('common.reservation')}}</md-button>
                        @elseif($data->type == 1)   {{-- menu for photographers --}}
                            <th><md-button ng-href="{{ route('get_menu', $data->slug) }}">{{ trans('common.prices') }}</md-button></th>
                            <th><md-button ng-href="{{ route('get_promo', $data->slug) }}">{{ trans('common.promo') }}</md-button></th>
                            <th>
                                <md-button ng-disabled="true" class="disabled" ng-href="{{ route('index') }}">{{ trans('common.calendar') }}
                                    <md-tooltip md-direction="bottom" md-delay="100">
                                        {{ trans('common.in_developing') }}
                                    </md-tooltip>
                                </md-button>
                            </th>
                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>