@extends('body')
@section('centerbox')

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

        <form name="cartForm2"  id="cart-form2" role="form" method="post" action="{{ route('send-card') }}">
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
                                            <input class="form-control" ng-pattern="/^[0-9]+$/"  ng-minlength="4" required name="cartPhone" ng-model="project.cartPhone">
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
                                numeric: {
                                },
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