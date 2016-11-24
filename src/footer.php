<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feelman
 */

?>

	<article id="contacts" class="contacts">
		<h2 class="contacts__title">E-mail</h2>
		<span class="contacts__mail"><a href="mailto:mail@feelman.info">mail@feelman.info</a></span>
	</article>
</main>

<footer class="page-footer">
		<div class="page-footer__copyright"></div>
	</footer>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38280695 = new Ya.Metrika({ id:38280695, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/38280695" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>
