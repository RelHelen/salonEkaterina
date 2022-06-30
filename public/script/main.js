$(document).ready(function () {
  // var x = JSON.parse(localStorage.getItem('x'));
  const arrays = JSON.parse(window.localStorage.getItem('xar'));
  const arrayt = JSON.parse(window.localStorage.getItem('xart'));
  const arrayp = JSON.parse(window.localStorage.getItem('xarp'));
  const arraysum = JSON.parse(window.localStorage.getItem('sum'));
  var data = [];
  console.log(arrayp);
  if (null !== arrays) {
    for (i = 0; i < arrays.length; i++) {
      $('#order-det-2').append(
        $('<li>', {
          text: arrayt[i],
          id: 't' + arrays[i],
          class: 'prices-order-item',
        }).append(
          $('<span>', {
            text: arrayp[i] + 'р.',
            class: 'prices-order-det',
          })
        )
      );
    }
    $('#order-total-2').text(arraysum + 'руб');
    arrays.forEach((arrayi) => {
      // console.log(arrayi);
    });
  }
});

$('.booking').on('change', function () {
  var vidNomer = $(this).val(),
    titleNomer = $(this).data('text');
  priceNomer = $(this).data('price');
  var prices;
  var i = 1;
  var sum = 0;
  var xar = [];
  var xart = [];
  var xarp = [];
  $('.booking:checked').each(function (i, item) {
    sum += $(this).data('price');
    xart.push($(item).attr('data-text'));
    xarp.push($(item).attr('data-price'));
    xar.push($(item).attr('value'));
    localStorage.setItem('xar', JSON.stringify(xar));
    localStorage.setItem('xart', JSON.stringify(xart));
    localStorage.setItem('xarp', JSON.stringify(xarp));
    localStorage.setItem('sum', JSON.stringify(sum));
  });
  $('#order-total').text(sum);
  if ($('.booking').is(':checked')) {
    $('#order-det').append(
      $('<li>', {
        text: titleNomer,
        id: 't' + vidNomer,
        class: 'prices-order-item',
      }).append(
        $('<span>', {
          text: priceNomer + 'р.',
          class: 'prices-order-det',
        })
      )
    );
  }

  //console.log(vidNomer, titleNomer, sum);
});

$('#bronorder').click(function (e) {
  //e.preventDefault();
  var x = [];
  $('input.booking:checked').each(function (i, item) {
    // x.push($(item).attr('value'));
    // localStorage.setItem('x', JSON.stringify(x));
  });

  //$('span').html(x);
  // console.log(x);
});
// Сокращенный вариант

//выбор в списке услуг на странице booking/index
// выбираем контракт и отправляем данные на сервер на странице contracts/index
$('.select-vid').on('change', function () {
  var vidNomer = $(this).val(),
    //или
    //  contrNom1 = $(this).find('option').filter(':selected').data('nomer'),
    contrNom1 = $(this).find('option').filter(':selected').data('text');
  vidText = $(this).text();
  console.log(vidNomer, contrNom1);
  $.ajax({
    url: path + '/booking/index',
    data: { id: vidNomer },
    type: 'GET',
    success: function (res) {
      showContracts(res);
    },
    error: function () {
      alert('Ошибка! Попробуйте позже');
    },
  });
  //$('#contrnum').text(path);
  //window.location = vidNomer;
  //window.location = booking;
  //console.log(contrNomer, contrId, contrText);
});
function showContracts(res) {
  console.log(res);
}

//выбор в списке договора на странице customer/view
$('.contrcust').on('click', function () {
  var contrNomer = $(this).data('id'),
    contrCust = $(this).data('cust');
  // var id=$(this).attr("id");
  console.log(contrNomer);
  $.ajax({
    url: adminpath + '/customer/viewdet',
    data: { id: contrCust, idcontr: contrNomer },
    type: 'GET',
    success: function (res) {
      $('#a1').html(res);
    },
    error: function () {
      alert('Ошибка! Попробуйте позже');
    },
  });
});

window.addEventListener('scroll', scrollNav);

function scrollNav() {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop >= 170) {
    document.getElementById('navmenu').style.position = 'fixed';
    document.getElementById('navmenu').style.top = '0px';
  } else {
    document.getElementById('navmenu').style.position = 'static';
  }
}

// выбираем контракт и отправляем данные на сервер на странице contracts/index

// $('body').on('click', '.link-contracts', function (e) {
//   //e.preventDefault();
//   var id = $(this).data('id');
//   // console.log(id);

//   $.ajax({
//     url: path + '/contract/add',
//     data: { id: id },
//     type: 'GET',
//     success: function (res) {
//       showContracts(res);
//     },
//     error: function () {
//       alert('Ошибка! Попробуйте позже');
//     },
//   });
// });

function showContracts(res) {
  console.log(res);
}

//выбор в списке договора на странице contracts/view
$('.select-contracts').on('change', function () {
  var contrNomer = $(this).val(),
    //или
    //contrNom1 = $(this).find('option').filter(':selected').data('nomer'),
    contrText = $(this).text();

  //$('#contrnum').text(path);
  window.location = contrNomer;
  // console.log(contrNomer, contrId, contrText);
});
