;$(function(){

    $('#data-form').validate({
        rules: {
            name: {
                required: true,
            },
            password:{
                required:true
            }
        },
        messages:{
            name:{
                required:'用户名不能为空',
            },
            password:{
                required:'密码不能为空',
            }
        }
    });


    new SubmitBtn({
        prepositionJudge:function(){
            if(!$('#data-form').valid()){
                return false;
            }
            return true;
        },
        error:function(){
            alert('网络异常！');
        },
        url:'/propagator/login',
        data:function(){
            return $('#data-form').serialize();
        },
        selectorStr:'#login',
        redirectTo:'/propagator/index'
    });
});