let first = [];
let subTime = parseInt(sessionStorage['timer']) + 10;
let num = 0;

function Stopwatch() {
    var stopwatch_value = 0;
    var interval;
    this.start = function () {
        stopwatch_value = parseInt(sessionStorage['timer']) * 10 || 0;
        interval = setInterval(function () {
            if (!(sessionStorage['timer'])) {
                sessionStorage['timer'] = 1;
            }
            if ($('#timers').text() === 'X') {
                $('#timers').html(sessionStorage['timer']) || 1;
                setRandom();
            }
            stopwatch_value++;
            if (stopwatch_value % 10 === 0) {
                sessionStorage['timer'] = stopwatch_value / 10;
                $('#timers').html(sessionStorage['timer']);
                addOne();
            }
            if (stopwatch_value / 10 === subTime) {
                subTime += 10;
                subOne();
            }
        }, 1000);
    };
    this.stop = function () {
        clearInterval(interval);
    };
}

function setRandom() {
    let sum;
    while (sum != 10) {
        first[0] = Math.floor(Math.random() * 3 + 2);
        first[1] = Math.floor(Math.random() * 3 + 2);
        first[2] = Math.floor(Math.random() * 3 + 2);
        first[3] = Math.floor(Math.random() * 3 + 2);
        sum = first[0] + first[1] + first[2] + first[3];
    }
    outputFirstTen(1, first[0]);
    outputFirstTen(2, first[1]);
    outputFirstTen(3, first[2]);
    outputFirstTen(4, first[3]);
    console.log("firstTime:(" + sessionStorage['timer'] + ") " + first);
}

function outputFirstTen(id, count) {
    $('#zagonText' + id).html(first[id - 1]);
    for (i = 1; i <= count; i++) {
        num++;
        $('#zagon' + id).append('<p class="#zagon' + id + '">Овечка ' + num + '</p>');
    }
}

function addOne() {
    var add = Math.floor(Math.random() * 4 + 1);
    if (first[add - 1] > 1) {
        first[add - 1]++;
        num++;
        addedSheepDB(add);
    }
    $('#zagon' + add).append('<p class="#zagon' + add + '">Овечка ' + num + '</p>');
    $('#zagonText' + add).html(first[add - 1]);
    console.log("addOne:(" + sessionStorage['timer'] + ") " + num);
}

function subOne() {
    var add = Math.floor(Math.random() * 4 + 1);
    if (first[add - 1] > 0) {
        first[add - 1]--;
        num++;
        deletedSheepDB(add);
    }
    $('#zagonText' + add).html(first[add - 1]);
    $('#zagon' + add + ' p:last-child').remove();
    console.log("subOne:(" + sessionStorage['timer'] + ") " + num);
}

function addedSheepDB(data) {
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url: 'SheepController/addOne',
        data: {
            "_token": $('#token').val(),
            "data": data,
            "day": parseInt(sessionStorage['timer']),
        },
        dataType: 'json',
    });
}

function deletedSheepDB(data) {
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url: 'SheepController/deleteOne',
        data: {
            "_token": $('#token').val(),
            "data": data,
            "day": parseInt(sessionStorage['timer']),
        },
        dataType: 'json',
    });
}

var stopwatch = new Stopwatch();
stopwatch.start();