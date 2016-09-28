<div class="layout-inst-menu hidden-xs">
    <div class="container ">
        <div class="row">
            <div class="hidden-xs">
               
                <table class="sticky sticky-left">
                     <tr>
                         <th><a href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</a></th>
                         <th><a href="{{ route('get_videos',     $data->slug) }}">{{ trans('common.video') }}</a></th>
                         <th><a href="{{ route('get_promo',      $data->slug) }}">{{ trans('common.promo') }}</a></th>
                     </tr>
                </table>
                <a href="{{$data->slug}}" class="menu-logo hidden-sm hidden-xs">
                    <span>
                        <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                    </span>
                </a>
                <table class="sticky sticky-right">
                    <tr>
                        <th><a href="{{ route('get_plan',       $data->slug) }}">{{ trans('common.plan') }}</a></th>
                        <th><a href="{{ route('get_menu',       $data->slug) }}">{{ trans('common.menu') }}</a></th>
                        <th><a href="{{ route('get_reservation',$data->slug) }}">{{ trans('common.reservation') }}</a></tr>
                </table>
            </div>
             
            <div class="visible-xs">
                <button type="button" class="visible-xs togglebtn-second "><i class="fa fa-reorder fa-2x"></i></button>
                <ul class="nav xs-menu-second">
                    <li><a href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</a></li>
                    <li><a href="{{ route('get_videos',     $data->slug) }}">{{ trans('common.video') }}</a></li>
                    <li><a href="{{ route('get_promo',      $data->slug) }}">{{ trans('common.promo') }}</a></li>
                    <li><a href="{{ route('get_plan',       $data->slug) }}">{{ trans('common.plan') }}</a></li>
                    <li><a href="{{ route('get_menu',       $data->slug) }}">{{ trans('common.menu') }}</a></li>
                    <li><a href="{{ route('get_reservation',$data->slug) }}">{{ trans('common.reservation') }}</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>