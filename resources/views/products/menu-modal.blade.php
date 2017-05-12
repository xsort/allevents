<div id="getMenu" class="modal fade" role="dialog" >
    <div class="modal-dialog" >
        <md-dialog ng-cloak>
            <div class="modalContainer">
                <md-button class="modalClose md-icon-button" data-dismiss="modal" aria-label="close">
                    <md-icon md-svg-src="images/icons/close.svg"></md-icon>
                </md-button>

                <div
                        layout="row" layout-align="stretch"
                        layout-xs="column" layout-align-xs="start stretch">

                    <div flex=50 flex-xs=100 style="position: relative;">

                        <div class="container-fluid">

                            <div class="container-slider-for  md-whiteframe-1dp hidden-xs">
                                <div class="plan-slider-for">

                                </div>
                            </div>

                            <div class="container-slider-nav " layout="row" ng-cloak>

                                <button type="button" class="plan-next control-slider prev-arrow "></button>

                                <div class="col-md-12 col-xs-12">
                                    <div class="row">
                                        <div class="plan-slider-nav">

                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="plan-prev control-slider next-arrow "></button>

                            </div>

                        </div>
                    </div>

                    <div flex=50 layout="column" layout-align="start stretch"
                         flex-xs=100 >

                        <span class="menuTitle">@{{menu_name}}</span>
                        <span class="menuDescription" ng-bind-html="menu_description"></span>
                        <span class="menuDivider"></span>
                        <ngcart-addtocartmodal id="@{{menu_id}}" name="@{{menu_name}}" description="@{{menu_description}}" price="@{{menu_price}}" quantity="1" quantity-max="30" data="item" ></ngcart-addtocartmodal>

                        <script type="text/ng-template" id="template/ngCart/addtocartmodal.html">
                            <div layout="column" layout-align="start stretch" class="menuAddtocart">

                                <div layout="column" layout-align="start start" class="menuPrice">
                                    <span class="menuPrice">
                                        Цена: <span ng-model="price" > @{{price}}</span> лей
                                    </span>
                                    <span>
                                        Количество: <select name="quantity" id="quantity" ng-model="q" ng-options=" v for v in qtyOpt"></select>
                                    </span>
                                    <span>
                                        Сумма: @{{price*q}} лей
                                    </span>
                                </div>

                                <div class="menuOrder" layout="column" layout-align="start stretch">

                                    <md-button ng-click="ngCart.addItem(id, name, price, q, data)" ng-transclude class="md-raised md-warn md-block redButton">
                                        Заказать
                                    </md-button>

                                </div>

                                <mark ng-show="inCart()">
                                    Добавлено. <a ng-click="ngCart.removeItemById(id)" >Удалить из корзины</a>
                                </mark>
                            </div>
                        </script>

                    </div>
                </div>
            </div>
        </md-dialog>
    </div>
</div>