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
                                <tbody>

                                    <tr class="item-row">

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://laravel.local/img/menu/menu-6.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet.</a><span class="amount">$12.00</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input type="number" size="4" value="2" name="" min="0" step="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$24.00</span> 
                                        </td>

                                        <td class="item-remove">
                                            <a title="Remove this item" class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://laravel.local/img/menu/menu-4.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur.</a><span class="amount">$5.00</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input type="number" size="4" value="1" name="" min="0" step="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$5.00</span> 
                                        </td>

                                        <td class="item-remove">
                                            <a title="Remove this item" class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://laravel.local/img/menu/menu-1.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet.</a><span class="amount">$12.00</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input type="number" size="4" value="2" name="" min="0" step="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$24.00</span> 
                                        </td>

                                        <td class="item-remove">
                                            <a title="Remove this item" class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://laravel.local/img/menu/menu-2.jpg">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur.</a><span class="amount">$5.00</span> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input type="number" size="4" value="1" name="" min="0" step="1">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount">$5.00</span> 
                                        </td>

                                        <td class="item-remove">
                                            <a title="Remove this item" class="remove" href="javascript:void(0)">×</a> 
                                        </td>

                                    </tr>



                                </tbody>
                            </table>
                <div class="text-center margin-b-25 margin-t-30">
                    <h1 class="c-title-card font-black">Заказать</h1>
                </div>

                <div class="col-md-12">
                <div class="row">


                    <div class="col-md-5 col-md-offset-1 col-md-push-6 margin-b-30">
                        <div class="row">
                            <div id="order_review">
                                <h3 class="order_review_heading">Ваш заказ</h3>
                                <table class="shop-info">
                                <tbody>
                                    <tr>
                                        <th>Подсчитано</th>
                                        <td><span class="amount">$229.00</span></td>
                                    </tr>
                                    <tr>
                                        <th>Скидка</th>
                                        <td>
                                            10%   
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Всего</th>
                                            <td>
                                                <strong><span class="amount">$209.00</span></strong> 
                                            </td>
                                        </tr>
                                </tbody>
                                </table>
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
                                            <input type="text" placeholder="Ваше имя *" class="placeholder-fix form-control" >
                                         </div>
                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">E-mail адрес</label>
                                            <input type="email" placeholder="E-mail адрес *" class="placeholder-fix form-control" >
                                         </div>
                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">Телефон</label>
                                            <input type="tel" placeholder="Телефон *" class="placeholder-fix form-control" >
                                         </div>
                                         <div class="form-group">
                                            <label for="inputTextarea" class="control-label">Адрес</label>
                                            <input type="tel" placeholder="Адрес *" class="placeholder-fix form-control">
                                         </div>

                                         <div class="form-group margin-b-25">
                                            <label for="inputTextarea" class="control-label">Замечания</label>
                                            <textarea id="inputTextarea" class="form-control" rows="3" placeholder="Примечание о вашем заказе, например специальные примечания для доставки." style="resize: vertical;" name="message"></textarea>
                                        </div>

                                      </div>
                                    </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 text-center"> 
                                        <button class="btn check-accept " type="submit">ОФОРМИТЬ</button>
                                    </div>
                                </div>
                            </div>

                        </div>
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