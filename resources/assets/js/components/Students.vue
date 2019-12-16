<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
	  <a class="navbar-brand" href="#">GI</a>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#"> Kezdőlap<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#"> Névsor</a>
	      </li>
		   <li class="nav-item">
	        <a class="nav-link" href="#"> Órarend</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	<b-table striped hover :items="students"></b-table>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        items: [
          { first_name: 'Trimfa', last_name: 'Egon', email_adress:'trimfa@gmail.com'  },
          { first_name: 'Bartalis', last_name: 'Szilvia', email_adress:'bartalis@gmail.com' },
          { first_name: 'Kiss', last_name: 'Pista', email_adress:'kiss@gmail.com' },
          { first_name: 'Nagy', last_name: 'Almafa', email_adress:'nagy@gmail.com'}
        ]
      }
    }
  }
</script>