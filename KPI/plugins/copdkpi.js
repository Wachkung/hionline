// JavaScript Document

$(document).ready(function () {
             
            //  $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' , theme: 'summer'  });
        
		////  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
    
                // $("#getDateButton").click(function () {
                  //      var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                  //      var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	//alert (date);
      var start = '130';
        var url = "copd.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                      
					  
                                  { name: 'start', type: 'string' } ,
                                 { name: 'year3', type: 'string' }  ,
					{ name: 'year2', type: 'string' } ,
                                   { name: 'year1', type: 'string' }  ,
					 
			  
			    ],
               
                  //  url: url,
               
                 url: url,
                root: 'data'
				 
				//   url: "opd10.php",
                   
			//	  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		  
                
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#copd").jqxGrid(
            {
                 
                              theme: 'energyblue',   
                                 width: true,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                     
                     
			  
			           { text: ' Base Line  ', dataField: 'start'   } ,
					    { text: '2556', dataField: 'year3'   },
			  
			                  { text: '2557', dataField: 'year2'   } ,
                                          
                                           { text: '2558', dataField: 'year1'   },
			  
			                  
					    
			  
			    ]
            });
       
                 });
        
       