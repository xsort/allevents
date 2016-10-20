    <header class="container" ng-controller="headerCtrl" ng-class="{'open': isActive}" >        <div  class="headerWrapper container"  layout="row" ng-cloak >                    <div flex class="div-20 hidden-sm hidden-xs brandWrapper">                <a href="/index" class="brand"></a>            </div>             <div class="menuWrapper div-75 div-offset-5" layout="column" layout-align="space-between stretch">                <div layout="row" class="stickyHide">                    <div flex=33 class="lg-div-33 md-div-33 sm-div-33 xs-div-33">                        <a href="/" class="hidden-lg hidden-md top-sm-logo"></a>                    </div>                    <div flex=66 layout="row" class="lg-div-66 md-div-66 sm-div-66 xs-div-66">                        <div class="headerBtnModal hidden-xs" flex=80 layout="row" layout-align="space-around center">                            <md-button hidden-xs data-toggle="modal" data-target="#getEvent" md-ink-ripple="false" class="btnEvent">{{ trans('common.h-event')}} </md-button>                            <md-button hidden-xs data-toggle="modal" data-target="#getAuth" md-ink-ripple="false" class="btnAuth">Войти/Регистрация</md-button>                        </div>                        <div flex=20 class="headerLg xs-div-20" layout="row" layout-align="end center">                            <div ng-controller="headerLang as lang" class="lock-size" layout="row" layout-align="end center">                              <md-fab-speed-dial md-open="false" md-direction="left" ng-class="lang.selectedMode">                                <md-fab-trigger>                                  <md-button aria-label="menu" class="md-raised ">                                    RU                                  </md-button>                                </md-fab-trigger>                                <md-fab-actions>                                  <md-button ng-href="/ro/index" aria-label="Twitter" class="">                                    Ro                                  </md-button>                                  <md-button ng-href="/en/index" aria-label="Facebook" class="">                                    En                                  </md-button>                                </md-fab-actions>                              </md-fab-speed-dial>                            </div>                        </div>                    </div>                </div>                                    <div layout="row" class="h40" layout-align="space-between none" >                    <div class="div-75 ">                        <div class="headSearchCont" ng-class="{'open': isActive}">                            <form action="{{ route('search') }}" layout="row">                                 <md-input-container flex="70" flex-offset="20" md-no-float class="md-block">          <input placeholder="Поиск" required="" name="searchword">        </md-input-container>                            <div flex="10" flex-offset="5">                                <md-button type="submit" class=" md-raised" aria-label="search">                                    <md-icon md-svg-src="images/icons/magnify.svg"></md-icon>                                 </md-button>                                </div>                            </form>                        </div>                        <md-button ng-click="activeButton()"  class="md-icon-button visible-xs" aria-label="mobile menu">                            <md-icon md-svg-icon="images/icons/menu.svg"></md-icon>                        </md-button>                        <ul class="headerMenu hidden-xs" layout="row" layout-align="center stretch">                            <li class="green" flex=20>                                <a href="/news" layout-align="center center">{{ trans('common.m-news') }}</a>                            </li>                            <li class="red" flex=20>                                <a href="/reports" layout-align="center center">{{ trans('common.m-reports') }}</a>                            </li>                            <li class="yellow" flex=20>                                <a href="/promo" layout-align="center center">{{ trans('common.m-promo') }}</a>                            </li>                            <li class="brown" flex=20>                                <a href="exclusive" layout-align="center center">{{ trans('common.m-exclusiv') }}</a>                            </li>                            <li class="blue" flex=20>                                <a href="/about" layout-align="center center" >{{ trans('common.m-about') }}</a>                            </li>                        </ul>                    </div>                    <div class="search" ng-class="{'open': isActive}" layout="row" layout-align="end none" class="div-25">                        <md-button ng-click="searchButton()" class="headSearch" aria-label="search">                             <md-icon md-svg-src="images/icons/search.svg"></md-icon>                             <md-icon md-svg-src="images/icons/close.svg"></md-icon>                         </md-button>                        <md-button ng-href="/card" class="headCart" aria-label="cart" layout="row" layout-align="space-around center">                            <md-icon md-svg-src="images/icons/shopping-cart.svg"></md-icon>                             <span><ngcart-summary></ngcart-summary> лей</span>                        </md-button>                    </div>                              </div>            </div>       </div>    </header>    <script type="text/ng-template" id="template/ngCart/summary.html">        @{{ ngCart.totalCost() }}    </script>