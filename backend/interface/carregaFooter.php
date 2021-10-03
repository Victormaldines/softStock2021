<footer>
	SoftStock <span class="ano"></span>
</footer>

<script>
	(function() {
		const ano = document.querySelector('.ano');
		let date = new Date();
		ano.innerText = date.getFullYear();
	})();
</script>