function isblank(s)
	{
		if(s.charAt(0)=" ")
			return true;
		else
			return false;
	}
	function validate_name()
	}
		var str=document.register.name.value;
		if(isblank(str))
		{
			alert("Name field cannot be empty");
			return false;
		}
		return true;
	}
	function processfrom()
	{
		if(!validate_name(document.register.name.value))
			return false
	}