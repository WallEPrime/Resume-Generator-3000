
    /* ADD EDUCATION */
function createNewSchool() {
  
    var txtNewInputBox = document.createElement('div');

    txtNewInputBox.setAttribute( "class", "schoolinput");
  
	txtNewInputBox.innerHTML = "<input type='text' id='duration' class='schoolI' name='duration[]' placeholder='duree'> <input type='text' id='schoolName'  class='schoolI' name='ecole[]' placeholder='nom ecole'>   <input type='button'  class='btn btn-danger btn-sm' id='removeSchool' value='Effacer' onclick='removeSchoolInput();'/> ";

 
	document.getElementById("newSchoolInput").appendChild(txtNewInputBox);
}




function removeSchoolInput(){

    

    $("body").on("click","#removeSchool",function(e){
        $(this).parents('.schoolinput').remove();
   });
    

}

/* ADD WORKPLACES */


function createNewWorkplace() {
  
    var txtNewInputBox = document.createElement('div');
    txtNewInputBox.setAttribute( "class", "workinput");


	txtNewInputBox.innerHTML = "<input type='text' id='duration' class='work' name='durationWork[]' placeholder='duree'> <input type='text' id='workplaceName'  class='work'name='nameWorkplace[]' placeholder='nom societe'>   <input type='button' class='btn btn-danger btn-sm' id='removeWork' value='Effacer' onclick='removeWorkInput();'/> ";

 // Finally put it where it is supposed to appear.
	document.getElementById("newWorkInput").appendChild(txtNewInputBox);
}




function removeWorkInput(){

    

    $("body").on("click","#removeWork",function(e){
        $(this).parents('.workinput').remove();
   });
    

}


/* HOBBIES */


function createNewHobby() {
    
    var txtNewInputBox = document.createElement('div');
    txtNewInputBox.setAttribute( "class", "hobbyinput");

   
	txtNewInputBox.innerHTML = "<input type='text' id='duration' class='hobby' name='hobby[]' placeholder='Denomination'>   <input type='button' class='btn btn-danger btn-sm' id='removeHobby' value='Effacer' onclick='removeHobbyInput();'/> ";

	document.getElementById("newHobbyInput").appendChild(txtNewInputBox);
}




function removeHobbyInput(){

    

    $("body").on("click","#removeHobby",function(e){
        $(this).parents('.hobbyinput').remove();
   });
    

}

