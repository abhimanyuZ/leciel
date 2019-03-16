function onReady(callback) {
    var intervalId = window.setInterval(function() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            preloaderFadeOutTime = 700;

            function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                preloader.fadeOut(preloaderFadeOutTime);
            }
            setTimeout(function() {
                hidePreloader();
            }, );
            callback.call(this);
        }
    }, 500);
}

function setVisible(selector, visible) {
    document.querySelector(selector).style.display = visible ? 'block' : 'none';
}
onReady(function() {});
Init();
$('.pane,.scrzone').mousewheel(function(event) {
    event.preventDefault();
    if ($ScrollState == false) {
        $ScrollState = true;
        if (event.deltaY < 0) {
            UpdateScreen('+');
        } else if (event.deltaY > 0) {
            UpdateScreen('-');
        } else {
            $ScrollState = false;
        }
    }
});

function Init() {
    $ScrollSpeed = 0.7;
    $ScrollState = false;
    $ActualSlide = $CibleSlide = $('.pane').first().attr('data-id');
    $ListSlides = new Array();
    $('.pane').each(function() {
        $ListSlides.push($(this).attr('data-id'));
    });
    TweenMax.to(window, 0, {
        scrollTo: 0
    });
    TweenMax.to('.spane', 0, {
        scrollTo: {
            y: 0,
            x: 0
        }
    });
    $('.visible').removeClass('visible');
    $('#Helper').html("Init()");
}

function UpdateScreen(operator) {
    $ActualSlide = $CibleSlide;
    if (operator == "+") {
        $CibleSlide = $ListSlides[$ListSlides.indexOf($ActualSlide) + 1];
    } else {
        $CibleSlide = $ListSlides[$ListSlides.indexOf($ActualSlide) - 1];
    }
    $('#Helper').html("From <strong>" + $ActualSlide + "</strong> to <strong>" + $CibleSlide + "</strong>");
    if (!$CibleSlide) {
        $ScrollState = false;
        $('#Helper').html("Break");
        $CibleSlide = $ActualSlide;
        return;
    }
    $ActualSlideDOM = $('.pane[data-id=' + $ActualSlide + ']');
    $CibleSlideDOM = $('.pane[data-id=' + $CibleSlide + ']');
    if ($ActualSlideDOM.closest('.prt').find('.spane').length && (operator == "+" && $ActualSlideDOM.next('.pane').length || operator == "-" && $ActualSlideDOM.prev('.pane').length)) {
        TweenMax.to($ActualSlideDOM.closest('.spane'), $ScrollSpeed, {
            scrollTo: '.pane[data-id=' + $CibleSlide + ']',
            ease: Power2.easeOut,
            onComplete: function() {
                $ScrollState = false;
                $CibleSlideDOM.addClass('visible');
            }
        });
    } else {
        TweenMax.to(window, $ScrollSpeed, {
            scrollTo: '.pane[data-id=' + $CibleSlide + ']',
            ease: Power2.easeOut,
            onComplete: function() {
                $ScrollState = false;
                $CibleSlideDOM.addClass('visible');
            }
        });
    }
}
$(window).resize(function() {
    Init();
});
$('.nav-toggle').click(function(e) {
    e.preventDefault();
    $("html").toggleClass("openNav");
    $(".nav-toggle").toggleClass("active");
});
$(window, document, undefined).ready(function() {
    $('.input').blur(function() {
        var $this = $(this);
        if ($this.val()) $this.addClass('used');
        else
            $this.removeClass('used');
    });
});
$('#tab1').on('click', function() {
    $('#tab1').addClass('login-shadow');
    $('#tab2').removeClass('signup-shadow');
});
$('#tab2').on('click', function() {
    $('#tab2').addClass('signup-shadow');
    $('#tab1').removeClass('login-shadow');
});
$('#youtube').magnificPopup({
    items: {
        src: 'https://www.youtube.com/watch?v=w8PEayZHZtQ'
    },
    type: 'iframe'
});
