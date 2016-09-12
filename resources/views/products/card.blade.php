@extends('body')
@section('centerbox')
<div class="layout-page ">


<div class="layout-content" >
    <div class="container-fluid">
        <div class="col-md-9">
            <div class="row">
                <div class="text-center margin-b-25">
                    <h1 class="c-title-card font-black">Корзина</h1>
                </div>
                            <table class="shop-container cart">
                                <thead>
                                    <tr>
                                        <th class="item-name">Продукт</th>
                                        <th class="item-empty">&nbsp;</th>
                                        <th class="item-quantity">Количество</th>
                                        <th class="item-subtotal">Всего</th>
                                        <th class="item-remove">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody >

                                    <tr class="item-row" >

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="img/menu/menu-6.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet.</a><span class="amount" ng-model="price" ng-init="price='12'"> $@{{price}}</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value" ng-init="value='1'" value="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$@{{total=value*price}} </span> 
                                        </td>

                                        <td class="item-remove">
                                            <a  class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>

                                    <tr class="item-row" >

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="img/menu/menu-5.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet.</a><span class="amount" ng-model="price1" ng-init="price1='24'"> $@{{price1}}</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value1" ng-init="value1='1'" value="1" string-to-number>
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$@{{total1=value1*price1}} </span> 
                                        </td>

                                        <td class="item-remove">
                                            <a  class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>

                                    <tr class="item-row" >

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="img/menu/menu-4.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet.</a><span class="amount" ng-model="price2" ng-init="price2='36'"> $@{{price2}}</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity" >
                                                <input min="1" type="number" ng-model="value2" ng-init="value2='1'" value="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$@{{total2=value2*price2}} </span> 
                                        </td>

                                        <td class="item-remove">
                                            <a  class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>

                                    <tr class="item-row" >

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="img/menu/menu-2.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet.</a><span class="amount" ng-model="price3" ng-init="price3='48'"> $@{{price3}}</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value3" ng-init="value3='1'" value="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$@{{total3=value3*price3}} </span> 
                                        </td>

                                        <td class="item-remove">
                                            <a class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>



                                </tbody>
                            </table>
                <div class="text-center margin-b-25 margin-t-30">
                    <div class="c-title-divider"></div>
                </div>

                <div class="col-md-12">
                <div class="row">

                    <form  id="cart-form" role="form" method="post" action="index.php?action=main_cart&a=sendcart">
                    <div class="col-md-5 col-md-offset-1 col-md-push-6 margin-b-30">
                        <div class="row">
                            <div id="order_review">
                                <h3 class="order_review_heading">Ваш заказ</h3>
                                <table class="shop-info">
                                <tbody>
                                    <tr>
                                        <th>Подсчитано</th>
                                        <td><span class="amount">$@{{conc=total+total1+total2+total3}}</span></td>
                                    </tr>
                                    <tr>
                                        <th>Скидка</th>
                                        <td ng-model="red" ng-init="red='10'">
                                            @{{red}}%   
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Всего</th>
                                            <td>
                                                <strong><span class="amount">$@{{conc}}</span></strong> 
                                            </td>
                                        </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>

                            <div class="container-fluid margin-t-15 visible-md visible-lg">
                                <div class="row">
                                    <div class="col-xs-12 text-center"> 
                                        <button class="btn check-accept " type="submit">ОФОРМИТЬ</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    


                    <div class="col-md-6 col-md-pull-6">
                    
                    <div class="row">
                            <div id="order_review">
                                <h3 class="order_review_heading">Личные данные</h3>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1 col-xs-12 margin-t-10">

                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">Ваше имя</label>
                                            <input type="text" placeholder="Ваше имя *" class="placeholder-fix form-control" name="name">
                                         </div>
                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">E-mail адрес</label>
                                            <input type="email" placeholder="E-mail адрес *" class="placeholder-fix form-control" name="email">
                                         </div>
                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">Телефон</label>
                                            <input type="tel" placeholder="Телефон *" class="placeholder-fix form-control" name="tel">
                                         </div>
                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">Адрес</label>
                                            <input type="text" placeholder="Адрес *" class="placeholder-fix form-control" name="adress">
                                         </div>

                                         <div class="form-group margin-b-25">
                                            <label for="inputTextarea" class="control-label">Замечания</label>
                                            <textarea id="inputTextarea" class="form-control" rows="3" placeholder="Примечание о вашем заказе, например специальные примечания для доставки." style="resize: vertical;" name="message"></textarea>
                                        </div>

                                      </div>
                                    </div>
                            </div>
                            
                             <div class="container-fluid margin-t-15 visible-sm visible-xs">
                                <div class="row">
                                    <div class="col-xs-12 text-center"> 
                                        <button class="btn check-accept " type="submit">ОФОРМИТЬ</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @include('partials.right-banners')
    </div>
</div>

</div>        
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