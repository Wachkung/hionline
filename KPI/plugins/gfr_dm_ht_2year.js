// JavaScript Document

$(document).ready(function () {
             
            //  $("#jqxdatetimeinput").jqxDateTimeInput({ width: '150px', height: '25px' , theme: 'summer'  });
        
		////  $("#jqxdatetimeinput2").jqxDateTimeInput({ width: '150px', height: '25px' });
    
                // $("#getDateButton").click(function () {
                  //      var date = $('#jqxdatetimeinput').jqxDateTimeInput('getText');
                  //      var date2 = $('#jqxdatetimeinput2').jqxDateTimeInput('getText');
			 
	 	//alert (date);
      
        var url = "gfr_dm_ht_2year.php";
            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                      
					  
                                  { name: 'y1', type: 'string' } ,
                                 { name: 'gfr1', type: 'string' }  ,
					{ name: 'gfr2', type: 'string' } ,
                                   { name: 'gfr3', type: 'string' }  ,
					{ name: 'gfr4', type: 'string' } ,
                 
			             { name: 'gfr5', type: 'string' }  ,
					    
			   
			   { name: 'total', type: 'string' } ,    
			  
			    ],
               
                  //  url: url,
               
                 url: url,
                root: 'data'
				 
				//   url: "opd10.php",
                   
			//	  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		  
                
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#gfr_dm_ht_2year").jqxGrid(
            {
                 
                              theme: 'energyblue',   
                                 width: true,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                     
                     
			  
			           { text: ' ปี  ', dataField: 'y1'   } ,
					    { text: 'น้อยกว่า15', dataField: 'gfr1'   },
			  
			                  { text: '15-29', dataField: 'gfr2'   } ,
                                          
                                           { text: '30-59', dataField: 'gfr3'   },
			  
			                  { text: '60-94', dataField: 'gfr4'   } ,
                                          
                                           { text: '95ขึ้นไป', dataField: 'gfr5'   },
			   
                                          
                                            { text: 'รวม', dataField: 'total'   } ,
                                          
					    
			  
			    ]
            });
       
                 });
        
       