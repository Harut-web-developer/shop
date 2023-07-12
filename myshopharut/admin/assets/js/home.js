$(function(){
    $(".updateCat").click(function(){
        let catName = $(".cName").html();
        let catId = $(this).data("value");
        $.ajax({
            url: ".././controller/catController.php",
            method: "post",
            datatype: "json",
            data: {
                catName,
                catId,
                action: "update",
            },
            success: function(data){
                console.log(data);
            }
        })
    })
})