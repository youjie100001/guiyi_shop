$(function(){
    $("#sub").click(function(){
        $.ajax({
            type:"post",
            url:getRootPath()+'Login/login',
            data: $("#qe").serialize(),
            dataType:'json',
            success:function(data){
                if(data.re==1){
                    alert(data.msg);
                    location.href=getRootPath()+"Index/index";
                }else{
                    alert(data.msg);
                    $("#code").val("");
                    $('#yzm').click();
                }
            }
        });
        return false;
    });
});