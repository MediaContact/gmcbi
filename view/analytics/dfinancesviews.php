    <div class="tab-pane fade" id="v-pie-chart" role="tabpanel" aria-labelledby="pie-chart-tab">
        <div id="piegraphe" style=" height: 400px; margin: 0 auto"></div>

        <script type="text/javascript">
            // Radialize the colors
            Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: {
                        cx: 0.5,
                        cy: 0.3,
                        r: 0.7
                    },
                    stops: [
                        [0, color],
                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            });

            // Build the chart
            Highcharts.chart('piegraphe', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares. January, 2015 to May, 2015'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    data: [
                        { name: 'Microsoft Internet Explorer', y: 56.33 },
                        {
                            name: 'Chrome',
                            y: 24.03,
                            sliced: true,
                            selected: true
                        },
                        { name: 'Firefox', y: 10.38 },
                        { name: 'Safari', y: 4.77 }, { name: 'Opera', y: 0.91 },
                        { name: 'Proprietary or Undetectable', y: 0.2 }
                    ]
                }]
            });
        </script>
    </div>

    <div class="tab-pane fade" id="v-bar-chart" role="tabpanel" aria-labelledby="bar-chart-tab">
        <div  id='histogramme' style='height:400px; margin: 0 auto'></div>
        <script type='text/javascript'>
 
            Highcharts.chart('histogramme', {
                
                chart: {
                    type: 'column'
                },
                title: {
                     style: {
                        color: '#000',
                        fontWeight: 'bold',
                        fontSize : '10px'
                    },
                    text:"<?php echo $letype[0]->Libelle ?>"
                },
                 subtitle: {
                  text: ''
                 },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: 0,
                        style: {
                            fontSize: '9px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: ''
                    }
                },
                legend: {
                    enabled: true,
                    borderColor:'#999999',
                    borderRadius:1,
                    borderWidth:1
                },
                tooltip: {
                    pointFormat: 'Valeur <b>{point.y:.1f}</b>'
                },
                series: [{
                    name: 'MOIS',
                    colorByPoint: true,
                   
                        data: [
                        <?php foreach ($donnees as $donnee) {?>
                               ['<?php echo $donnee->lemois; ?>', <?php echo $donnee->valeur; ?>],
                     <?php   } ?>
                      
                    ],
                    dataLabels: {
                        enabled: true,
                        rotation: 0,
                        color: '#000',
                        align: 'right',
                        format: '{point.y:.1f}', // one decimal
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '20px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
            });
        </script>
    </div>

    <div class="tab-pane fade active show" id="v-line-chart" role="tabpanel" aria-labelledby="line-chart-tab">
        <div id="linegrpahe" style=" height: 400px; margin: 0 auto"></div>

        <script type="text/javascript">

            Highcharts.chart('linegrpahe', {

                title: {
                    text: '<?php echo $letype[0]->Libelle; ?>'
                },
                color:{

                },

                subtitle: {
                    text: ''
                },

                yAxis: {
                    title: {
                        text: 'Valeur'
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                xAxis: {
                    categories: [ <?php foreach ($donnees as $lesmois) { ?>
                                           '<?php echo $lesmois->lemois ?>',
                                           <?php } ?>
                                           ]
                },

                series: [
                {
                    name: '<?php echo $letype[0]->Libelle; ?>',

                    data: [  <?php foreach ($donnees as $donnee) { 
                                           echo $donnee->valeur.',';
                                            } ?> 
                                            ],

                }
                  

                ]

            });
        </script>
    </div>