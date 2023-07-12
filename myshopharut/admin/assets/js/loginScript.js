$(function(){
    $(".logbut").click(function(){
        let login = $(".login").val();
        let pass = $(".pass").val();

        $.ajax({
            url: ".././controller/loginController.php",
            method:"post",
            datatype: "json",
            data: {
                login,
                pass,
                action:"login",
            },
            success: function(returnData){
                let pars= JSON.parse(returnData)
                if (pars["action"] === 1) {

                    $(".alert-success").html(pars["massege"]);
                    $(".alert-success").fadeIn();
                    $(".alert-success").fadeOut(2000);
                    setTimeout(function(){
                        location.href = ".././index.php";
                    },2500)
                }else{
                    $(".alert-danger").html(pars["massege"]);
                    $(".alert-danger").fadeIn();
                    $(".alert-danger").fadeOut(2000);
                    setTimeout(function(){
                        location.reload();
                    },2500)
                }
            }
        })
    })
})