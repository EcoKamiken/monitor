let c3 = require('c3')

var chart = c3.generate({
    bindto: '#chart',
    data: {
        columns: [
            ['data', 30, 20, 100, 300, 140, 240],
            ['data2', 30, 48, 29, 39, 10, 29],
            ['data3', 20, 29, 19, 20, 20]
        ]
    }
});