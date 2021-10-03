function estoque() {

const btnCadastroProduto = document.querySelector('.header-cadastro-produto');

btnCadastroProduto.addEventListener('click', e => {
	location.href = './cadastro-produto.php';
});

document.addEventListener('click', e => {

	const el = e.target;

	if (el.classList.contains('btn-del-produto')) {

		const produto = pegaRegistroProduto();
		const idProduto = pegaIdProduto(produto);
		deletaProduto(idProduto);

		function pegaRegistroProduto() {

			let produto = [];
			let colProduto = el.parentNode.previousElementSibling;
			
			while (colProduto) {
				produto.push(colProduto.innerText);
				colProduto = colProduto.previousElementSibling;
			}
			
			return produto;
		}

		function pegaIdProduto(produto) {
			const idProduto = produto[produto.length-1]
			return idProduto;
		}

		function deletaProduto(idProduto) {
			location.href = `backend/deletaProduto.php?idProduto=${idProduto}`;
		}
	}
	
});

}

estoque();