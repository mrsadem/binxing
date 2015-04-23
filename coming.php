<?php require_once('./header.php') ?>
<link rel="stylesheet" href="assets/css/coming.css">
 <div class="container">
        <div class="content">
            <svg viewBox="0 0 600 300">

                <!-- Clippath  with text -->
                <clippath id="cp-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em" class="text--line">
                        COMING SOON
                    </text>
                </clippath>

                <!-- Group for shadow -->
                <g clip-path="url(#cp-text)" class="shadow">
                    <rect width="100%" height="100%" class="anim-shape anim-shape--shadow"></rect>
                </g>

                <!-- Group with clippath for text-->
                <g clip-path="url(#cp-text)" class="colortext">
                    <!-- Animated shapes inside text -->
                    <rect width="100%" height="100%" class="anim-shape"></rect>
                    <rect width="80%" height="100%" class="anim-shape"></rect>
                    <rect width="60%" height="100%" class="anim-shape"></rect>
                    <rect width="40%" height="100%" class="anim-shape"></rect>
                    <rect width="20%" height="100%" class="anim-shape"></rect>
                </g>

                <!-- Transparent copy of text to keep patterned text selectable -->
                <use xlink:href="#s-text" class="text--transparent"></use>

            </svg>
        </div>
    </div>
<?php require_once('footer.php'); ?>
<script>
	$('footer').addClass('footer-single');
	var window_height = $(window).height();
	$('footer').css('position','absolute').css('bottom',0);
</script>