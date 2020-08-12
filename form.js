$('#send').on('click',()=>{
    validForm();
})

var validForm = function(){
    let name = $('.name').val();
    let email = $('.email').val();
    let phone = $('.phone').val();
    if(name !='' && email !='' && phone !=''){
        if(isNaN(name)){
                if (isNaN(phone) || phone.length < 9 || phone.length >10) {
                }else{
                    if(isEmail(email)){
                        sendEmail(name,email,phone);
                    }
                }
            }
        }
        
    }
var isEmail = function (email) {
    var regex =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/igm
    return regex.test(email);
}
var sendEmail = function(n,e,p){
        $.ajax({
            url: 'mailer.php',
            method: 'get',
            dataType: 'json',
            data: {
                name: n,
                phone: p,
                mail: e,
            }
        }).done(function (r) {
            $('#form').html('! תודה שנרשמתם נחזור אליכם בהקדם');
            $('#send').hide();
        }).fail(function (r, x,y) {
        })
}