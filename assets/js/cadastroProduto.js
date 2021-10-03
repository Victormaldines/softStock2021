function cadastroProduto() {

const btnEstoque = document.querySelector('.header-estoque');
const form = document.querySelector('form');
const listaProdutos = document.querySelector('.lista-produtos ul');

btnEstoque.addEventListener('click', e => {
	location.href = './backend/recuperaProdutos.php';
});

form.addEventListener('submit', e => {
	const produto = pegarDadosDosInputs();
	
	if (!produto) {
		e.preventDefault();
		location.href = 'backend/interface/carregaAvisoUsuario.php?tipoMsg=campoVazio';
		return;
	};
	
	armazenarLocalStorage(produto);
	incluirProdutoNaLista(produto);	
});

function pegarDadosDosInputs() {
	const nomeProduto = document.querySelector('#nome');
	const tipoProduto = document.querySelector('#tipo');
	const quantidadeProduto = document.querySelector('#quantidade');
	const validadeProduto = document.querySelector('#validade');

	const produto = {
		nome: nomeProduto.value,
		tipo: tipoProduto.value,
		quantidade: parseInt(quantidadeProduto.value),
		validade: validadeProduto.value
	};

	if (validaCampos(produto)) return false;
	return produto;
}

function armazenarLocalStorage(produto) { // recebe objeto produto

	const produtoJSON = JSON.stringify(produto);
	let idBase;

	// Seta o idBase caso não exista na primeira vez
	if(!localStorage.getItem('IdBase')) {
		idBase = 0;
		localStorage.setItem('IdBase', idBase);
	}

	localStorage.setItem(localStorage.getItem('IdBase'), produtoJSON);
	idBase = parseInt(localStorage.getItem('IdBase')) + 1;
	localStorage.setItem('IdBase', idBase);
}

function incluirProdutoNaLista(produto) {
	const li = criaLi();
	const liFormatada = formataProdutoLi(li, produto);
	listaProdutos.insertBefore(liFormatada, listaProdutos.firstChild);

}

function criaLi() {
	const li = document.createElement('li');
	return li;
}

function formataProdutoLi(li, produto) {
	li.innerText += `${produto.nome} - ${produto.tipo} - ${produto.quantidade} - ${formataValidade(produto.validade)}`;
	return li;
}

function formataValidade(validade) {
	let validadeFormatada = validade.split('-');
	[ano, mes, dia] = validadeFormatada;
	return `${dia}/${mes}/${ano}`;
}

function setaProdutosNaListaLocalStorage() {
	const quantidadeProdutos = localStorage.getItem('IdBase');
	let produto;

	for (let i = 0; i < quantidadeProdutos; i++) {
		produto = JSON.parse(localStorage.getItem(i));
		incluirProdutoNaLista(produto);
	}
}

function validaCampos(produto) {
	for (index in produto) {
		if (!produto[index]) return true;
	}
}

setaProdutosNaListaLocalStorage();

}
cadastroProduto();
