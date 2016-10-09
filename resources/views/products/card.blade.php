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
        <div class="text-center margin-b-25">
            <h1 class="c-title-card font-black">Корзина</h1>
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

        <div class="text-center margin-b-25">
            <h1 class="c-title-card font-black">Корзина</h1>
        </div>

        <form name="cartForm"  id="cart-form" role="form" method="post" action="index.php?action=main_cart&a=sendcart">

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

                        <input type="hidden" value="@{{ item.getQuantity() | number }}" name="">
                        <input type="hidden" value="@{{ item.getId() | number }}" name="">
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

        <div class="text-center margin-b-25 margin-t-30">
            <div class="c-title-divider"></div>
        </div>

        <div class="col-md-12">
            <div class="row" >

                
                    <div class="col-md-5 col-md-offset-1 col-md-push-6 margin-b-30">
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

                                    <md-input-container class="md-block">
                                        <label>Ваше имя</label>
                                        <input ng-minlength="2" md-maxlength="30" required name="cartName" ng-model="cart.cartName">
                                        <div ng-messages="cartForm.cartName.$error" role="alert" multiple>
                                            <div ng-message="required">Это поле обязательно.</div>
                                            <div ng-message="minlength">Имя должно содержать больше 2 символов.</div>
                                            <div ng-message="md-maxlength">Имя не должно содержать больше 30 символов.</div>
                                        </div>
                                    </md-input-container>

                                    <md-input-container class="md-block">
                                        <label>Ваш Email</label>
                                        <input name="cartEmail" ng-model="project.cartEmail" required minlength="5" maxlength="100" ng-pattern="/^.+@.+\..+$/" type="email">
                                       <div ng-messages="cartForm.cartEmail.$error" role="alert">
                                          <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
                                            Ваш email должен быть между 5 и 50 символов и должен быть похож на e-mail адрес.
                                          </div>
                                        </div>
                                    </md-input-container>

                                    <md-input-container class="md-block">
                                        <label>Телефон</label>
                                        <input ng-minlength="2" md-maxlength="30" required name="cartPhone" ng-model="project.cartPhone">
                                        <div ng-messages="cartForm.cartPhone.$error" role="alert" multiple>
                                            <div ng-message="required">Это поле обязательно.</div>
                                            <div ng-message="minlength">Телефон должно содержать больше 2 символов.</div>
                                            <div ng-message="md-maxlength">Телефон не должен содержать больше 30 символов.</div>
                                        </div>
                                    </md-input-container>

                                    <md-input-container class="md-block">
                                        <label>Адрес</label>
                                        <input ng-minlength="2" md-maxlength="100" required name="cartAdress" ng-model="project.cartAdress">
                                        <div ng-messages="cartForm.cartAdress.$error" role="alert" multiple>
                                            <div ng-message="required">Это поле обязательно.</div>
                                            <div ng-message="minlength">Адрес должно содержать больше 2 символов.</div>
                                            <div ng-message="md-maxlength">Адрес не должен содержать больше 100 символов.</div>
                                        </div>
                                    </md-input-container>

                                    <md-input-container class="md-block">
                                      <label>Замечания</label>
                                      <textarea ng-minlength="5" md-maxlength="150" required name="cartMessage" rows="5" md-select-on-focus placeholder="Пример: Хочу что бы на моем мероприятии было..." ng-model="project.message"></textarea>
                                        <div ng-messages="cartForm.cartMessage.$error">
                                                <div ng-message="required">Это поле обязательно.</div>
                                                <div ng-message="minlength">Сообщение должно содержать больше 5 символов.</div>
                                                <div ng-message="md-maxlength">Сообщение не должен содержать больше 150 символов.</div>
                                        </div>
                                    </md-input-container>                                

                                </div>
                            </div>

                            <md-button type="submit" class="check-accept visible-sm visible-xs md-raised md-warn md-block">Отправить</md-button>

                        </div>
                    </div>
                </form>       
            </div>
        </div>
    </div>
</script>
        
@stop

@section('cardPluginsValidation')
    <script src="js/formValidation.min.js"></script>
    <script src="js/validate_bootstrap.js"></script>
    <script>
        $('#cart-form') //инициализируем валидатор форм
                .formValidation({
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                   message: 'Введите Адрес электронной почты.'
                                },
                                emailAddress: {
                                   message: 'Адрес электронной почты был введен неправильно.'
                                }
                            }
                        },
                        name: {
                             validators: {
                                notEmpty: {
                                    message: 'Введите имя.'
                                },
                                 stringLength: {
                                 min: 2,
                                 message: 'Имя должно содержать не меньше 2 символов.'
                                },
                                regexp: {
                                   regexp: /^[a-zA-Zа-яА-Я ]+$/,
                                   message: 'Имя должно содержать только буквы'
                                }
                             }
                         },
                        adress: {
                            validators: {
                                notEmpty: {
                                    message: 'Введите адрес.'
                                },
                                stringLength: {
                                 min: 3,
                                 message: 'Адрес должен содержать не меньше 3 символов.'
                                },
                                regexp: {
                                   regexp: /^[a-zA-Zа-яА-Я,0-9. ]+$/,
                                   message: 'Адресс должен содержать только буквы'
                                }
                             }
                         },
                        tel: {
                            validators: {
                                notEmpty: {
                                    message: 'Введите телефон.'
                                },
                                numeric: {
                                    message: 'Телефон должен состоять только из цифр.'
                                },
                                stringLength: {
                                 min: 5,
                                 message: 'Телефон должен содержать не меньше 5 цифр.'
                                }
                            }
                         }
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
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            success: function(result) {
//                              alert("Вы подписаны!");
                                var confirmlink = lg+"/order-confirmed";
                                window.location.replace(confirmlink);
                                    
                            }   
                        });

                });
    </script>
@stop