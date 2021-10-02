function index() {

let btnLogin = document.querySelector('#button-login');

btnLogin.addEventListener('click', e => {
	e.preventDefault();
	location.href = './backend/recuperaProdutos.php' ;
});

}

index();
