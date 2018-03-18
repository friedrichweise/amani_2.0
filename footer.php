<?php if (!is_404()):?>
<footer class="contentWrapper">
	<span>Amani Kinderdorf e.V.</span>
	<div>
	<?php wp_nav_menu( array('menu' => 'footerMenu', 'container' => '','items_wrap' => '%3$s', 'before' => '' )); ?>
	</div>
</footer>
<?php endif; ?>

<script type="text/javascript">
    function searchButtonClicked () {
        if(document.getElementById('searchField').value.length>0) document.getElementById('searchForm').submit();
         document.getElementById('searchField').focus();
    }
    function changeVisibility(value) {
        document.getElementById('searchSection').classList.toggle('inputHidden',value);
    }
	function toggleMobileMenu(el){
		el.nextElementSibling.classList.toggle('sideBarPageTreeItems--visible'); 
		el.classList.toggle('sideBarPageTreeHeading--visible');
		return false;
	}
</script>
 <?php if(is_front_page()||is_home()): ?>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/slick.min.js"></script>
	<script type="text/javascript">	
	    jQuery(document).ready(function(){
	       jQuery('#slideShowContent').slick({
	        autoplay: true,
	        autoplaySpeed: 4000,  
	        infinite: true,
	        speed: 400,
	        fade: true,
	        cssEase: 'linear',
	        dots:true,
	        arrows:false
	    });
	   });
	</script>
 <?php endif; ?>

<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>
</body>
</html>