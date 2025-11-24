$(document).ready(function () {
    //HEADER//
    const HEADER_OFFSET = 80;
    const TRIGGER_LINE = $(window).height() / 2;

    function setActiveMenuItem() {
        var scrollPos = $(document).scrollTop();

        // --- OVERRIDE BAWAH (Tetap Pertahankan) ---
        // Jika scroll mencapai batas bawah halaman, aktifkan item terakhir.
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 5) {
            $('.navbar-nav li').removeClass("active");
            $('.navbar-nav li:last').addClass("active");
            return;
        }

        // --- LOGIKA UTAMA: Midpoint Activation ---
        $('.nav-link').each(function () {
            var currLink = $(this);
            var targetId = currLink.attr('href');

            if (targetId.startsWith('#') && targetId.length > 1) {
                var refElement = $(targetId);

                if (refElement.length) {

                    var refElementTop = refElement.offset().top;
                    var refElementBottom = refElementTop + refElement.outerHeight();

                    // TITIK KRITIS BARU:
                    // Section menjadi aktif ketika batas atasnya melewati garis pemicu
                    // (TRIGGER_LINE) dan batas bawahnya belum melewatinya.
                    var isPastTrigger = refElementTop <= scrollPos + TRIGGER_LINE;
                    var isBeforeTrigger = refElementBottom > scrollPos + TRIGGER_LINE;

                    if (isPastTrigger && isBeforeTrigger) {
                        $('.navbar-nav li').removeClass("active");
                        currLink.parent('li').addClass("active");
                    }
                }
            }
        });

        // --- OVERRIDE ATAS (Tetap Pertahankan) ---
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
    //HEADER//

    //SECTION ABOUT//
    function initializeCustomerChart() {
        var ctx = $('#customerChart');

        // ... chartData tidak berubah ...
        const chartData = {
            labels: ['1999', '2004', '2009', '2014', '2019', '2024'],
            datasets: [{
                label: 'Number of Customers (Thousands)',
                data: [15, 22, 35, 48, 65, 80],
                backgroundColor: 'rgba(56, 161, 105, 0.7)',
                borderColor: '#38a169',
                borderWidth: 1,
                fill: true,
                tension: 0.4
            }]
        };

        const config = {
            type: 'line',
            data: chartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                // ===============================================
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Customers (Thousands)',
                            color: '#000',
                            font: {
                                weight: 'bold' // NEW: Membuat judul sumbu Y tebal
                            }
                        },
                        ticks: {
                            color: '#000',
                            font: {
                                weight: 'bold' // NEW: Membuat angka pada sumbu Y tebal
                            }
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#000',
                            font: {
                                weight: 'bold' // NEW: Membuat label tahun pada sumbu X tebal
                            }
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            color: '#000',
                            font: {
                                weight: 'bold' // NEW: Membuat teks legenda tebal
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Sadhana Computer Customer Growth',
                        color: '#000',
                        font: {
                            weight: 'bold', // NEW: Membuat judul utama grafik tebal
                            size: 16.8
                        }
                    }
                }
                // ===============================================
            }
        };

        new Chart(ctx, config);
    }

    initializeCustomerChart();

    AOS.init({
        duration: 1200,
        once: false,
    });
    //SECTION ABOUT//
});