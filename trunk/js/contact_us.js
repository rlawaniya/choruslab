function validateEmail(email) {
        /*
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       if (reg.test(email) == false) return false;
       else return true;
       */
       if (email.indexOf('@') > 0) return true;
       else return false;
}

function errorHilight(element) {
    $(element).animate( { backgroundColor: 'pink' }, 300)
    .animate( { backgroundColor: '#414141' }, 300)
    .animate( { backgroundColor: 'pink' }, 300)
    .animate( { backgroundColor: '#414141' }, 300)
    .animate( { backgroundColor: 'pink' }, 300)
    .animate( { backgroundColor: '#414141' }, 300);
    $('.valid').css("background-color", "414141");
    $('.combo_open_list').css("dispaly","none");
}

function submit_form_js(qname, qemail, qphoneno, qmsg, value) {
	var isError = false;
    
    if (qname == '') {
        errorHilight($('#name_acc'+value));
		isError = true;
    }

    if ((qemail == '') || (!validateEmail(qemail))) {
        errorHilight($('#email_acc'+value));
		isError = true;
    }

    if (value == 1 || value == 2){
        var reg = /^([() +\-\.0-9]*)$/;
        if (qphoneno == '' || reg.test(qphoneno) == false){ 
            errorHilight($('#phone_acc'+value));
			isError = true;
        }
    }

    if (qmsg == '') {
        errorHilight($('#msgContent_acc'+value));
		isError = true;
    }

	if(isError == true){
		return false;
	}else{
		return true;
	}
}