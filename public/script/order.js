// $(document).ready(function() {

//     if (localStorage.dataServ) {
//         localStorage.removeItem('dataServ');
//         // delete localStorage.dataServ;
//     }
// });
import slideMenu from './index.js';

// формирование заказа для пользователя на странице booking
$(document).ready(function() {
        setOrder();
    })
    //при клике на ста кнопку записаться
$('#ctaBooking').click(function() {
    if (localStorage.dataServ) {
        localStorage.removeItem('dataServ');
        // delete localStorage.dataServ;
    }
})
$('#btnDdateTime').click(function() {
    // if (localStorage.dataServ) {
    //     //localStorage.removeItem('dataServ');
    //     // delete localStorage.dataServ;
    //     servDate = JSON.parse(localStorage.getItem('dataServ'));
    // }

    // console.log("servDate", servDate);
})


function setOrder() {
    if (localStorage.dataServ) {
        serv2 = JSON.parse(localStorage.getItem('dataServ'));
    } else {
        serv2 = [];
    }
    console.log("serv2", serv2);
    let sum2 = 0;
    serv2.forEach(function(itemOrd, iOrd) {
        $('#order-det').append(
            $('<li>', {
                text: itemOrd['title'],
                id: 't' + itemOrd['value'],
                class: 'prices-order-item',
            }).append(
                $('<span>', {
                    text: itemOrd['price'] + `₽
                `,
                    class: 'prices-order-det',
                })
            )
        );
        sum2 += Number(itemOrd['price']);
        console.log(`
        itemOrd[$ { iOrd }] = `, itemOrd, `
        sum2 = ${sum2}`);
        $('#order-total').text(sum2 + ' ₽');

        // при возврате на шаг1 все inpute выбираются
        $('input.booking').each(function(i, item) {
            // console.log($(this).data('id'));
            if ($(this).data('id') == itemOrd['value']) {
                $(this).prop('checked', true);
                //console.log($(this).data('id'))
            }
        });
    });
}

$('#order-total').text('0 ₽');
let dataServ = [];
$('.booking').on('change', function() {
    var vidNomer = $(this).val(),
        titleNomer = $(this).data('text');
    priceNomer = $(this).data('price');
    $data = []
    var prices;
    var i = 1;
    var sum = 0;
    // var xar = [];
    // var xart = [];
    // var xarp = [];
    let serv = [];
    $('#order-total').text(sum + ' ₽');
    $('.booking:checked').each(function(i, item) {
        // sum += $(this).data('price');
        // xart.push($(item).attr('data-text'));
        // xarp.push($(item).attr('data-price'));
        // xar.push($(item).attr('value'));
        //localStorage.setItem('xar', JSON.stringify(xar));
        //localStorage.setItem('xart', JSON.stringify(xart));
        //localStorage.setItem('xarp', JSON.stringify(xarp));
        // localStorage.setItem('sum', JSON.stringify(sum));
        //listOrder();
        //console.log('xart=', xart);
        //console.log('xarp=', xarp);
        //console.log('xar=', xar);
        serv.push({
            title: $(item).attr('data-text'),
            price: $(item).attr('data-price'),
            value: $(item).attr('value')
        });
    });
    //console.log(' serv=', serv);
    if ($('#order-det li')) {
        $('#order-det li').remove();
        //console.log('remove ');
    }
    sum = 0;
    serv.forEach(function(itemOrd, iOrd) {
        sum += Number(itemOrd['price']);
        $('#order-total').text(sum + ' ₽');
        console.log(`
                        itemOrd[$ { iOrd }] = `, itemOrd, `
                        sum = $ { sum }
                        `);
        $('#order-det').append(
            $('<li>', {
                text: itemOrd['title'],
                id: 't' + itemOrd['value'],
                class: 'prices-order-item',
            }).append(
                $('<span>', {
                    text: itemOrd['price'] + `₽
                        `,
                    class: 'prices-order-det',
                })
            )
        );

        dataServ = serv;
    });
});
//при клике кнопки продолжить на странице booking
$('#bronorder').click(function(e) {
    e.preventDefault();

    // $('input.booking:checked').each(function(i, item) {
    //     x.push($(item).attr('value'));
    //     console.log(x);
    //     //localStorage.setItem('x', JSON.stringify(x));
    // });
    console.log(dataServ);
    localStorage.setItem('dataServ', JSON.stringify(dataServ));
    window.location.href = 'bronorder';

});
//при клике кнопки отмена на странице booking
$('#reset_bronorder').click(function(e) {
    e.preventDefault();
    if (localStorage.dataServ) {
        localStorage.removeItem('dataServ');

    }
    setOrder();
    window.location.href = 'booking';
});
// $('.data-calendar').click(function(e) {
//     e.preventDefault();
//     console.log($(this));
//     console.log('ff')
// })
// $('.time-calendar').click(function(e) {
//     e.preventDefault();
//     console.log($(this));
//     console.log('tttt')
// }) let timeCalendar = document.querySelectorAll('.time-calendar');