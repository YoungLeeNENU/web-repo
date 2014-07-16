// @TODO: Optimize the regular expressions
function checkForm(form)
{
    if(form.Username.value == "") {
        alert("Error: Username cannot be blank!");
        form.Username.focus();
        return false;
    }
    re = /\w+/;
    if(!re.test(form.Username.value)) {    // 用户名只能为英文字母
        alert("Error: Username must contain only letters, numbers and underscores!");
        form.Username.focus();
        return false;
    }
    
    if(form.Password1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.Password1.focus();
        return false;
    }
    re = /\d+/;
    if(!re.test(form.Password1.value)) {
        alert("Error: password must contain at least one numer!");
        form.Password1.focus();
        return false;
    }
    re = /[a-zA-Z]/;
    if(!re.test(form.Password1.value)) {
        alert("Error: password must contain at least one letter!");
        form.Password1.focus();
        return false;
    }

	if (form.Password1.value != form.Password2.value) {
        alert("Error: Password inputs should be the same!");
        form.Username.focus();
        return false;
	}

    return true;
}
