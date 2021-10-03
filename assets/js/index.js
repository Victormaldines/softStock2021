function index() {

let btnLogin = document.querySelector('#button-login');

btnLogin.addEventListener('submit', e => {
	location.href = './backend/recuperaProdutos.php' ;
});

}

index();
