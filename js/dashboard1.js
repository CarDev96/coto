$(function() {
    Morris.Area({
        element: 'earning',
        data: [{
            month: 'En',
            a: 22,
            b: 22
        }, {
            month: 'Feb',
            a: 66,
            b: 23
        }, {
            month: 'Mar',
            a: 86,
            b: 78
        }, {
            month: 'Abr',
            a: 151,
            b: 13
        }, {
            month: 'May',
            a: 115,
            b: 23
        }, {
            month: 'Jun',
            a: 93,
            b:45
        }, {
            month: 'Jul',
            a: 38,
            b: 32
        },{
            month: 'Agos',
            a: 2,
            b: 39
        },{
            month: 'Sep',
            a: 33,
            b:40
        },{

            month: 'Oct',
            a: 99,
            b: 12
        },{
            month: 'Nov',
            a: 22,
            b: 45
        },{
            month: 'Dic',
            a: 13,
            b: 65
        }],
        xkey: 'month',
        ykeys: ['a','b'],
        parseTime: false,
        pointSize: 3,
        fillOpacity: 0,        
        labels: ['Ingresos','Gastos'],
        pointStrokeColors: ['#1976d2', '#26c6da', '#1976d2'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,                
        hideHover: 'auto',
        lineColors: ['#1976d2', '#26c6da', '#1976d2'],
        resize: true
    });
});