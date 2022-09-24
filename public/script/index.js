// календарь
var Cal = function(divId) {
    //Сохраняем идентификатор div
    this.divId = divId;

    // Дни недели с понедельника
    this.DaysOfWeek = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];

    // Месяцы начиная с января
    this.Months = [
        'Январь',
        'Февраль',
        'Март',
        'Апрель',
        'Май',
        'Июнь',
        'Июль',
        'Август',
        'Сентябрь',
        'Октябрь',
        'Ноябрь',
        'Декабрь',
    ];

    //Устанавливаем текущий месяц, год
    var d = new Date();

    this.currMonth = d.getMonth('9');
    this.currYear = d.getFullYear('22');
    this.currDay = d.getDate('3');
};

// Переход к следующему месяцу
Cal.prototype.nextMonth = function() {
    if (this.currMonth == 11) {
        this.currMonth = 0;
        this.currYear = this.currYear + 1;
    } else {
        this.currMonth = this.currMonth + 1;
    }
    this.showcurr();
};

// Переход к предыдущему месяцу
Cal.prototype.previousMonth = function() {
    if (this.currMonth == 0) {
        this.currMonth = 11;
        this.currYear = this.currYear - 1;
    } else {
        this.currMonth = this.currMonth - 1;
    }
    this.showcurr();
};

// Показать текущий месяц
Cal.prototype.showcurr = function() {
    this.showMonth(this.currYear, this.currMonth);
};

// Показать месяц (год, месяц)
Cal.prototype.showMonth = function(y, m) {
    var d = new Date(),
        // Первый день недели в выбранном месяце
        firstDayOfMonth = new Date(y, m, 7).getDay(),
        // Последний день выбранного месяца
        lastDateOfMonth = new Date(y, m + 1, 0).getDate(),
        // Последний день предыдущего месяца
        lastDayOfLastMonth =
        m == 0 ? new Date(y - 1, 11, 0).getDate() : new Date(y, m, 0).getDate();

    var html = '<table>';

    // Запись выбранного месяца и года
    html += '<thead><tr>';
    html += '<td colspan="7">' + this.Months[m] + ' ' + '<span id="yNow">' +
        y + '</span></td>';
    html += '</tr></thead>';

    // заголовок дней недели
    html += '<tr class="days">';
    for (var i = 0; i < this.DaysOfWeek.length; i++) {
        html += '<td>' + this.DaysOfWeek[i] + '</td>';
    }
    html += '</tr>';

    // Записываем дни
    var i = 1;
    do {
        var dow = new Date(y, m, i).getDay();

        // Начать новую строку в понедельник
        if (dow == 1) {
            html += '<tr>';
        }

        // Если первый день недели не понедельник показать последние дни предидущего месяца
        else if (i == 1) {
            html += '<tr>';
            var k = lastDayOfLastMonth - firstDayOfMonth + 1;
            for (var j = 0; j < firstDayOfMonth; j++) {
                html += '<td class="not-current">' + k + '</td>';
                k++;
            }
        }

        // Записываем текущий день в цикл
        var chk = new Date();
        var chkY = chk.getFullYear();
        var chkM = chk.getMonth();
        if (chkY == this.currYear && chkM == this.currMonth && i == this.currDay) {
            html +=
                '<td class="today"  ><a class="data-calendar" data-mouth="' +
                this.Months[m] + '" data-toggle="modal" data-target="#myModal"  href="#" data-text="' + i +
                '">' + i +
                '</a></td>';
        } else {
            // (i < 20 || i == 23 || i == 26)
            if (i == 1) {
                html +=
                    '<td class="easy"  ><a class="data-calendar" data-mouth="' +
                    this.Months[m] + '" data-toggle="modal" data-target="#myModal" href="#" data-text="' + i +
                    '">' +
                    i +
                    '</a></td>';
            } else {
                html +=
                    '<td class="normal" >  <a class="data-calendar"  data-mouth="' +
                    this.Months[m] + '" data-toggle = "modal" data-target = "#myModal"  href = "#" data-text = "' + i +
                    '">' +
                    i + '</a></td>';
            }
        }

        // закрыть строку в воскресенье
        if (dow == 0) {
            html += '</tr>';
        }
        // Если последний день месяца не воскресенье, показать первые дни следующего месяца
        else if (i == lastDateOfMonth) {
            var k = 1;
            for (dow; dow < 7; dow++) {
                html += '<td class="not-current">' + k + '</td>';
                k++;
            }
        }

        i++;
    } while (i <= lastDateOfMonth);

    // Конец таблицы
    html += '</table>';

    // Записываем HTML в div
    document.getElementById(this.divId).innerHTML = html;
};
//показать время time
Cal.prototype.showTime = function(selMouth, selDate) {
    let btnDdateTime = document.getElementById('btnDdateTime');
    var html = '<table class="time">';
    // Записываем время с 10 до 19
    var i = 10;
    do {
        html += '<tr><td  data-toggle="modal"><a class="time-calendar" href="#" data-text="' + i +
            '">' + i + '</a></td></tr>';
        i++;
    } while (i <= 19);

    // Конец таблицы
    html += '</table>';
    document.getElementById('modaltime').innerHTML = html;


    let timeCalendar = document.querySelectorAll('.time-calendar');
    let selTime = '';
    timeCalendar.forEach((btnTime) =>
        btnTime.addEventListener('click', function() {
            selTime = this.getAttribute('data-text');
            timeCalendar.forEach(el => {
                el.classList.remove('selected');
            });
            this.classList.toggle('selected');
            //  this.querySelectorAll('*').forEach(el => el.classList.remove('selected'));
        })
    )

    btnDdateTime.onclick = function() {
        //var chk = new Date();
        //var chkY = chk.getFullYear();
        // var chkM = chk.getMonth() + 1;
        // console.log(chkY, chkM, selDate, selTime);
        let yearNow = document.querySelector('#yNow').textContent;
        let dateTime = document.querySelector('#date-time');
        dateTime.innerHTML = `<i style="float: right;">${selDate} ${selMouth}   ${selTime}ч</i>`;
        let objDateTime = { 'year': yearNow, 'date': selDate, 'mouth': selMouth, 'time': selTime };
        // console.log(objDateTime);
    }
}

