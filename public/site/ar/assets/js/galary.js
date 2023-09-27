(function ($) {
    "use strict";


    document.addEventListener('DOMContentLoaded', function(){
        Typed.new('.type', {
            strings: [
                "Digital agency specialized in web design, development, softwares, mobile applications, branding, marketing and production located in Egypt and makeprojects also with Germany, Syria and Iraq.	",
                "Professional Software House"],
            stringsElement: null,
            // typing speed
            typeSpeed: 10,
            // time before typing starts
            startDelay: 200,
            // backspacing speed
            backSpeed: 100,
            // time before backspacing
            backDelay: 10,
            // loop
            loop: true,
            // false = infinite
            loopCount: 5,
            // show cursor
            showCursor: false,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
        });
    });




    (function ($) {


        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));


    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });




    if ($(".nav-profile_tabs_content--with-btns").length) {
        $(".nav-profile_tabs_content--with-btns").each(function () {
            let self = $(this);
            let nextBtn = self.find(".nav-profile_tabs_content--btns .next a");
            let prevBtn = self.find(".nav-profile_tabs_content--btns .prev a");

            nextBtn.on("click", function (e) {
                e.preventDefault();
                const nextTabLinkEl = self.find('.active').closest('li').next('li').find('button')[0];
                const nextTab = new bootstrap.Tab(nextTabLinkEl);
                nextTab.show();
            });

            prevBtn.on("click", function (e) {
                e.preventDefault();
                const prevTabLinkEl = self.find('.active').closest('li').prev('li').find('button')[0];
                const prevTab = new bootstrap.Tab(prevTabLinkEl);
                prevTab.show();
            });
        });
    }

    //adds the class
    $('.accordion-collapse').on('shown.bs.collapse', function () {
        $(this).parent().addClass('accordion--active');
    });

    //removes the class
    $('.accordion-collapse').on('hidden.bs.collapse', function () {
        $(this).parent().removeClass('accordion--active');
    });

    // ===Portfolio===
    function projectMasonaryLayout() {
        if ($(".masonary-layout").length) {
            $(".masonary-layout").isotope({
                layoutMode: "masonry"
            });
        }
        if ($(".post-filter").length) {
            $(".post-filter li")
                .children(".filter-text")
                .on("click", function () {
                    var Self = $(this);
                    var selector = Self.parent().attr("data-filter");
                    $(".post-filter li").removeClass("active");
                    Self.parent().addClass("active");
                    $(".filter-layout").isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 500,
                            easing: "linear",
                            queue: false
                        }
                    });
                    return false;
                });
        }

        if ($(".post-filter.has-dynamic-filters-counter").length) {
            // var allItem = $('.single-filter-item').length;
            var activeFilterItem = $(".post-filter.has-dynamic-filters-counter").find(
                "li"
            );
            activeFilterItem.each(function () {
                var filterElement = $(this).data("filter");
                var count = $(".filter-layout").find(filterElement).length;
                $(this)
                    .children(".filter-text")
                    .append('<span class="count">(' + count + ")</span>");
            });
        }
    }
    if ($('.datepicker').length) {
        $('.datepicker').each(function () {
            let self = $(this);
            self.datepicker({
                'format': 'd M yyyy',
            });
        });
    }
    if ($(".contact-two__progress-range").length) {
        $(".contact-two__progress-range").each(function () {
            let balanceTag = $(this).find(".contact-two__balance span");
            let balanceInput = $(this).find(".contact-two__balance__input");
            $(this).find(".balance-range-slider").ionRangeSlider({
                onStart: function (data) {
                    balanceTag.html(data.from);
                    balanceInput.prop("value", data.from);
                },
                onChange: function (data) {
                    balanceTag.html(data.from);
                    balanceInput.prop("value", data.from);
                }
            });
        });
    }
    if ($('.niceselect').length) {
        $('.niceselect').niceSelect();
    }
    if ($(".video-popup").length) {
        $('.video-popup').YouTubePopUp();
    }
    //Fact Counter + Text Count
    if ($(".count-box").length) {
        $(".count-box").appear(
            function () {
                var $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function () {
                            $t.find(".count-text").text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $t.find(".count-text").text(this.countNum);
                        }
                    });
                }
            }, {
                accY: 0
            }
        );
    }
    if ($(".count-bar").length) {
        $(".count-bar").appear(
            function () {
                var el = $(this);
                var percent = el.data("percent");
                $(el).css("width", percent).addClass("counted");
            }, {
                accY: -50
            }
        );
    }
    if ($(".count-bar--no-appear").length) {
        $(".count-bar--no-appear").each(
            function () {
                var el = $(this);
                var percent = el.data("percent");
                $(el).css("width", percent).addClass("counted");
            }
        );
    }
    if ($(".img-popup").length) {
        var groups = {};
        $(".img-popup").each(function () {
            var id = parseInt($(this).attr("data-group"), 10);

            if (!groups[id]) {
                groups[id] = [];
            }

            groups[id].push(this);
        });

        $.each(groups, function () {
            $(this).magnificPopup({
                type: "image",
                closeOnContentClick: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true
                }
            });
        });
    }

    let thmOwlCarousels = $(".thm-owl__carousel");
    if (thmOwlCarousels.length) {
        thmOwlCarousels.each(function () {
            let elm = $(this);
            let options = elm.data("owl-options");
            let thmOwlCarousel = elm.owlCarousel(
                "object" === typeof options ? options : JSON.parse(options)
            );
        });
    }

    let thmOwlNavCarousels = $(".thm-owl__carousel--custom-nav");
    if (thmOwlNavCarousels.length) {
        thmOwlNavCarousels.each(function () {
            let elm = $(this);
            let owlNavPrev = elm.data("owl-nav-prev");
            let owlNavNext = elm.data("owl-nav-next");
            $(owlNavPrev).on("click", function (e) {
                elm.trigger("prev.owl.carousel");
                e.preventDefault();
            });

            $(owlNavNext).on("click", function (e) {
                elm.trigger("next.owl.carousel");
                e.preventDefault();
            });
        });
    }

    // mailchimp form
    if ($(".mc-form").length) {
        $(".mc-form").each(function () {
            var Self = $(this);
            var mcURL = Self.data("url");
            var mcResp = Self.parent().find(".mc-form__response");

            Self.ajaxChimp({
                url: mcURL,
                callback: function (resp) {
                    // appending response
                    mcResp.append(function () {
                        return '<p class="mc-message">' + resp.msg + "</p>";
                    });
                    // making things based on response
                    if (resp.result === "success") {
                        // Do stuff
                        Self.removeClass("errored").addClass("successed");
                        mcResp.removeClass("errored").addClass("successed");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                    if (resp.result === "error") {
                        Self.removeClass("successed").addClass("errored");
                        mcResp.removeClass("successed").addClass("errored");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                }
            });
        });
    }
    if ($(".contact-form-validated").length) {
        $(".contact-form-validated").each(function () {
            let contactForm = $(this);
            contactForm.validate({
                // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    // sending value with ajax request
                    $.post(
                        $(form).attr("action"),
                        $(form).serialize(),
                        function (response) {
                            $(form).parent().find(".result").append(response);
                            $(form).find('input[type="text"]').val("");
                            $(form).find('input[type="email"]').val("");
                            $(form).find("textarea").val("");
                        }
                    );
                    return false;
                }
            });
        });
    }


    function dynamicCurrentMenuClass(selector) {
        let FileName = window.location.href.split("/").reverse()[0];

        selector.find("li").each(function () {
            let anchor = $(this).find("a");
            if ($(anchor).attr("href") == FileName) {
                $(this).addClass("current");
            }
        });
        // if any li has .current elmnt add class
        selector.children("li").each(function () {
            if ($(this).find(".current").length) {
                $(this).addClass("current");
            }
        });
        // if no file name return
        if ("" == FileName) {
            selector.find("li").eq(0).addClass("current");
        }
    }

    if ($(".main-menu__list").length) {
        // dynamic current class
        let mainNavUL = $(".main-menu__list");
        dynamicCurrentMenuClass(mainNavUL);
    }

    if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
        $(".main-menu__list").clone().removeClass('main-menu__list').addClass('mobile-menu__list').appendTo('.mobile-nav__container');
    }
    if ($(".sticky-header").length) {
        $(".sticky-header").clone().insertAfter('.sticky-header').addClass('sticky-header--cloned');
    }

    if ($(".mobile-menu__list").length) {
        let dropdownAnchor = $(".mobile-menu__list .menu-item-has-children > a");
        dropdownAnchor.each(function () {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function () {
                return toggleBtn;
            });
            self.find("button").on("click", function (e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if ($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function (e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".side-drawer__toggler").length) {
        $(".side-drawer__toggler").on("click", function (e) {
            e.preventDefault();
            $(".side-drawer__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".search-toggler").length) {
        $(".search-toggler").on("click", function (e) {
            e.preventDefault();
            $(".search-popup").toggleClass("active");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function () {
            var target = $(this).attr("data-target");
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );
            return false;
        });
    }
    if ($(".dynamic-year").length) {
        let currentYear = new Date().getFullYear();
        $(".dynamic-year").html(currentYear);
    }
    if ($(".wow").length) {
        var wow = new WOW({
            boxClass: "wow", // animated element css class (default is wow)
            animateClass: "animated", // animation css class (default is animated)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    $(window).on("scroll", function () {
        if ($(".sticky-header--cloned").length) {
            var headerScrollPos = 130;
            var stricky = $(".sticky-header--cloned");
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("sticky-fixed");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("sticky-fixed");
            }
        }
        if ($(".scroll-to-top").length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $(".scroll-to-top").fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $(".scroll-to-top").fadeOut(500);
            }
        }

    });

    $(window).on("load", function () {
        if ($(".preloader").length) {
            $(".preloader").fadeOut();
        }
        projectMasonaryLayout();
    });

})(jQuery);
