<template>
    <div class="sidebar">
        <div class="sidebar-inner">
            <!-- ### $Sidebar Header ### -->
            <div class="sidebar-logo">
                <div class="peers ai-c fxw-nw">
                    <div class="peer peer-greed">
                        <a class="sidebar-link td-n" href="#">
                            <div class="peers ai-c fxw-nw">
                                <div class="peer">
                                    <div class="logo text-center">
                                        <img class="mT-20" src="/images/logo.png" alt="" style="width: 55px;">
                                    </div>
                                </div>
                                <div class="peer peer-greed">
                                    <h5 class="lh-1 mB-0 logo-text">Administrador</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="peer mL-10">
                        <div class="mobile-toggle">
                            <a href="#" class="td-n" @click.prevent="sidebarToggle()">
                                <i class="fal fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ### $Sidebar Menu ### -->
            <ul class="sidebar-menu scrollable pos-r">
                <li class="nav-item mT-30 active">
                    <a class="sidebar-link" href="#">
                    <span class="icon-holder">
                        <i class="c-blue-500 fal fa-home"></i>
                    </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="#">
                    <span class="icon-holder">
                        <i class="c-brown-500 fal fa-envelope"></i>
                    </span>
                        <span class="title">Email</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="#">
                    <span class="icon-holder">
                        <i class="c-blue-500 fal fa-share-square"></i>
                    </span>
                        <span class="title">Compose</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="#">
                    <span class="icon-holder">
                        <i class="c-deep-orange-500 fal fa-calendar-alt"></i>
                    </span>
                        <span class="title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="#">
                    <span class="icon-holder">
                        <i class="c-deep-purple-500 fal fa-comments"></i>
                    </span>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="#">
                    <span class="icon-holder">
                        <i class="c-indigo-500 fal fa-chart-bar"></i>
                    </span>
                        <span class="title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class='sidebar-link' href="#">
                    <span class="icon-holder">
                        <i class="c-light-blue-500 fal fa-pencil"></i>
                    </span>
                        <span class="title">Forms</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="sidebar-link" href="#">
                    <span class="icon-holder">
                        <i class="c-pink-500 fal fa-palette"></i>
                    </span>
                        <span class="title">UI Elements</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" @click.prevent="dropDownToggle($event)">
                    <span class="icon-holder">
                        <i class="c-orange-500 fal fa-list"></i>
                    </span>
                        <span class="title">Tables</span>
                        <span class="arrow">
                        <i class="fal fa-angle-right fa-2x"></i>
                    </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class='sidebar-link' href="#">Basic Table</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="#">Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" @click.prevent="dropDownToggle($event)">
                    <span class="icon-holder">
                        <i class="c-purple-500 fal fa-map"></i>
                    </span>
                        <span class="title">Maps</span>
                        <span class="arrow">
                        <i class="fal fa-angle-right fa-2x"></i>
                    </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Google Map</a>
                        </li>
                        <li>
                            <a href="#">Vector Map</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" @click.prevent="dropDownToggle($event)">
                    <span class="icon-holder">
                        <i class="c-red-500 far fa-copy"></i>
                    </span>
                        <span class="title">Pages</span>
                        <span class="arrow">
                        <i class="fal fa-angle-right fa-2x"></i>
                    </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class='sidebar-link' href="#">Blank</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="#">404</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="#">500</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="#">Sign In</a>
                        </li>
                        <li>
                            <a class='sidebar-link' href="#">Sign Up</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" @click.prevent="dropDownToggle($event)">
                    <span class="icon-holder">
                        <i class="c-teal-500 fal fa-list-ul"></i>
                    </span>
                        <span class="title">Multiple Levels</span>
                        <span class="arrow">
                        <i class="fal fa-angle-right fa-2x"></i>
                    </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a href="#">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" @click.prevent="dropDownToggle($event)">
                                <span>Menu Item</span>
                                <span class="arrow">
                                    <i class="fal fa-angle-right fa-2x"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Menu Item</a>
                                </li>
                                <li>
                                    <a href="#">Menu Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'MenuComponent',

        data() {
            return {};
        },

        methods: {
            dropDownToggle($event) {
                let $this = $($event.currentTarget);

                if ($this.parent().hasClass('open')) {
                    $this.parent().children('.dropdown-menu').slideUp(200, () => {
                        $this.parent().removeClass('open');
                    });
                } else {
                    $this.parent().parent().children('li.open').children('.dropdown-menu').slideUp(200);

                    $this.parent().parent().children('li.open').children('a').removeClass('open');

                    $this.parent().parent().children('li.open').removeClass('open');

                    $this.parent().children('.dropdown-menu').slideDown(200, () => {
                        $this.parent().addClass('open');
                    });
                }
            },

            sidebarToggle() {
                $('.app').toggleClass('is-collapsed');

                setTimeout(() => {
                    window.dispatchEvent(window.EVENT);
                }, 300);
            }
        },

        mounted() {
            $('.sidebar')
                .find('.sidebar-link')
                .each((index, el) => {
                    $(el).removeClass('active');
                })
                .filter(function () {
                    let href = $(this).attr('href');
                    let pattern = href[0] === '/' ? href.substr(1) : href;

                    return pattern === (window.location.pathname).substr(1);
                })
                .addClass('active');
        }
    }
</script>
