var c = document.getElementsByClassName("jumbotron text-center");
var d = new Date();
function stilltoday() {if(c.id=="pgt"){
	c.id=d.getDate();
	return c.id==d.getDate();
	}else if(c.id!==d.getDate()){
		c.id=d.getDate();
		return c.id!==d.getDate();
		} else {
			return c.id==d.getDate();
			}
}