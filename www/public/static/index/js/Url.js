function getRootPath(){
	var strPath = window.document.location.pathname;
	return controllerPath = strPath.substring(0,strPath.substr(1).indexOf('/')+1)+'/index.php/index/';
}

