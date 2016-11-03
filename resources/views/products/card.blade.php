@extends('body')
@section('centerbox')

<style>
    

/*----------------------------- NEW CARD ----------------------------------*/


.mainCart { width: 100%; }

.mainCart tbody { box-shadow: 0 2px 5px 0 rgba(0,0,0,.26); }

.mainCart tr th {    font-size: 13px; color: rgb(91, 91, 91); text-transform: uppercase; font-weight: 600; padding: 13px 8px; }

.mainCart .itemRow { border: 1px solid #a4a4a4; }

.mainCart tr.itemRow{ background-color: white }

.mainCart tr.itemRow:nth-child(2n-1){     background-color: #fafafa; }

.mainCart .itemRow td { padding: 8px; }

.mainCart .itemRow .itemRemove { width: 100px; }

.mainCart .itemRow .itemName { width: 250px;     color: rgb(91,91,91); }

.mainCart .itemRow .itemName table {     width: 100%; word-wrap: break-word; table-layout: fixed; }

.mainCart .itemRow .itemName table tbody { box-shadow: none }

.mainCart .itemRow .itemName table td { padding: 0; }

.mainCart .itemRow .itemRemove button {     background-color: white; border: 1px solid #a4a4a4; border-radius: 0; color: #a0978d; height: 40px; min-height:40px; min-width:40px; width: 40px; }

.mainCart .itemRow .itemRemove button.md-button .md-ripple-container { border-radius: 0 }

.mainCart .itemRow .itemRemove button md-icon { color: #a0978d;     height: 20px; width: 20px; min-height: 20px; min-width: 20px; }

.mainCart .itemRow .itemQty .qty {position: relative; width: 90px;    box-shadow: 0 2px 5px 0 rgba(0,0,0,.26); }

.mainCart .itemRow .itemQty .qty button {    background: none; border: none; height: 100%; display: block; border-left: 1px solid #a4a4a4; line-height: 20px;  position: absolute; right: 0; height: 50%; margin: 0; }

.mainCart .itemRow .itemQty .qty button:first-child{ bottom: 0; }

.mainCart .itemRow .itemQty .qty button:last-child{ top:0; }

.mainCart .itemRow .itemQty input {    background: white; padding-right: 22px; width: 100%; text-align: center; border: 1px solid #a4a4a4; height: 40px; }

.mainCart .itemRow .itemAmount span, .mainCart .itemRow .itemTotal span { color: #e3605b; font-weight: 400; font-size: 17px; }

.cartCheckout { margin-bottom: 30px; }

@media( max-width: 767px) {
    .mainCart .itemRow .itemRemove button { box-shadow:none; margin:0; border:0px; height: 20px; min-height: 10px; min-width: 10px; width: 20px; line-height: 10px; padding: 0; }

    .mainCart .itemRow .itemQty .qty { width: 60px; box-shadow: none; }

    .mainCart .itemRow .itemQty .qty button:last-child { line-height: 18px; }

    .mainCart .itemRow .itemQty .qty button:first-child {     line-height: 10px; }

    .mainCart .itemRow .itemQty input { font-size: 13px; height: 34px; }

    .mainCart .itemRow .itemAmount, .mainCart .itemRow .itemTotal { text-align: center; }

    .mainCart .itemRow .itemAmount span, .mainCart .itemRow .itemTotal span { font-size: 13px; width: 100%; display: block; height: 20px; overflow: hidden; }

    .mainCart tr th { font-size: 10px; }

    .mainCart .itemRow td {     padding: 8px 4px; }

    .mainCart thead th.itemQty span {display: none;}

    .mainCart .itemRow .itemName { font-size: 11px; }

    .mainCart .itemRow .itemRemove { width: 30px; }

    .mainCart .itemRow .itemRemove button {     background-color: transparent;}
}


table.shop-info { width: 100%; }

table.shop-info th.product-total { text-align: right; }

table.shop-info th { padding: 15px 0; font-weight: 500; color: #39342e; }

table.shop-info td { padding: 15px 0; font-weight: 600; color: #39342e; text-align: right; }

table.shop-info .amount { font-size: 20px;     color: rgb(91, 91, 91); font-weight: 500; }

table.shop-info tr { border-bottom: 1px dashed #a4a4a4; }

table.shop-info tr:last-child { border-bottom: 0px dashed #a4a4a4; }

.check-accept { width: 90%; height: 40px; margin: 0 auto; background-color: #e3605b !important; margin-top: 15px;}

md-toolbar:not(.md-menu-toolbar).md-warn.cartWarning{ background-color: #e3605b; }

.cartAuth{ width: 86%; margin-left: 7%; margin-top: 50px; margin-bottom: 20px; box-sizing: border-box; }

.cartAuth textarea{ margin-top: 10px; }

@media(max-width: 767px){ .cartAuth { width: 100%; margin-left: 0; } .check-accept{ width: 100%; } }

#order_review { background: white; padding: 18px; border: 1px solid #a4a4a4; padding-bottom: 0px;     box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);}

h3.order_review_heading { margin-top: 0; font-size: 14px; color: #685e52; text-transform: uppercase; font-weight: 600; border: 1px dashed #a4a4a4; padding: 15px; width: 100%; border: 0; border-bottom: 1px solid #a4a4a4; padding: 0 0 15px; margin-top: 0; }

/*--------------------------END NEW CARD ----------------------------------*/
</style>

<div class="layout-page">
    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="cartCont">
                        <ngcart-cart></ngcart-cart>
                    </div>
                </div>

                @include('partials.right-banners')
            </div>
        </div>
    </div>
</div>




<script type="text/ng-template" id="template/ngCart/cart.html">

    <div ng-show="ngCart.getTotalItems() === 0">
        <div class="text-center newsListTitle">
            <h1 class="page-title  rowed">Корзина</h1>
        </div>

        <md-toolbar class="md-warn cartWarning">
            <div class="md-toolbar-tools">

                <md-button class="md-icon-button" aria-label="More">
                    <md-icon md-svg-icon="images/icons/arrow-left.svg"></md-icon>
                </md-button>

                <h2 class="md-flex">Ваша корзина пустая</h2>
            </div>
        </md-toolbar>
    </div>

    <div ng-show="ngCart.getTotalItems() > 0">

        <div class="text-center newsListTitle">
            <h1 class="page-title  rowed">Корзина</h1>
        </div>

        <form name="cartForm"  id="cart-form" role="form" method="post" action="{{ route('send-card') }}">

        {!! Form::token() !!}

        <table class="mainCart">
            <thead>
                <tr>
                    <th class="itemRemove">&nbsp;</th>
                    <th class="itemName">&nbsp;</th>
                    <th class="itemQty"><span>Количество</span></th>
                    <th class="itemAmount">Цена</th>
                    <th class="itemTotal">Всего</th>
                </tr>
            </thead>
                
            <tbody >
                <tr class="itemRow" ng-repeat="item in ngCart.getCart().items track by $index">

                    <td class="itemRemove">
                        <md-button class="md-raised" md-ink-ripple="false" ng-click="ngCart.removeItemById(item.getId())" aria-label="delete">
                            <md-icon md-svg-src="images/icons/close.svg"></md-icon>
                        </md-button> 
                    </td>

                    <td class="itemName">
                        <table>
                          <tr>
                            <td>
                                <span>@{{ item.getName() }}</span>
                            </td>
                          </tr>
                        </table>
                    </td>
                        
                    <td class="itemQty">
                        <div class="qty ">

                            <button type="button" ng-class="{'disabled':item.getQuantity()==1}"  ng-click="item.setQuantity(-1, true)"> <i class="fa fa-angle-down"></i> </button>
                            
                            <input type="text" value="@{{ item.getQuantity() | number }}" disabled="disabled">

                            <button  type="button" ng-click="item.setQuantity(1, true)"><i class="fa fa-angle-up"></i></button>
                        </div>

                        <input type="hidden" value="@{{ item.getQuantity() | number }}" name="data[@{{ item.getId() | number }}]">

                    </td>

                    <td class="itemAmount">
                        <span >@{{item.getPrice()}} лей</span>
                    </td>

                    <td class="itemTotal">
                        <span >@{{ item.getTotal()}} лей</span> 
                    </td>

                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <div class="c-title-divider"></div>
        </div>

        <div class="col-md-12">
            <div class="row" >

                
                    <div class="col-md-5 col-md-offset-1 col-md-push-6 cartCheckout">
                        <div class="row">

                            <div id="order_review">
                                <h3 class="order_review_heading">Ваш заказ</h3>
                                    <table class="shop-info">
                                        <tbody>
                                            <tr>
                                                <th>Всего</th>
                                                <td><span class="amount">@{{ ngCart.totalCost() }} лей</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>

                        </div>
                        <md-button type="submit" class="check-accept visible-md visible-lg md-raised md-warn md-block">Отправить</md-button>
                    </div>
                        
                    <div class="col-md-6 col-md-pull-6">
                        <div class="row">

                            <div id="order_review">
                                <h3 class="order_review_heading">Личные данные</h3>

                                <div class="cartAuth">
                                    <div class="form-group">
                                        <md-input-container class="md-block">
                                            <label>Ваше имя</label>
                                            <input class="form-control" ng-minlength="2" required name="cartName" ng-model="cart.cartName">
                                            <div ng-messages="cartForm.cartName.$error" role="alert" multiple>
                                                <div ng-message="required">Это поле обязательно.</div>
                                                <div ng-message="minlength">Имя должно содержать не меньше 2 символов.</div>
                                            </div>
                                        </md-input-container>
                                    </div>
                                    <div class="form-group">
                                    <md-input-container class="md-block">
                                            <label>Ваш Email</label>
                                            <input class="form-control" name="cartEmail" ng-model="project.cartEmail" required minlength="4" ng-pattern="/^.+@.+\..+$/" type="email">
                                           <div ng-messages="cartForm.cartEmail.$error" role="alert">
                                              <div ng-message-exp="['required', 'minlength', 'pattern']">
                                                Ваш email должен содержать не меньше 4 символов и должен быть похож на e-mail адрес.
                                              </div>
                                            </div>
                                        </md-input-container>
                                    </div>
                                    <div class="form-group">
                                        <md-input-container class="md-block">
                                            <label>Телефон</label>
                                            <input class="form-control" ng-pattern="/^[0-9 ]+$/"  ng-minlength="4" required name="cartPhone" ng-model="project.cartPhone">
                                            <div ng-messages="cartForm.cartPhone.$error" role="alert" multiple>
                                                <div ng-message="required">Это поле обязательное</div>
                                                <div ng-message="minlength">Телефон должен содержать не менее 4 символов</div>
                                                <div ng-message="pattern">Телефон должно содержать только цифры</div>
                                            </div>
                                        </md-input-container>
                                    </div>
                                    <div class="form-group">
                                        <md-input-container class="md-block">
                                            <label>Адрес</label>
                                            <input class="form-control" ng-minlength="3" required name="cartAdress" ng-model="project.cartAdress">
                                            <div ng-messages="cartForm.cartAdress.$error" role="alert" multiple>
                                                <div ng-message="required">Это поле обязательно.</div>
                                                <div ng-message="minlength">Адрес должно содержать не меньше 3 символов.</div>
                                            </div>
                                        </md-input-container>
                                    </div>
                                    <div class="form-group">
                                    <md-input-container class="md-block">
                                          <label>Замечания</label>
                                          <textarea class="form-control" ng-minlength="5" required name="cartMessage" rows="5" md-select-on-focus placeholder="Пример: Хочу что бы на моем мероприятии было..." ng-model="project.message"></textarea>
                                            <div ng-messages="cartForm.cartMessage.$error">
                                                    <div ng-message="required">Это поле обязательно.</div>
                                                    <div ng-message="minlength">Сообщение должно содержать больше 5 символов.</div>
                                            </div>
                                        </md-input-container>                                
                                    </div>
                                </div>
                            </div>

                            <md-button type="submit" class="check-accept visible-sm visible-xs md-raised md-warn md-block">Отправить</md-button>

                        </div>
                    </div>
                       
            </div>
        </form>

<script>
    
$('#cart-form')
                .formValidation({
                    fields: {
                        cartName: {
                             validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 2,
                                }
                             }
                         },

                        cartEmail: {
                             validators: {
                                notEmpty: {
                                },
                                stringLength: {
                                 min: 4,
                                },
                                emailAddress: {
                                    
                                },
                                regexp: {
                                    regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                                }
                             }
                         },
                        
                        cartPhone: {
                            validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 4,
                                },
                                regexp: { 
                                    regexp: '[0-9 ]+',
                                } 
                             }
                         },
                         cartAdress: {
                             validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 3,
                                }
                             }
                         },

                        cartMessage: {
                             validators: {
                                notEmpty: {
                                },
                                stringLength: {
                                 min: 5,                                 
                                }
                            }
                         },
                    }
                })
                
.on('success.form.fv', function(e) {
                    // Prevent form submission
                    e.preventDefault();
        
                    var $form = $(e.target),
                        formData = new FormData(),
                        params   = $form.serializeArray(),
                        fv    = $(e.target).data('formValidation');
                        
                    $.each(params, function(i, val) {
                        formData.append(val.name, val.value);
                    });
                    
                    $.ajax({
                            url: $form.attr('action'),
                            data: formData,
                            async: true,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            success: function(result) {
                                swal("Поздравляем", "Ваше сообщение отправлено", "success");
                            }   
                        });

                });

</script>

        
@stop