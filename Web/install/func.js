function agree() {
	if(document.form.chkbox.checked)
	{
		document.form.next.disabled=false;
	}

	else
	{
		document.form.next.disabled=true;
	}
}