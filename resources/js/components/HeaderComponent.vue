<template>
    <!-- ### $Topbar ### -->
    <div class="header navbar">
        <div class="header-container">
            <ul class="nav-left">
                <li>
                    <a href="#" @click.prevent="sidebarToggle()">
                        <i class="fal fa-bars"></i>
                    </a>
                </li>
                <li class="search-box">
                    <a class="no-pdd-right" href="#" @click.prevent="searchToggle()">
                        <i class="search-icon fal fa-search pdd-right-10"></i>
                        <i class="search-icon-close fal fa-times pdd-right-10"></i>
                    </a>
                </li>
                <li class="search-input">
                    <input class="form-control" type="text" placeholder="Search...">
                </li>
            </ul>

            <ul class="nav-right">
                <li class="notifications dropdown">
                    <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown">
                        <i class="fal fa-globe"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB">
                            <i class="fal fa-globe pR-10"></i>
                            <span class="fsz-sm fw-600 c-grey-900">Idiomas</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu fsz-sm languages">
                                <li>
                                    <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="fal fa-minus mR-10"></i>
                                        <span class="text">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="fal fa-minus mR-10"></i>
                                        <span class="text">Spain</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="fal fa-check mR-10"></i>
                                        <span class="text">Português (Brasil)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="notifications dropdown">
                    <span class="counter bgc-red">3</span>
                    <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown">
                        <i class="fal fa-bell"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB">
                            <i class="fal fa-bell pR-10"></i>
                            <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                        </li>
                        <li>
                            <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                <li>
                                    <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                        <div class="peer mR-15">
                                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                        </div>
                                        <div class="peer peer-greed">
                                        <span>
                                            <span class="fw-500">John Doe</span>
                                            <span class="c-grey-600">liked your <span class="text-dark">post</span></span>
                                        </span>
                                            <p class="m-0">
                                                <small class="fsz-xs">5 mins ago</small>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                        <div class="peer mR-15">
                                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg"
                                                 alt="">
                                        </div>
                                        <div class="peer peer-greed">
                                        <span>
                                            <span class="fw-500">Moo Doe</span>
                                            <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span>
                                        </span>
                                            <p class="m-0">
                                                <small class="fsz-xs">7 mins ago</small>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                        <div class="peer mR-15">
                                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                        </div>
                                        <div class="peer peer-greed">
                                        <span>
                                            <span class="fw-500">Lee Doe</span>
                                                <span class="c-grey-600">commented on your <span class="text-dark">video</span></span>
                                        </span>
                                            <p class="m-0">
                                                <small class="fsz-xs">10 mins ago</small>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pX-20 pY-15 ta-c bdT">
                        <span>
                              <a href="#" class="c-grey-600 cH-blue fsz-sm td-n">
                                  View All Notifications <i class="fal fa-angle-right fsz-xs mL-10"></i>
                              </a>
                        </span>
                        </li>
                    </ul>
                </li>

                <li class="notifications dropdown">
                    <span class="counter bgc-blue">3</span>
                    <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown">
                        <i class="fal fa-envelope"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB">
                            <i class="fal fa-envelope pR-10"></i>
                            <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                        </li>
                        <li>
                            <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                <li>
                                    <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                        <div class="peer mR-15">
                                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                        </div>
                                        <div class="peer peer-greed">
                                            <div>
                                                <div class="peers jc-sb fxw-nw mB-5">
                                                    <div class="peer">
                                                        <p class="fw-500 mB-0">John Doe</p>
                                                    </div>
                                                    <div class="peer">
                                                        <small class="fsz-xs">5 mins ago</small>
                                                    </div>
                                                </div>
                                                <span class="c-grey-600 fsz-sm">
                                                    Want to create your own customized data generator for your app...
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                        <div class="peer mR-15">
                                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                        </div>
                                        <div class="peer peer-greed">
                                            <div>
                                                <div class="peers jc-sb fxw-nw mB-5">
                                                    <div class="peer">
                                                        <p class="fw-500 mB-0">Moo Doe</p>
                                                    </div>
                                                    <div class="peer">
                                                        <small class="fsz-xs">15 mins ago</small>
                                                    </div>
                                                </div>
                                                <span class="c-grey-600 fsz-sm">
                                                Want to create your own customized data generator for your app...
                                            </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                        <div class="peer mR-15">
                                            <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                        </div>
                                        <div class="peer peer-greed">
                                            <div>
                                                <div class="peers jc-sb fxw-nw mB-5">
                                                    <div class="peer">
                                                        <p class="fw-500 mB-0">Lee Doe</p>
                                                    </div>
                                                    <div class="peer">
                                                        <small class="fsz-xs">25 mins ago</small>
                                                    </div>
                                                </div>
                                                <span class="c-grey-600 fsz-sm">
                                                Want to create your own customized data generator for your app...
                                            </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pX-20 pY-15 ta-c bdT">
                        <span>
                            <a href="#" class="c-grey-600 cH-blue fsz-sm td-n">
                                View All Email <i class="fs-xs fal fa-angle-right mL-10"></i>
                            </a>
                        </span>
                        </li>
                    </ul>
                </li>

                <li class="profiles dropdown">
                    <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                        <div class="peer mR-10">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                        </div>
                        <div class="peer">
                            <span class="fsz-sm c-grey-900">John Doe</span>
                        </div>
                    </a>
                    <ul class="dropdown-menu fsz-sm">
                        <li>
                            <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                <i class="c-brown-500 fal fa-cog mR-10"></i>
                                <span class="text">Setting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                <i class="c-deep-orange-500 fal fa-user mR-10"></i>
                                <span class="text">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                <i class="c-purple-500 fal fa-envelope mR-10"></i>
                                <span class="text">Messages</span>
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="/logout" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                <i class="c-red-500 fal fa-power-off mR-10"></i>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import MenuComponent from './MenuComponent';

    export default {
        name: "HeaderComponent",

        methods: {
            sidebarToggle() {
                MenuComponent.methods.sidebarToggle();
            },

            searchToggle() {
                $('.search-box, .search-input').toggleClass('active');
                $('.search-input input').focus();
            }
        }
    }
</script>
