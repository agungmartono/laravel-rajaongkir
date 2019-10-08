$(document).ready(function () {
    
    $('#province').change(function (e) { 
       var prov = $('#province').val();
       //panggil ajax
       $.ajax({
           type: "GET",
           url: "/city/"+ prov,
           //data: tidak perlu mengirim data karena oop
           success: function (response) {
               $('#city').html(response);
           }
       });  
    });

    $('#city').change(function (e) { 
        var city = $('#city').val();
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/subdistrict/"+ city,
            //data: tidak perlu mengirim data karena oop
            success: function (response) {
                $('#subdistrict').html(response);
            }
        });  
     });

    $('#provinceDest').change(function (e) { 
        var provDest = $('#provinceDest').val();
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/city/"+ provDest,
            //data: "data",
            //dataType: "dataType",
            success: function (response) {
              $('#cityDest').html(response);  
            }
        });  
    });

    $('#provinceDest').change(function (e) { 
        var provDest = $('#provinceDest').val();
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/city/"+ provDest,
            //data: "data",
            //dataType: "dataType",
            success: function (response) {
              $('#cityDest').html(response);  
            }
        });  
    });
    
    $('#cityDest').change(function (e) { 
        var cityDest = $('#cityDest').val();
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/subdistrict/"+ cityDest,
            //data: "data",
            //dataType: "dataType",
            success: function (response) {
              $('#subdistrictDest').html(response);  
            }
        });  
    });

    $('#tombolCost').click(function (e) { 
        var curier = $('#curier').val();
        var subdistrict = $('#subdistrict').val();
        var subdistrictDest = $('#subdistrictDest').val();
        var weight = $('#weight').val();
        
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/cost/" +subdistrict+ "/" +"subdistrict"+ "/" +subdistrictDest+ "/" +"subdistrict"+ "/"  +weight + "/" +curier ,

            success: function (response) {
                $('#cost').html(response);
            },
            error: function(){
                $('#cost').html('<h4>data not found</h4>');
            }
        });
        
    });

    $('#tombolResi').click(function (e) { 
        var waybill = $('#waybill').val();
        var courier = $('#courier').val();
        
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/waybill/" +waybill+ "/"  +courier ,

            success: function (response) {
                $('#resi').html(response);
            },
            error: function(){
                $('#resi').html('<h4>data not found</h4>');
            }
        });
        
    });

});