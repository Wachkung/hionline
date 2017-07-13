// JavaScript Document

$(document).ready(function () {
             
              $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' , theme: 'summer'  });
        
		  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
    
                 $("#getDateButton").click(function () {
                        var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                        var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	//alert (date);
     
        
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                      
					  
                                  { name: 'rate', type: 'string' } ,
                                 { name: 'kpi', type: 'string' }  ,
					 
			  
			    ],
               
                  //  url: url,
               
                   type: "POST",
				  url : "kpi_ami_stat_query.php",
				//   url: "opd10.php",
                   
				  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		  
                
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#kpi_ami_stat").jqxGrid(
            {
                 
                              theme: 'energyblue',   
                 width: true,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                     
                     
			  
			           { text: ' rate  ', dataField: 'rate'   } ,
					    { text: 'kpi_ami_stat', dataField: 'kpi'   },
			  
			                  
			  
			    ]
            });
       
                 });
        
         });