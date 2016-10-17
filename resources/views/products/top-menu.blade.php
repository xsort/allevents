<div class="row">
    <div class="layoutInstMenu hidden-xs">
    
            <div class="instMenuWrapper container hidden-xs">
                <div class="row">
               
                <table class="instMenuLeft">
                     <tr>
                         <th><md-button ng-href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</md-button></th>
                         <th><md-button ng-href="{{ route('get_videos',     $data->slug) }}">{{ trans('common.video') }}</md-button></th>
                         <th><md-button ng-href="{{ route('get_promo',      $data->slug) }}">{{ trans('common.promo') }}</md-button></th>
                     </tr>
                </table>
                <a href="{{$data->slug}}" class="instMenuLogo md-whiteframe-1dp hidden-sm hidden-xs">
                        <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                </a>
                <table class="instMenuRight">
                    <tr>
                        <th><md-button  ng-href="{{ route('get_plan',       $data->slug) }}">{{ trans('common.plan') }}</md-button></th>
                        
                        <th><md-button ng-disabled="true" class="disabled" ng-href="{{ route('get_menu',       $data->slug) }}">
                                {{ trans('common.menu') }}
                                <md-tooltip md-direction="bottom" md-delay="100">
                                      Временно не заполнено
                                </md-tooltip>
                            </md-button>
                        </th>
                        <th><md-button ng-href="{{ route('get_reservation',$data->slug) }}">{{ trans('common.reservation')}}</md-button></tr>
                </table>
</div>
            </div>
    </div>
</div>