function modalTime(selMouth, selDate) {
    let btnDdateTime = document.getElementById('btnDdateTime');
    var html = '<table class="time">';
    // Записываем дни
    var i = 10;
    do {
        html += '<tr><td  data-toggle="modal"><a class="time-calendar" href="#" data-text="' + i +
            '">' + i + '</a></td></tr>';
        i++;
    } while (i <= 21);

    // Конец таблицы
    html += '</table>';
    document.getElementById('modaltime').innerHTML = html;

    let timeCalendar = document.querySelectorAll('.time-calendar');
    let selTime = '';
    timeCalendar.forEach((btnTime) =>
        btnTime.addEventListener('click', function() {
            selTime = this.getAttribute('data-text');
            timeCalendar.forEach(el => {
                el.classList.remove('selected');
            });
            this.classList.toggle('selected');
            //  this.querySelectorAll('*').forEach(el => el.classList.remove('selected'));
        })
    )
    const promise = new Promise((resolve, reject) => {
        btnDdateTime.onclick = function() {
            //var chk = new Date();
            //var chkY = chk.getFullYear();
            // var chkM = chk.getMonth() + 1;
            // console.log(chkY, chkM, selDate, selTime);
            let yearNow = document.querySelector('#yNow').textContent;
            let dateTime = document.querySelector('#date-time');
            dateTime.innerHTML = `<i style="float: right;">${selDate} ${selMouth}   ${selTime}ч</i>`;
            let objDateTime = { 'year': yearNow, 'date': selDate, 'mouth': selMouth, 'time': selTime };
            // console.log(objDateTime);
            if (objDateTime) {
                //console.log(objDateTime);
                resolve(objDateTime);
            } else {
                reject(new Error("что то пошло не так"))
            }
        }
    }).then((data) => {
        console.log("data", data);

        bronorder2.onclick = function(e) {
            e.preventDefault();
            let dataServ3 = [];
            if (localStorage.dataServ) {
                dataServ2 = JSON.parse(localStorage.getItem('dataServ'));
                dataServ3.push(data, dataServ2);
                console.log("dataServ3", dataServ3);
                localStorage.removeItem('dataServ');
                localStorage.setItem('dataServ', JSON.stringify(dataServ3));
                window.location.href = 'bronorder/view';
            };

        }
    }, (error) => { console.log(error); });

}

// При загрузке окна
window.onload = function() {
    // Начать календарь
    var c = new Cal('divCal');
    c.showcurr();

    // Привязываем кнопки «Следующий» и «Предыдущий»
    getId('btnNext').onclick = function() {
        c.nextMonth();
    };
    getId('btnPrev').onclick = function() {
        c.previousMonth();
    };


    let dataCalendar = document.querySelectorAll('.data-calendar');
    dataCalendar.forEach(btn =>
        btn.addEventListener('click', function() {
            // console.log(this);
            dataCalendar.forEach(el => {
                el.classList.remove('selected');
            });
            this.classList.toggle('selected');
            modalTime(this.getAttribute('data-mouth'), this.getAttribute('data-text'));
            // c.showTime(this.getAttribute('data-mouth'), this.getAttribute('data-text'));
        })
    )
};

// Получить элемент по id
function getId(id) {
    return document.getElementById(id);
} //эту функцию можно испльзоваь в любом другом файле