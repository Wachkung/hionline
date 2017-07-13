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
                      
					  
                                  { name: 'nameschizo', type: 'string' } ,
                                 { name: 'sm10', type: 'string' }  ,
					{ name: 'sm11', type: 'string' } ,
                                   { name: 'sm12', type: 'string' }  ,
					{ name: 'sm1', type: 'string' } ,
                 
			             { name: 'sm2', type: 'string' }  ,
					{ name: 'sm3', type: 'string' } ,
                                { name: 'sm4', type: 'string' }  ,
					{ name: 'sm5', type: 'string' } ,
                 
			     { name: 'sm6', type: 'string' }  ,
					{ name: 'sm7', type: 'string' } ,
                 
			      { name: 'sm8', type: 'string' }  ,
					{ name: 'sm9', type: 'string' } ,    
			   
			   { name: 'total', type: 'string' } ,    
			  
			    ],
               
                  //  url: url,
               
                   type: "POST",
				  url : "schizo1.php",
				//   url: "opd10.php",
                   
				  data:jQuery.parseJSON( '{ "date":"'+date+'","date2":"'+date2+'" }' ),
		  
                
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#schizo1").jqxGrid(
            {
                 
                              theme: 'energyblue',   
                                 width: true,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
			   
			   
			    columns: [
                     
                     
			  
			           { text: ' ภาวะโรค  ', dataField: 'nameschizo'   } ,
					    { text: 'ตุลาคม', dataField: 'sm10'   },
			  
			                  { text: 'พฤศจิกายน', dataField: 'sm11'   } ,
                                          
                                           { text: 'ธันวาคม', dataField: 'sm12'   },
			  
			                  { text: 'มกราคม', dataField: 'sm1'   } ,
                                          
                                           { text: 'กุมภาพันธ์', dataField: 'sm2'   },
			  
			                  { text: 'มีนาคม', dataField: 'sm3'   } ,
                                           { text: 'เมษายน', dataField: 'sm4'   },
			  
			                  { text: 'พฤษภาคม', dataField: 'sm5'   } ,
                                          
                                           { text: 'มิถุนายน', dataField: 'sm6'   },
			  
			                  { text: 'กรกฎาคม', dataField: 'sm7'   } ,
                                          
                                           { text: 'สิงหาคม', dataField: 'sm8'   },
			  
			                  { text: 'กันยายน', dataField: 'sm9'   } ,
                                          
                                          
                                            { text: 'รวม', dataField: 'total'   } ,
                                          
					    
			  
			    ]
            });
       
                 });
        
         });