<div class="layout-inst-menu">
    <div class="container ">
        <div class="row">
            <div class="hidden-xs">
               
                <table class="sticky sticky-left">
                <tr><th><a href="{{$data->slug}}/photo">Фото</a></th><th><a href="{{$data->slug}}/video">Видео</a></th><th><a href="">Акции</a></th><th><a href="{{$data->slug}}/plan">План зала</a></th></tr>
                </table>
                <a href="{{$data->slug}}" class="menu-logo hidden-sm hidden-xs">
                    <span>
                        <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                    </span>
                </a>
             
                <table class="sticky sticky-right">
                <tr><th ><a href="{{$data->slug}}/menu">Меню</a></th><th><a href="">Интерьер</a></th><th ><a href="">Резервирование</a></th></tr>
                </table>
            </div>
             
            <div class="visible-xs">
                <button type="button" class="visible-xs togglebtn-second "><i class="fa fa-reorder fa-2x"></i></button>
                <ul class="nav xs-menu-second">
                    <li><a href="{{$data->slug}}/photo">Фото</a></li>
                    <li><a href="{{$data->slug}}/video">Видео</a></li>
                    <li><a href="javascript:void(0)">Акции</a></li>
                    <li><a href="../allevents/plan.php">План зала</a></li>
                    <li><a href="../allevents/menu.php">Меню</a></li>
                    <li><a href="javascript:void(0)">Интерьер</a></li>
                    <li><a href="javascript:void(0)">Резервирование</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>