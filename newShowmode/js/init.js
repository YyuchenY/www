function init() {
      var carousel = $('carousel'),
          navButtons = document.querySelectorAll('#navigation button'),
          panelCount = carousel.children.length,
          transformProp = Modernizr.prefixed('transform'),
          theta = 0;
		 
          this.onNavButtonClick = function( event ){
			
            var increment = parseInt( event.target.getAttribute('data-increment') );


           // theta += ( 360 / panelCount ) * increment * -1;
			theta +=20* increment * -1;;
		    carousel.style[ transformProp ] = 'rotateY(' + theta + 'deg)';
          }
	  for ( var i = 0 ; i< panelCount ;  i++){
		$(i).style[ transformProp ]='rotateY(   '+(18*i+9)+'deg ) translateZ( 450px )';
	}
		
      for (var i=0; i < 2; i++) {
        navButtons[i].addEventListener( 'click', onNavButtonClick, false);
      }
	  
	  for(var i=0 ; i<panelCount ; i++){
		list.add(i);
		listCurrent = list.listEnd.next;
	  }
	  
	  

}