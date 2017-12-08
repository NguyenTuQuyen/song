function verify_delete (msg)
{

	if(window.confirm(msg)){
		return true;
		
	}
	return false;
}
$("div.alert").delay(3000).slideUp();