<?php
class Helper{
	public $controller;
	
	public function __construct($controller){
		$this->controller = $controller;
	}

	/**
	* Retourne les options de la side bar
	* @param $idDeparetement id du département 
	*
	**/
	public function ViewMenu($idDeparetement = null){

		if ($idDeparetement === null) {
			
		}else{
			switch ($idDeparetement) {
				case 1:
					$menu = $this->customObStart('/view/layout/menu/menuoperation.php');
					break;
				case 2:
					$menu = $this->customObStart('/view/layout/menu/menuqualite.php');
					break;
				case 3:
					$menu = $this->customObStart('/view/layout/menu/menudaf.php');
					break;
				
				case 4:
					$menu = $this->customObStart('/view/layout/menu/menudsi.php');
					break;
				
				case 5:
					$menu = $this->customObStart('/view/layout/menu/menurh.php');
					break;
				
				case 6:
					$menu = $this->customObStart('/view/layout/menu/menudaf.php');
					break;
				
				case 7:
					$menu = $this->customObStart('/view/layout/menu/menucom.php');
					break;
				
				case 8:
					$menu = $this->customObStart('/view/layout/menu/menudaf.php');
					break;
				
				case 9:
					$menu = $this->customObStart('/view/layout/menu/menudaf.php');
					break;

				case 10:
					$menu = $this->customObStart('/view/layout/menu/menudaf.php');
					break;

				case 11:
					$menu = $this->customObStart('/view/layout/menu/menudaf.php');
					break;
				
				default:
					# code...
					break;
			}
			
			return $menu;
		}

	}


	private function customObStart($thepath){
		ob_start();
		require ROOT . $thepath;
		return ob_get_clean();
	}



