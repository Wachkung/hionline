      

  
$(document).ready(function () {

 setInterval(function(){


            var url = "or_list_query.php";
            var req =1;
            var source =
            {
                datatype: "json",
                datafields: [
           
            { name: 'id', type: 'string' }  ,                 
           
            { name: 'fullname', type: 'string' }  ,
            { name: 'age', type: 'string' }  , 
                   
            { name: 'status', type: 'string' }              
              
                ],
               
                url: url,
                root: 'data',                
                async:false,  
                data:jQuery.parseJSON( '{ "req":"'+req+'" }' ),
                 
              
            

            };
          


         
           var cellsrenderer = function (row, column, value) {
    return '<div style="text-align: center; margin-top: 5px;">' + value + '</div>';
}
var columnsrenderer = function (value) {
    return '<div style="text-align: center; margin-top: 5px;">' + value + '</div>';
}
           var cellsrenderer2 = function (row, column, value) {
    return '<div style="text-align: left; margin-top: 5px;">' + value + '</div>';
}
var columnsrenderer2 = function (value) {
    return '<div style="text-align: center; margin-top: 5px;">' + value + '</div>';
}
           var cellsrenderer3 = function (row, column, value) {
    return '<div style="text-align: center; margin-top: 5px;">' + value + '</div>';
}
var columnsrenderer3 = function (value) {
    return '<div style="text-align: center; margin-top: 5px;">' + value + '</div>';
}

            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#showdiv").jqxGrid(
            {
                   width: true,
                source: dataAdapter,
                columnsresize: true,
                 autorowheight: true,
                autoheight: true,
                altrows: true,
             
            
               
                columns: [
                    
                    { text: 'ลำดับ', dataField: 'id', width:'10%', cellclassname: "bigfont3", renderer: columnsrenderer3, cellsrenderer: cellsrenderer3, },                         
                     
                     { text: 'ชื่อ-นามสกุล', dataField: 'fullname',  width:'60%' , cellclassname: "bigfont2", renderer: columnsrenderer2, cellsrenderer: cellsrenderer2, }, 
                    { text: 'อายุ', dataField: 'age',  width:'10%' , cellclassname: "bigfont3" , renderer: columnsrenderer3, cellsrenderer: cellsrenderer3,},     
                                
                    { text: 'สถานะ', dataField: 'status',  width:'20%' , cellclassname: "bigfont5", renderer: columnsrenderer, cellsrenderer: cellsrenderer,  }  
                        
              
                ]
            });

          var getData=$.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                url:"getTime.php",
                data:"rev=1",
                async:false,
                success:function(getData){
                    $("div#showTime").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                }
        }).responseText; 

         },1000);  
       
     });
 


  
