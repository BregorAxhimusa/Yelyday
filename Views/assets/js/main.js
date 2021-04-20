// Sidebar
if (typeof Storage !== 'undefined') {
    if (!sessionStorage.SIDEBAR) {
        sessionStorage.SIDEBAR = true; // bone false qe don me startu sidebari i vogel edhe
        sessionStorage.setItem('sidebar_session', 'OK'); // bone NO qe don me dal sidebari i vogel
    }
} else throw new Error('This browser does not support storage !');

const sidebar = document.getElementById('sidebar');
const toggleSidebar = () => {
    if (sidebar.classList.contains('active')) sessionStorage.setItem('sidebar_session', 'OK');
    else sessionStorage.setItem('sidebar_session', 'NO');
};
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
        toggleSidebar();
    });
});
$(document).ready(function() {
    // ky funksioni e ka per detyr me rregullu sidebarin mbas sessionit
    if (sessionStorage.getItem('sidebar_session') == 'OK') sidebar.classList.add('active');
    else sidebar.classList.remove('active');
});

// MAP
google.charts.load('current', {
    packages: ['geochart'],
    // Note: you will need to get a mapsApiKey for your project.
    // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
    mapsApiKey: 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable([
        ['Country', 'Popularity'],
        ['Germany', 200],
        ['United States', 300],
        ['Brazil', 400],
        ['Canada', 500],
        ['France', 600],
        ['RU', 700]
    ]);

    var options = {};

    var chart = new google.visualization.GeoChart(document.getElementById('map_div'));

    chart.draw(data, options);
}

//
('use strict');

var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach(elm => {
    elm.addEventListener('click', () => {
        elm.previousElementSibling.value = '';
    });
});

$('.wrapper #sidebar .components .sidebar-li a').each(function() {
    if (window.location.pathname.indexOf($(this).attr('href')) > -1) {
        $(this).addClass('active-sidebar');
    }
});

// Notification
$(document).ready(function() {
    $('.btn-notification').on('click', function() {
        $(this).toggleClass('active');
    });
});

//Filter tables
$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('body .filter').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

// Translate
function googleTranslateElementInit2() {
    new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: false
        },
        'google_translate_element2'
    );
}
/* <![CDATA[ */
eval(
    (function(p, a, c, k, e, r) {
        e = function(c) {
            return (
                (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
            );
        };
        if (!''.replace(/^/, String)) {
            while (c--) r[e(c)] = k[c] || e(c);
            k = [
                function(e) {
                    return r[e];
                }
            ];
            e = function() {
                return '\\w+';
            };
            c = 1;
        }
        while (c--)
            if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p;
    })(
        "6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}",
        43,
        43,
        '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split(
            '|'
        ),
        0, {}
    )
);
/* ]]> */

// date time
$(document).ready(function() {
    $('#picker').dateTimePicker();
    $('#picker-no-time').dateTimePicker({
        showTime: false,
        dateFormat: 'DD/MM/YYYY',
        title: 'Select Date'
    });
});

$(document).ready(function() {
    $('#picker1').dateTimePicker();
    $('#picker-no-time').dateTimePicker({
        showTime: false,
        dateFormat: 'DD/MM/YYYY',
        title: 'Select Date'
    });
});

$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 15,
    minTime: '0',
    maxTime: '6:00pm',
    defaultTime: '12',
    startTime: '08:00',
    dynamic: true,
    dropdown: true,
    scrollbar: true
});

$(document).ready(function() {
    $('input.timepicker').timepicker({});
});

// editor text
$(document).ready(function() {
    $('.content').richText();
});
// Reusable helper functions
const calculateSale = (listPrice, discount) => {
    listPrice = parseFloat(listPrice);
    discount = parseFloat(discount);
    return (listPrice - (listPrice * discount) / 100).toFixed(2); // Sale price
};
const calculateDiscount = (listPrice, salePrice) => {
    listPrice = parseFloat(listPrice);
    salePrice = parseFloat(salePrice);
    return 100 - (salePrice * 100) / listPrice; // Discount percentage
};

// Our use case
const $list = $('input[name="list"]'),
    $disc = $('input[name="disc"]'),
    $sale = $('input[name="sale"]');

$list.add($disc).on('input', () => {
    // List and Discount inputs events
    let sale = $list.val(); // Default to List price
    if ($disc.val().length) {
        // if value is entered- calculate sale price
        sale = calculateSale($list.val(), $disc.val());
    }
    $sale.val(sale);
});

$sale.on('input', () => {
    // Sale input events
    let disc = 0; // Default to 0%
    if ($sale.val().length) {
        // if value is entered- calculate the discount
        disc = calculateDiscount($list.val(), $sale.val());
    }
    $disc.val(disc);
});

// Init!
$list.trigger('input');