function estoque() {

const btnCadastroProduto = document.querySelector('.header-cadastro-produto');

btnCadastroProduto.addEventListener('click', e => {
	location.href = './cadastro-produto.php';
});

}

estoque();