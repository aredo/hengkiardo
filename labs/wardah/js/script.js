/* Author: 

*/
$(function() {
    var galleries = $('.ad-gallery').adGallery(
		{
			'thumb_opacity' : 1,
			'animation_speed' : 500,
			'slideshow' :{
				'speed': 10000,
				'autostart': true,
			},
			'effect': 'slide-hori',
		}
	);
});
