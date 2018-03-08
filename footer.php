</main>

<footer>
	<div class="logo-footer">
		<a href="#">
			<img src="images/logo-tag-footer.svg" alt="Logo TAG Footer">
		</a>

		<p>2018 Todos os direitos reservados</p>
	</div>
</footer>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/wow/dist/wow.min.js"></script>
<script>
$(function(){
	$('.toggle').click(function(){
		$('.layout').toggleClass('ativo');
		$('.menu-responsivo').toggleClass('ativo');
		$(this).toggleClass('ativo');
	});
	new WOW().init();
});
</script>
</body>
</html>
