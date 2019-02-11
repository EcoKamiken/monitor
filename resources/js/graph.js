let c3 = require('c3')

var chart = c3.generate({
    bindto: '#chart-0',
    data: {
        columns: [
            ['data', 30, 20, 100, 300, 140, 240],
            ['data2', 30, 48, 29, 39, 10, 29],
            ['data3', 20, 29, 19, 20, 20],
        ],
        axes: {
            data2: 'y2'
        },
        type: 'pie'
    }
})

var chart2 = c3.generate({
    bindto: '#chart-1',
    data: {
        columns: [
            ['data', 30, 20, 100, 300, 140, 240],
            ['data2', 30, 48, 29, 39, 10, 29],
            ['data3', 20, 29, 19, 20, 20],
        ],
        axes: {
            data2: 'y2'
        },
        type: 'pie'
    }
})