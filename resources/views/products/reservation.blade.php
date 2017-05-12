@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page ">
    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => $trans->product_reservation_breadcrumbs ]]])

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="section">
                <div class="col-md-4">
                    <div class="row">
                        @if (count($data->menu) != 0)<a href="{{ route('get_menu', $data->slug) }}" class="reservLabel"><img src="images/plan-menu-img1.png" alt=""></a>@endif
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                    <span class="reservTitle">{{$trans->product_reservation_title}}</span>
                        <div id="instReservation" class="md-whiteframe-1dp">
    
            <div class="modalContainer">
                
                <form id="reservationForm" validate="novalidate" role="form" method="post" action="{{route('inst-reservation')}}" name="reservationForm" ng-cloak>
                    {!! Form::token() !!}
                        <div class="b-input" layout-gt-xs="row " layout-align="space-between start" layout-xs="column">
                        <div class="form-group">
                            <md-input-container class="md-block">
                                <label>{{$trans->modal_placeholder_name}}</label>
                                <input class="form-control" ng-minlength="3" required name="name" ng-model="reserv.name">
                                <div ng-messages="reservationForm.name.$error">
                                    <div ng-message="required">{{$trans->modal_validation_required}}</div>
                                    <div ng-message="minlength">{{$trans->modal_validation_name}}</div>
                                </div>
                            </md-input-container>
                        </div>
                        <div class="form-group">
                            <md-input-container class="md-block">
                                <label>{{$trans->modal_placeholder_phone}}</label>
                                <input class="form-control" ng-pattern="/^[0-9]+$/" ng-minlength="4" type="text" required name="phone" ng-model="reserv.phone">
                                <div ng-messages="reservationForm.phone.$error" role="alert" multiple>
                                    <div ng-message="required">{{$trans->modal_validation_required}}</div>
                                    <div ng-message="minlength">{{$trans->modal_validation_phone}}</div>
                                    <div ng-message="pattern">{{$trans->modal_validation_phone_pattern}}</div>
                                </div>
                            </md-input-container>
                        </div>
                    </div>
                    <div class="form-group">
                        <md-input-container class="md-block">
                          <label>{{$trans->modal_placeholder_message}}</label>
                          <textarea class="form-control" ng-minlength="5" required name="text" rows="5" md-select-on-focus placeholder="{{$trans->product_reservation_form_message}}" ng-model="reserv.text"></textarea>
                            <div ng-messages="reservationForm.text.$error">
                                    <div ng-message="required">{{$trans->modal_validation_required}}</div>
                                    <div ng-message="minlength">{{$trans->modal_validation_message_pattern}}</div>
                            </div>
                        </md-input-container>
                    </div>
                    <md-button type="submit"  class="md-raised md-warn md-block redButton">{{$trans->modal_button_send_request}}</md-button>
                </form>
            </div>
    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>         
</div>

@stop

@section('styleProductReservPage')
<style>
    
/*-----------------------------NEW RESERV PAGE-----------------------------*/

.reservTitle { margin-top: 20px; text-align: center; display: block; color: rgb(91,91,91); text-transform: uppercase; font-size: 18px; margin-bottom: 50px; }

#instReservation .modalContainer { padding: 30px 10% 30px }

#instReservation .modalContainer > span { color: rgb(148, 148, 148) }

.reservLabel {     display: block; text-align: center; }

.reservLabel img {     width: 100%; max-width: 250px; margin: 95px auto 30px; }

@media ( max-width: 991px){
    .reservLabel img {     width: 100%; max-width: 250px; margin: 35px auto 30px; }
}

@media ( min-width: 992px) and ( max-width: 1199px){
    .reservLabel img {     max-width: 200px; margin: 120px auto 30px; }
}

/*-----------------------------END RESERV PAGE-----------------------------*/


</style>
@stop