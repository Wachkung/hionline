      

  
$(document).ready(function () {

 setInterval(function(){


            var url = "or_list_query.php";
            var req =1;
            var source =
            {
                datatype: "json",
                datafields: [
           
            { name: 'id', type: 'string' }  ,                 
            { name: 'hn', type: 'string' }  ,
            { name: 'fullname', type: 'string' }  ,
            { name: 'age', type: 'string' }  , 
            { name: 'ansstart', type: 'string' } ,           
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
                    
                    { text: 'ลำดับ', dataField: 'id', width:'3%', cellclassname: "bigfont3", renderer: columnsrenderer, cellsrenderer: cellsrenderer, },                         
                    { text: 'HN', dataField: 'hn',  width:'15%', cellclassname: "bigfont3" , renderer: columnsrenderer, cellsrenderer: cellsrenderer, }, 
                     { text: 'ชื่อ', dataField: 'fullname',  width:'35%' , cellclassname: "bigfont2", renderer: columnsrenderer, cellsrenderer: cellsrenderer, }, 
                    { text: 'อายุ', dataField: 'age',  width:'5%' , cellclassname: "bigfont3" , renderer: columnsrenderer, cellsrenderer: cellsrenderer,},     
                    { text: 'เวลาเริ่ม', dataField: 'ansstart',   width:'17%' , cellclassname: "bigfont4", renderer: columnsrenderer, cellsrenderer: cellsrenderer,  },                     
                    { text: 'สถานะ', dataField: 'status',  width:'25%' , cellclassname: "bigfont7", renderer: columnsrenderer, cellsrenderer: cellsrenderer,  }  
                        
              
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
 


  
