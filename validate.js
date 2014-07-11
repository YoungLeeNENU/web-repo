function checkForm(form)
{
    if(form.Username.value == "") {
        alert("Error: Username cannot be blank!");
        form.Username.focus();
        return false;
    }
	
    re = /^\w+$/;
    if(!re.test(form.Username.value)) {    // 用户名只能为英文字母
        alert("Error: Username must contain only letters, numbers and underscores!");
        form.Username.focus();
        return false;
    }

    if(form.Password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.Password.focus();
        return false;
    }
	
	var regu = "^[0-9a-zA-Z]$";
	var re = new RegExp(regu);
    if(re.test(form.Password.value)) {
        alert("Error: password must have numbers and letters!");
        form.Password.focus();
        return false;
    }
	
    alert("You entered a valid password: " + form.Password.value);
    return true;
}
