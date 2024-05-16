$(document).ready(function(){
    $("#theloai").on('input', function(e){
        var theloai = $(this).val();
        var date = $("date").val();
        $.ajax({
            url:"../filterdata.php",
            type: "GET",
            data:{theloai:theloai, date:date},
            success:function(data){
                $("#listbook").html(data);
            }
        });
    });
    $("#date").on('input', function(e){
        var date = $(this).val();
        var theloai = $("theloai").val();
        $.ajax({
            url:"../filterdata.php",
            type: "GET",
            data:{theloai:theloai, date:date},
            success:function(data){
                $("#listbook").html(data);
            }
        });
    });
});