//The scripting for GSAP. The entire page fades in from white then each layer slides up in to place as they fade in.

(function ($){
    var layer1 = '#layer1',
	layer2 = '#layer2',
	layer3 = '#layer3',
	layer4 = '#layer4',
	layer5 = '#layer5',
	header = 'header',
	html = 'html',
	tl;
	
	tl = new TimelineLite();
 tl
    .from($(html), 0.8, {autoAlpha: 0})
	.from($(layer1), 0.5, {autoAlpha: 0, y: 75, ease:Power2.easeIn})
	.from($(layer2), 0.5, {autoAlpha: 0, y: 75, ease:Power2.easeIn})
	.from($(layer3), 0.5, {autoAlpha: 0, y: 75, ease:Power2.easeIn})
	.from($(layer4), 0.5, {autoAlpha: 0, y: 75, ease:Power2.easeIn})
	.from($(layer5), 0.5, {autoAlpha: 0, y: 10, ease:Power4.easeIn})
	.from($(header), 0.5, {autoAlpha:0},"-=1.5");
 
        
})(jQuery);

//ScrollMagic fades

$(document).ready(function(){
  //Init ScrollMagic
    var controller = new ScrollMagic.Controller();
    
    // pin the intro
    var pinIntroScene = new ScrollMagic.Scene({
       triggerElement: '#intro',
       triggerHook: 0,
       duration: '30%'
        
    })
    .setPin('#intro', {pushFollowers: false})
    .addTo(controller);
    //another pin    
    var pinIntroScene = new ScrollMagic.Scene({
      triggerElement: '#project01',
      triggerHook: 0.6
        
    })
    .setPin('#intro', {pushFollowers: false})
    .addTo(controller);
//loop
    $('.project').each(function(){
       //build a scene
    var ourScene = new ScrollMagic.Scene({
        triggerElement: this,
        duration: '100%',
        triggerHook: 0.8
        
    })
    .setClassToggle(this, 'fade-in') //add class to project01
//  .addIndicators() //requires plugin
    .addTo(controller)
    
      
    });
});
