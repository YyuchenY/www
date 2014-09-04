function init() {
      var carousel = $('carousel'),
          navButtons = document.querySelectorAll('#navigation button'),
          panelCount = carousel.children.length,
          transformProp = Modernizr.prefixed('transform'),
          theta = 0;
		 
          this.onNavButtonClick = function( event ){
            var increment = parseInt( event.target.getAttribute('data-increment') );
			
			if (increment === 1){
			//	listCurrent
				
				listCurrent.previous.data.style.opacity = 0;
				listCurrent.previous.previous.data.style.opacity = 0;
				listCurrent.previous.previous.previous.data.style.opacity = 0;
				listCurrent = listCurrent.next;
				
				console.log(listCurrent.next.data.id);
				listCurrent.previous.data.style.opacity = 1;
				listCurrent.data.style.opacity = 1;
				listCurrent.next.data.style.opacity = 0.7;
				listCurrent.next.next.data.style.opacity = 0.4;
			//	listCurrent.next.next.next.data.style.opacity = 0.1;
				
				listCurrent.previous.previous.data.style.opacity = 0.7;
				listCurrent.previous.previous.previous.data.style.opacity = 0.4;
			}else{
				console.log(listCurrent.previous.data.id);
				listCurrent.next.data.style.opacity = 0;
				listCurrent.next.next.data.style.opacity = 0;
				listCurrent.next.next.next.data.style.opacity = 0;
				listCurrent = listCurrent.previous;
				listCurrent.previous.data.style.opacity = 1;
				listCurrent.data.style.opacity = 1;
				listCurrent.next.data.style.opacity = 0.7;
				listCurrent.next.next.data.style.opacity = 0.4;
			//	listCurrent.next.next.next.data.style.opacity = 0.1;
				
				listCurrent.previous.previous.data.style.opacity = 0.7;
				listCurrent.previous.previous.previous.data.style.opacity = 0.4;
			}
				
				
			
			
            theta += ( 360 / panelCount ) * increment * -1;
          
		    carousel.style[ transformProp ] = 'rotateY(' + theta + 'deg)';
          }
	  for ( var i = 0 ; i< panelCount ;  i++){
		$("figure"+i).style[ transformProp ]='rotateY(   '+(18*i+9)+'deg ) translateZ( 450px )';
	}
		
      for (var i=0; i < 2; i++) {
        navButtons[i].addEventListener( 'click', onNavButtonClick, false);
      }
	  
	  for(var i=0 ; i<panelCount ; i++){
		list.add(i);
		listCurrent = list.listEnd.next;
	  }
	  

}