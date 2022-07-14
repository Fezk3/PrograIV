<section id="contact" class="four">
	<div class="container">

		<header>
			<h2>Contact</h2>
		</header>

		<p>Elementum sem parturient nulla quam placerat viverra
		mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
		donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
		orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

		<form method="post" action="#">
			<div class="row">
			<div class="col-6 col-12-mobile"><input id="name" type="text" name="name" placeholder="Name" /></div>
			<div class="col-6 col-12-mobile"><input id="email" type="text" name="email" placeholder="Email" /></div>
			<div class="col-12">
				<textarea id="msg" name="message" placeholder="Message"></textarea>
			</div>
			<div class="col-12">
				<button id="btn" type="button" value="Send Message">SUMIT </button>
			</div>
			</div>
		</form>

	</div>
</section>

<!-- AGREGANDO AJAX AL FORM -->

<script>

const btn = window.document.querySelector('#btn');

(()=>{

	btn.addEventListener('click', ()=>{

		const name = window.document.querySelector('#name');
		const email = window.document.querySelector('#email');
		const msg = window.document.querySelector('#msg');	

		// peticion ajax con fetch
		// mandando los datos del formulario mediante link porque usamos GET
		// si fuese por POST se usaria un body
		fetch(`email.php?nombre=${name}&email=${email}&mensaje=${msg}`, {
			method: 'GET',
			headers: {
				'Content-Type': 'application/json'
			}
		}).then(res =>{
			alert(res)
		});

	});

})()

</script>