	public function piegraphe($data,$liste_y,$liste_x){

			$id_container = 'container'.rand(100,9999999);
            $liste_color = explode("#", $data->color);
						 $contenu = "
						  <div id='".$id_container."' style='height: 380px; margin: 0 auto'></div>
						 <script type='text/javascript'>
				          
				Highcharts.chart('".$id_container."', {
					 colors: [";
				 foreach ($liste_color as $keys => $values) {
				 	 if($keys != 0){
				 	 $contenu .= "'#".$values."',";
				 	}
				 }
				       
				      	$contenu .=  " ],
				    chart: {
				        plotBackgroundColor: null,
				        plotBorderWidth: null,
				        plotShadow: false,
				        type: 'pie'
				    },
				    title: {
				    	style: {
			            color: '#000',
			            fontWeight: 'bold',
			            fontSize : '10px'
			        },
				        text:' ";
				        $contenu .=$data->titre;
				    $contenu .= "'},
				    tooltip: {
				        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				    }, 
				    legend: {
			        enabled: true,
			        borderColor:'#999999',
					borderRadius:1,
					borderWidth:1
			    },
				    plotOptions: {
				        pie: {
				            allowPointSelect: true,
				            cursor: 'pointer',
				            dataLabels: {
				                
				                 enabled: false
				                },
				                showInLegend: true
				        }
				    },
				     
				    series: [{
				        name: 'Pourcentage',
				        data: [";

				foreach ($liste_y as $key => $value) {
				   
				  $contenu .= " { name: '".$value."' , y:".$liste_x[$key]." },";
				}
				    $contenu .= "   
				        ]
				    }]
				});
				        </script>";
						  
					return $contenu;	        
						 }

		public function histogramme_graphe($data,$liste_y,$liste_x){

			$id_container = 'container'.rand(100,9999999);

			$liste_color = explode("#", $data->color);
			
		$contenu =	" 
		  <div  id='".$id_container."' style='height: 400px; margin: 0 auto'></div>
		<script type='text/javascript'>
 
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
			Highcharts.chart('".$id_container."', {
				 colors: [";
				 foreach ($liste_color as $keys => $values) {
				 	 if($keys != 0){
				 	 $contenu .= "'#".$values."',";
				 	}
				 }
				       
				      	$contenu .=  " ],
			    chart: {
			        type: 'column'
			    },
			    title: {
			    	 style: {
			            color: '#000',
			            fontWeight: 'bold',
			            fontSize : '10px'
			        },
			        text:'";
			        $contenu .=$data->titre;
			    	$contenu .= "'
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
			        data: 'Pourcentage',
			        data: [";

			foreach ($liste_y as $key => $value) {
			   
			  $contenu .= " { name: '".$value."' , y:".$liste_x[$key]." },";
			}
			    $contenu .= "   
			        ],
			        dataLabels: {
			            enabled: true,
			            rotation: -90,
			            color: '#FFFFFF',
			            align: 'right',
			            format: '{point.y:.1f}', // one decimal
			            y: 10, // 10 pixels down from the top
			            style: {
			                fontSize: '10px',
			                fontFamily: 'Verdana, sans-serif'
			            }
			        }
			    }]
			});
			        </script>";

			       return $contenu;
		}



		public function histogramme_groupe_negatif($data,$liste_x,$liste_y){
 
			 
			$id_container = 'container'.rand(100,9999999);
			$liste_color = explode("#", $data->color);
		$contenu =	" 
		  <div  id='".$id_container."' style='height: 400px; margin: 0 auto'></div>
		  <script type='text/javascript'>

				Highcharts.chart('".$id_container."', {
					 colors: [";
				 foreach ($liste_color as $keys => $values) {
				 	 if($keys != 0){
				 	 $contenu .= "'#".$values."',";
				 	}
				 }
				       
				      	$contenu .=  " ],
				    chart: {
				        type: 'column'
				    },
				    title: {
				    	style: {
			            color: '#000',
			            fontWeight: 'bold',
			            fontSize : '10px'
			        },
				         text:'";
			        $contenu .=$data->titre;
			    	$contenu .= "'
				    },
				    xAxis: {	
			   
				        categories: [";
				        foreach ($liste_x as $key => $value) {
				        	$contenu .= " '".$value."' , ";
				        }
				         
				        $contenu .=  "] 
				    },
				    credits: {
				        enabled: false
				    },
				    series: [";
				    foreach ($liste_y as $keys => $values) {
				  
						 $pieces = explode("(", $values);
						 $label = $pieces[0];
						 $pieces = explode(")", $pieces[1]);
						 $mon_resultat=$pieces[0];

						 $liste_data= explode(',', $mon_resultat);

					 
						 $contenu .=  " {
						        name: '".$label."', 
						        data :[".$mon_resultat."] }, ";
						 
					}

				    $contenu .= "]
				});
						</script>";
						 return $contenu;
		}


	public function courbe($data,$liste_x,$liste_y){ 
		$id_container = 'container'.rand(100,9999999);

			$liste_color = explode("#", $data->color);
			$contenu =	"
			 <div  id='".$id_container."' style='height: 400px; margin: 0 auto'></div>
			 <script type='text/javascript'>

				Highcharts.chart('".$id_container."', {
					 colors: [";
				 foreach ($liste_color as $keys => $values) {
				 	 if($keys != 0){
				 	 $contenu .= "'#".$values."',";
				 	}
				 }
				       
				      	$contenu .=  " ],
				    chart: {
				        type: 'line'
				    },
				    title: {
				    	style: {
			            color: '#000',
			            fontWeight: 'bold',
			            fontSize : '10px'
			        },
				        text: '";
			        $contenu .=$data->titre;
			    	$contenu .= "'
				    },
				    subtitle: {
				        text: ' '
				    },
				    xAxis: {
				        categories: [";
				        foreach ($liste_x as $key => $value) {
				        	$contenu .= " '".$value."' , ";
				        }
				         
				        $contenu .=  "]
				    },
				    yAxis: {
				        title: {
				            text: ''
				        }
				    },
				    plotOptions: {
				        line: {
				            dataLabels: {
				                enabled: false
				            },
				            enableMouseTracking: true
				        }
				    },
				    series: [ ";
				    foreach ($liste_y as $keys => $values) {
				  
						 $pieces = explode("(", $values);
						 $label = $pieces[0];
						 $pieces = explode(")", $pieces[1]);
						 $mon_resultat=$pieces[0];

						 $liste_data= explode(',', $mon_resultat);

					 
						 $contenu .=  " {
						        name: '".$label."', 
						        data :[".$mon_resultat."] }, ";
						 
					}

				    $contenu .= "

				     ]
				});
		</script> ";

		return $contenu;

	}
 
}






 