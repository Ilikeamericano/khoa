/*!
 * https://github.com/seeratawan01/fullview.js
 *
 * @license GPLv3 for open source use only
 *
 * Copyright (C) 2020 https://github.com/seeratawan01/fullview.js/blob/master/LICENSE
 */
; (function ($, window, document, undefined) {

    var fullView = 'fullView';

    // Create the plugin constructor
    function FullView(views, options) {

        this._defaults = $.fn.fullView.defaults;

        this.options = $.extend({}, this._defaults, options);
        this.mainView = $(views);
        this.views = $(views).children();

        this._name = fullView;

        this.currentView = 0;
        this.previousView = 0;
        this.isScrolling = false;
        this.isProgress = false;
        this.offsets = [];
        this.$dotsElement = null;
        this.$navbar = null;
        this.$anchors = {};
        this.lastY = null;
        this.lastX = null;

        this.init();

    }

    // Avoid FullView.prototype conflicts
    $.extend(FullView.prototype, {

        // Initialization logic
        init: function () {

            this.buildCache();
            this.utilites();
            this.settingUp();
            this.bindEvents();
        },

        // Remove plugin instance completely
        destroy: function () {
            this.unbindEvents();
            this.$views.removeData();
        },

        // Cache DOM nodes for performance
        buildCache: function () {

            this.$window = $(window);
            this.$document = $(document);
            this.$htmlBody = $("html, body");

            this.$views = $(this.views);

            if (this.options.navbar !== undefined && typeof this.options.navbar === 'string') {

                if ($(this.options.navbar).length) {
                    this.$navbar = $(this.options.navbar)
                }
            }

        },

        utilites: function () {
            this.createDots = function createDots() {
                var $dots = $("#fv-dots");
                if ($dots.length) {
                    $dots.remove();
                }
                var div = $("<div>").attr("id", "fv-dots").append('<ul>');

                if (this.options.dotsTooltips === true) {
                    var plugin = this;
                    this.$views.each(function (i) {
                        var tooltipTitle = plugin.$views.eq(i).attr('data-tooltip') ? plugin.$views.eq(i).attr('data-tooltip') : null;
                        if (tooltipTitle) {
                            div.find('ul').append('<li class="fv-tooltip"><a data-scroll="' + i + '" href="#" class=""><span></span></a><span class="fv-tooltiptext">' + tooltipTitle + '</span></li>')
                        } else {
                            div.find('ul').append('<li class="fv-tooltip"><a data-scroll="' + i + '" href="#" class=""><span></span></a></li>')
                        }
                    });
                } else {
                    this.$views.each(function (i) {
                        div.find('ul').append('<li><a data-scroll="' + i + '" href="#" class=""><div class="list-name" id="help_'+i+'"></div><span></span></a></li>')
                    });
                }


                if (this.options.dotsPosition !== 'right') {
                    div.css({
                        left: '4%'
                    });

                    div.find('.fv-tooltip .fv-tooltiptext').css({
                        right: 'unset',
                        left: '105%'
                    })

                    div.find('.fv-tooltip').addClass('fv-tooltip-left');

                }


                $('body').append(div);

                return div.find('a');
            };

            this.changeActiveStatus = function changeActiveStatus($view) {
                this.$views.removeClass('active').eq($view).addClass('active');
                if (this.options.dots) {
                    this.$dotsElement.removeClass('active').eq($view).addClass('active')
                }
                if (this.$anchors.length) {
                    this.$anchors.removeClass('active').filter('[data-scroll="' + $view + '"]').addClass('active')
                }
				
				//사이드 매뉴 color 변경
				var target = document.querySelectorAll(".nav-top > ul >li > a");
				var right_target_active = document.querySelectorAll('#fv-dots ul a.active span');
				var right_lang_target_active = document.querySelectorAll('#fv-dots ul a.active div');
				var right_lang = document.querySelectorAll('#fv-dots ul li a div');
				var right_target = document.querySelectorAll('#fv-dots ul li a span');
				if($view > 2){
					document.getElementById("logo-01").src="./img/logo_b.png";
					document.getElementById("r_home").src="./img/koha.png";
					document.getElementById("r_menu").src="./img/menu-black.png";
                    for(var i = 0; i < target.length; i++){						//document.getElementByClassName("pc-menu").css("background","#c0bdbd");
                        target[i].style.color ="#000";
                    }
					for(var j = 0; j < right_lang_target_active.length; j++){
						right_lang_target_active[j].style.color = "#000";
						right_target_active[j].style.background = "#000";
					}
				}
				else {
					document.getElementById("logo-01").src="./img/logo-w.png";
					document.getElementById("r_home").src="./img/koha-white.png";
					document.getElementById("r_menu").src="./img/menu-white.png";
					for(var i = 0; i < target.length; i++){
                        target[i].style.color ="#fff";
                    }
					for(var k = 0; k < right_lang.length; k++){
						right_lang[k].style = '';
						right_target[k].style = '';
						console.log('jjj');
					}
				}
            }
            this.scrollTo = function scrollTo($view, dir) {

                var plugin = this;
                $view = parseInt($view);
				
				

                if (this.offsets[$view] !== undefined && typeof $view === 'number') {
                    this.isProgress = true;
                    this.previousView = this.currentView === $view ? this.previousView : this.currentView;
                    this.currentView = $view;

                    if (dir === undefined) {
                        if (this.previousView > this.currentView) {
                            dir = "up"
                        } else if (this.previousView < this.currentView) {
                            dir = "down"
                        }
                    }

                    // Event OnScrollStart
                    this.callback("onScrollStart", {
                        destination: $view,
                        current: this.previousView,
                        direction: dir
                    });

                    this.$htmlBody.stop(true).animate(
                        {
                            scrollTop: this.offsets[$view].offset
                        }, {
                        easing: $.easing[this.options.easing] ? this.options.easing : 'linear',
                        duration: this.options.speed
                    }).promise().then(function () {
                        plugin.changeActiveStatus($view);
                        if (plugin.isScrolling === true) {
                            setTimeout(function () {
                                plugin.isScrolling = false;
                            }, plugin.options.speed - 300);
                        }
                        this.isProgress = false;
                        // Event OnScrollEnd
                        plugin.callback("onScrollEnd", {
                            direction: dir
                        });
                    });
                } else {
                    console.warn("The View You Want To Scroll To Does not Exist!")
                }

            }

            this.scrollByWheel = function scrollByWheel(event) {

                // Check if Already scrolling
                if (!$(':animated').length && !this.isScrolling) {
                    this.isScrolling = true;
                    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                        // scroll up
                        this.scrollUp();
                    }
                    else {
                        // scroll down
                        this.scrollDown();
                    }
                }
            }

            this.scrollDown = function scrollDown() {
                var dir = "down";
                if (this.currentView < this.$views.length - 1) {
                    this.previousView = this.currentView;
                    this.currentView++;
                    this.scrollTo(this.currentView, dir);
                }
                else if (this.currentView === this.$views.length - 1) {
                    this.isScrolling = false;
                    if (this.options.backToTop) {
                        this.isScrolling = true;
                        this.previousView = this.currentView;
                        this.currentView = 0;
                        this.scrollTo(this.currentView, dir);
                    }
                }
                return this;
            }

            this.scrollUp = function scrollUp() {
                var dir = "up";
                if (this.currentView > 0) {
                    this.previousView = this.currentView;
                    this.currentView--;
                    this.scrollTo(this.currentView, dir);
                } else if (this.currentView === 0) {
                    this.isScrolling = false;
                }
                return this;
            }
        },

        settingUp: function () {
            var vh = this.$window.height();
            // var vw = this.$window.width();

            // Setting Viewport
            this.$views.css({
                height: vh,
                // width: vw
            });
            this.currentView = 0;
            this.isScrolling = false;
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            if (typeof this.options.speed !== 'number') {
                this.options.speed = 500;
                console.warn("Speed Should be of Type Number")
            } else {

                if (this.options.speed <= 300) {
                    this.options.speed = 300;
                    console.warn("Min Speed is 350 miliseconds")
                }
            }



            // Calculating Offsets
            this.offsets.splice(0, this.offsets.length)
            this.$views.each(function (i) {
                var anchor = this.$views.eq(i).attr('id');
                var viewOffset = this.$views.eq(i).offset().top;

                this.offsets.push({
                    position: i,
                    anchor: anchor,
                    offset: viewOffset
                })

            }.bind(this));


            // Setting Menu
            if (this.$navbar !== null) {
                var $menu = this.$navbar;
                var seletedAnchor = this.offsets.filter(function (obj) {
                    if (obj.anchor !== undefined) {
                        var $menuitem = $menu.find('a[href="#' + obj.anchor + '"]')
                        if ($menuitem.length) {
                            $menuitem.attr("data-scroll", obj.position)
                        }
                        return true;
                    }
                    return false; // skip
                }).map(function (obj) { return ("#" + obj.anchor); });

                var queryString = "a[href='" + seletedAnchor.join("'], a[href='") + "']";

                // Collecting All Nav Items
                this.$anchors = this.$navbar.find(queryString)

            }

            // Creating Dots
            if (this.options.dots) {
                this.$dotsElement = this.createDots();
            }

            // Check if any view active
            var $actview = this.$views.filter('[class="active"]');

            // this.$views.removeClass('active');
            if ($actview.length) {
                var offset = $actview.eq(0).offset().top;

                var activeData = this.offsets.filter(function (obj) {
                    return obj.offset === offset;
                })

                this.currentView = activeData[0].position;
                this.previousView = this.currentView;

                document.body.scrollTop = offset;
                document.documentElement.scrollTop = offset;
            }

            // If AutoPlay
            if (this.options.dots) {
                this.$dotsElement = this.createDots();
            }

            // Setting Initail Active Status
            this.changeActiveStatus(this.currentView);
			
			for(var i = 0; i <= 4; i++){
					const find = document.getElementById("help_"+i);
					switch (i) {
						case 0:
							find.innerHTML = "HOME"
							break;
						case 1:
							find.innerHTML = "공장"
							break;
						case 2:
							find.innerHTML = "연구개발"
							break;
						case 3:
							find.innerHTML = "뉴스룸"
							break;
						case 4:
							find.innerHTML = "회사소개"
							break;
						default:
							break;
					}
					var hid = document.querySelectorAll('#fv-dots ul li a');
					hid[4].style.display = 'none';
				}
        },

        // Bind events that trigger methods
        bindEvents: function () {
            var plugin = this;

            // On Window Resize
            //plugin.$window.on('resize' + '.' + plugin._name, plugin.settingUp.bind(plugin));

            // On Dot Click
            plugin.$dotsElement !== null ?
                plugin.$dotsElement.on('click' + '.' + plugin._name, function (e) {
                    e.preventDefault();
                    if (!$(':animated').length) {
                        plugin.previousView = plugin.currentView;
                        plugin.currentView = parseInt($(this).attr("data-scroll"));
                        plugin.scrollTo(plugin.currentView);
                    }
                }) : "";

            // On nav anchor click
            plugin.$anchors !== undefined && plugin.$anchors.length > 0 ?
                plugin.$anchors.on('click' + '.' + plugin._name, function (e) {
                    e.preventDefault();

                    if (!$(':animated').length) {
                        plugin.previousView = plugin.currentView;
                        plugin.currentView = parseInt($(this).attr("data-scroll"));
                        plugin.scrollTo(plugin.currentView);
                    }

                }) : ""

            // On MouseScroll
            plugin.options.mouseScrolling ?
                plugin.$window.on('DOMMouseScroll mousewheel' + '.' + plugin._name, function (event) {
                    var e = event || window.event,
                        target = e.target || e.srcElement;

                    if (target.tagName.toUpperCase() == 'INPUT') return;
                    plugin.scrollByWheel(e);
                }) : ""

            // On Keyboard Press
            plugin.options.keyboardScrolling ?
                plugin.$document.on('keydown' + '.' + plugin._name, function (event) {

                    var e = event || window.event,
                        target = e.target || e.srcElement;

                    if (target.tagName.toUpperCase() == 'INPUT') return;

                    // Check if Already scrolling
                    if (!$(':animated').length && !plugin.isScrolling) {
                        var code = (e.keyCode ? e.keyCode : e.which);
                        switch (code) {
                            case 40: // Down key
                                plugin.scrollDown();
                                break;
                            // case 32: // Space Bar
                            //     plugin.scrollDown();
                            //     break;
                            case 38: // Up key
                                plugin.scrollUp();
                                break;
                            case 33: // Page up key
                                plugin.scrollUp();
                                break;
                            case 34: // Page down key
                                plugin.scrollDown();
                                break;
                        }
                    }
                }) : ""

            // On Touch Devices
            plugin.$views.on('touchstart' + '.' + plugin._name, function (e) {
                plugin.lastY = e.originalEvent.touches[0].clientY;
                plugin.lastX = e.originalEvent.touches[0].clientX;
            });

            plugin.options.touchScrolling ?
                plugin.$views.on('touchend' + '.' + plugin._name, function (event) {
                    // if (e.target !== e.currentTarget) return;

                    var e = event || window.event,
                        target = e.target || e.srcElement;
                    if (target.tagName.toUpperCase() == 'INPUT') return;

                    var currentY = e.originalEvent.changedTouches[0].clientY;
                    var currentX = e.originalEvent.changedTouches[0].clientX;

                    if (currentX < plugin.lastX) {
                        // Left
                        // console.log("left")
                    } else if (currentX > plugin.lastX) {
                        // Right
                        // console.log("right")
                    }

                    if (plugin.lastY > currentY + 25) {
                        plugin.scrollDown();
                    } else if (plugin.lastY < currentY - 25) {
                        plugin.scrollUp();
                    }
                }) : ""

        },

        // Unbind events that trigger methods
        unbindEvents: function () {
            this.$window.off('.' + this._name);
            this.$document.off('.' + this._name);
            this.$views.off('.' + this._name);
        },

        callback: function (eventName, addtional) {
            // Cache onScrollEnd option
            var onScrollStart = this.options.onScrollStart;
            var onScrollEnd = this.options.onScrollEnd;

            if (typeof onScrollEnd === 'function' && eventName === "onScrollEnd") {
                // Current, Previous, Direction
                onScrollEnd(this.$views.eq(this.currentView), this.$views.eq(this.previousView), addtional.direction);
            }

            if (typeof onScrollStart === 'function' && eventName === "onScrollStart") {
                // Current, Destination, Direction
                onScrollStart(this.$views.eq(addtional.current), this.$views.eq(addtional.destination), addtional.direction);
            }

        }

    });

    $.fn.fullView = function (options) {

        if (options === undefined || typeof options === 'object') {

            return this.each(function () {

                if (!$.data(this, fullView)) {
                    $.data(this, fullView, new FullView(this, options));
                }

            })
        }

        return this;
    };

    $.fn.fullView.defaults = {
        //Navigation
        navbar: undefined,
        dots: true,
        dotsPosition: 'right',
        dotsTooltips: false,

        //Scrolling
        easing: 'linear',
        backToTop: false,
        speed: 400, //ms

        // Accessibility
        keyboardScrolling: true,
        mouseScrolling: true,
        touchScrolling: true,

        // Callback
        onScrollEnd: null,
        onScrollStart: null,

    };

})(jQuery, window, document);