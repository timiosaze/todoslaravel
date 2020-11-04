$(document).ready(function(){
	$('.data-list').click(function(){
		$action = $(this).children(".actions");
		$notaction = $(this).siblings().children(".actions");
		$notaction.slideUp();
		$action.slideToggle();
	});
	$('.done').click(function(){
		$this = $(this).parents('.actions').prev();
		$this.toggleClass('text-through');
		$(this).text($(this).text() == 'Done' ? 'Undone' : 'Done');
	});
});