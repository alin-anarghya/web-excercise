$(window).on('load', function() {
    window.scrollTo(0, 0);
    $('#preloader').delay(1500).fadeOut('slow'); 
});

$(document).ready(function () {
    //HEADER//
    const HEADER_OFFSET = 80;
    const TRIGGER_LINE = $(window).height() / 2;

    function setActiveMenuItem() {
        var scrollPos = $(document).scrollTop();
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 5) {
            $('.navbar-nav li').removeClass("active");
            $('.navbar-nav li:last').addClass("active");
            return;
        }

        $('.nav-link').each(function () {
            var currLink = $(this);
            var targetId = currLink.attr('href');

            if (targetId.startsWith('#') && targetId.length > 1) {
                var refElement = $(targetId);

                if (refElement.length) {
                    var refElementTop = refElement.offset().top;
                    var refElementBottom = refElementTop + refElement.outerHeight();

                    var isPastTrigger = refElementTop <= scrollPos + TRIGGER_LINE;
                    var isBeforeTrigger = refElementBottom > scrollPos + TRIGGER_LINE;

                    if (isPastTrigger && isBeforeTrigger) {
                        $('.navbar-nav li').removeClass("active");
                        currLink.parent('li').addClass("active");
                    }
                }
            }
        });
        if (scrollPos < 10) {
            $('.navbar-nav li').removeClass("active");
            $('.navbar-nav li:first').addClass("active");
        }
    }

    $(window).on('scroll resize', setActiveMenuItem);
    setActiveMenuItem();

    $('.nav-link').on('click', function (e) {
        if (this.hash !== "") {
            e.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top - (HEADER_OFFSET - 10)
            }, 800);
        }
    });

    AOS.init({
        duration: 1000,
        once: false,
        offset: 120,
        easing: 'ease-in-out',
    });

    $(window).on('resize', function() {
        AOS.refresh();
    });

    //SECTION ABOUT//
    let myChart;

    function updateChartRealTime() {
        $.ajax({
            url: 'get_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (myChart) {
                    myChart.data.labels = response.labels;
                    myChart.data.datasets[0].data = response.data;
                    myChart.update('none');
                } else {
                    initChart(response.labels, response.data);
                }
            }
        });
    }

    function initChart(labels, data) {
        var ctx = $('#customerChart')[0].getContext('2d');
        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(56, 161, 105, 0.6)');
        gradient.addColorStop(1, 'rgba(56, 161, 105, 0.0)');

        myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Customers',
                    data: data,
                    backgroundColor: gradient,
                    borderColor: '#38a169',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }

    $(document).ready(function() {
        updateChartRealTime();
        setInterval(updateChartRealTime, 5000); 
    });

    //CONTACT//
    let testiIndex = 0;

    function rotateTestimonials() {
        if (allTestimonials.length < 2) return;

        const leftContainer = document.getElementById('testi-left');
        const rightContainer = document.getElementById('testi-right');

        const t1 = allTestimonials[testiIndex % allTestimonials.length];
        const t2 = allTestimonials[(testiIndex + 1) % allTestimonials.length];

        const createHTML = (item) => {
            let starsHTML = '';
            for(let i=1; i<=5; i++) {
                starsHTML += i <= item.rating ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
            }
            return `
                <div class="testi-card-mini">
                    <h5>${item.firstname} ${item.lastname}</h5>
                    <div class="stars">${starsHTML}</div>
                    <p>"${item.comment}"</p>
                </div>
            `;
        };

        leftContainer.innerHTML = createHTML(t1);
        rightContainer.innerHTML = createHTML(t2);

        testiIndex += 2;
    }

    setInterval(rotateTestimonials, 3000);
    rotateTestimonials();
});