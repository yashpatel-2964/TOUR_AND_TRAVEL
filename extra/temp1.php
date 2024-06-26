
@media (max-width:1200px){

section{
	padding:3rem 5%;
  }
}

@media (max-width:991px){

	html{
		font-size: 55%;
	}

section{
	padding:3rem 2rem;
  }
}

@media (max-width:768px){

	#menu-btn{
		display: inline-block;
		transition: .2s linear;
	}

	#menu-btn.fa-times{
		transform: rotate(180deg);
	}

	.header .navbar{
		position: absolute;
		top: 99%;
		left: 0;
		right: 0;
		background-color: var(--white);
		border-top: var(--border);
		padding: 2rem;
		transition: .2s linear;
		clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
	}

	.header .navbar .active{
		clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
	}

	.header .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
	}
}


@media (max-width:450px){

	html{
		font-size: 50%;
	}
}




































let menu = document.queryselector('#menu-btn');
let menu = document.queryselector('.header .navbar')

menu.onclick = () =>{
	menu.classList.toggle('fa-times');
	navbar.classList.toggle('active');
}