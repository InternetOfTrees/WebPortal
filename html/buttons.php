<!-- CREATED BY OUMEIMA EL ISBIHANI -->

<html>
    	<head>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
        	<script>
            		$(document).ready(function(){
				$("#batterycheck").click(function(){	//when you press the button
					window.open("../battery_check.php");
                		});
/**************************************************************************************************************************************************************************************/
//											TEMPERATURE                                      						 //
/**************************************************************************************************************************************************************************************/
				/**************************************************************************************************************************************************************************************/
				//										TEMPERATURE HOUR                                                                                       //
				/**************************************************************************************************************************************************************************************/
                		$("#tempHour1").click(function(){
					window.open("graph_capt1_temphour.php");
                		});
				/**************************************************************************************************************************************************************************************/
				//										TEMPERATURE DAY                                                                                       //
				/**************************************************************************************************************************************************************************************/
				$("#tempDay1").click(function(){	//when you press the button
					window.open("graph_capt1_tempday.php");
                		});
				/**************************************************************************************************************************************************************************************/
				//										TEMPERATURE MONTH                                                                                     //
				/**************************************************************************************************************************************************************************************/
				$("#tempMonth1").click(function(){	//when you press the button
					window.open("graph_capt1_tempmonth.php");

                		});
/**************************************************************************************************************************************************************************************/

//										LUMINOSITE                                                                                              //

/**************************************************************************************************************************************************************************************/
				/**************************************************************************************************************************************************************************************/
				//										LUMINOSITE HOUR                                                                                       //
				/**************************************************************************************************************************************************************************************/
				 $("#lightHour1").click(function(){
					window.open("graph_capt1_lumhour.php");
                });
				/**************************************************************************************************************************************************************************************/
				//										LUMINOSITE DAY                                                                                        //
				/**************************************************************************************************************************************************************************************/
				 $("#lightDay1").click(function(){
					window.open("graph_capt1_lumday.php");
                });
				/**************************************************************************************************************************************************************************************/
				//										LUMINOSITE MONTH                                                                                      //
				/**************************************************************************************************************************************************************************************/
				 $("#lightMonth1").click(function(){
					window.open("graph_capt1_lummonth.php");
                });
/**************************************************************************************************************************************************************************************/

//										HUMIDITY                                                                                              //

/**************************************************************************************************************************************************************************************/
				/**************************************************************************************************************************************************************************************/
				//										HUMIDITY HOUR                                                                                         //
				/**************************************************************************************************************************************************************************************/
				 $("#humHour1").click(function(){
					window.open("graph_capt1_humhour.php");
                });
				/**************************************************************************************************************************************************************************************/
				//										HUMIDITY DAY                                                                                          //
				/**************************************************************************************************************************************************************************************/
				 $("#humDay1").click(function(){
					window.open("graph_capt1_humday.php");
                });
				/**************************************************************************************************************************************************************************************/
				//										HUMIDITY MONTH                                                                                        //
				/**************************************************************************************************************************************************************************************/
				 $("#humMonth1").click(function(){
					window.open("graph_capt1_hummonth.php");
                });
/**************************************************************************************************************************************************************************************/

//										SAPFLOW                                                                                               //

/**************************************************************************************************************************************************************************************/
				/**************************************************************************************************************************************************************************************/
				//										SAPFLOW  HOUR                                                                                         //
				/**************************************************************************************************************************************************************************************/
				 $("#sapHour1").click(function(){
					window.open("graph_capt1_saphour.php");
                });
				/**************************************************************************************************************************************************************************************/
				//										SAPFLOW DAY                                                                                          //
				/**************************************************************************************************************************************************************************************/
				 $("#sapDay1").click(function(){
					window.open("graph_capt1_sapday.php");
                });
				/**************************************************************************************************************************************************************************************/
				//				 						SAPFLOW MONTH                                                                                        //
				/**************************************************************************************************************************************************************************************/
				 $("#sapMonth1").click(function(){
					window.open("graph_capt1_sapmonth.php");
                 });
            });
        </script>
    </head>
</html>
