<html>
<head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --green:#991224;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background:#eee;
}

.sub-heading{
    text-align: center;
    color:var(--green);
    font-size: 2rem;
    padding-top: 1rem;
}

.heading{
    text-align: center;
    color:var(--black);
    font-size: 3rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: var(--green);
    letter-spacing: .1rem;
}

header{
    position: fixed;
    top:0; left: 0; right:0;
    background: #fff;
    padding:1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}

header .logo{
    color:var(--black);
    font-size: 2.5rem;
    font-weight: bolder;
}

header .logo i{
    color:var(--green);
}

header .navbar a{
    font-size: 1.7rem;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    color:var(--light-color);
}

header .navbar a.active,
header .navbar a:hover{
    color:#fff;
    background: var(--green);
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: .5rem;
    height:4.5rem;
    line-height: 4.5rem;
    width:4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color:var(--black);
    border-radius: 50%;
    background: #eee;
}

header .icons i:hover,
header .icons a:hover{
    color:#fff;
    background: var(--green);
    transform: rotate(360deg);
}

header .icons #menu-bars{
    display: none;
}

#search-form{
    position: fixed;
    top:-110%; left:0;
    height:100%; width:100%;
    z-index: 1004;
    background:rgba(0,0,0,.8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0 1rem;
}

#search-form.active{
    top:0;
}

#search-form #search-box{
    width:50rem;
    border-bottom: .1rem solid #fff;
    padding:1rem 0;
    color:#fff;
    font-size: 3rem;
    text-transform: none;
    background:none;
}

#search-form #search-box::placeholder{
    color:#eee;
}

#search-form #search-box::-webkit-search-cancel-button{
    -webkit-appearance: none;
}

#search-form label{
    color:#fff;
    cursor:pointer;
    font-size: 3rem;
}

#search-form label:hover{
    color:var(--green);
}

#search-form #close{
    position: absolute;
    color:#fff;
    cursor: pointer;
    top: 2rem; right:3rem;
    font-size: 5rem;
}

.home .home-slider .slide{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
    padding-top: 9rem;
}

.home .home-slider .slide .content{
    flex:1 1 45rem;
}

.home .home-slider .slide .image{
    flex:1 1 45rem;
}

.home .home-slider .slide .image img{
    width: 100%;
}

.home .home-slider .slide .content span{
    color:var(--green);
    font-size: 2.5rem;
}

.home .home-slider .slide .content h3{
    color:var(--black);
    font-size: 7rem;
}

.home .home-slider .slide .content p{
    color:var(--light-color);
    font-size: 2.2rem;
    padding:.5rem 0;
    line-height: 1.5;
}

.swiper-pagination-bullet-active{
    background:var(--green);
}

.dishes .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
    gap:1.5rem;
    place-content: 'center';
}

.dishes .box-container .box{
    padding:2.5rem;
    background:#fff;
    border-radius: .5rem;
    border:.1rem solid rgba(141, 126, 126, 0.2);
    box-shadow: var(--box-shadow);
    position: relative;
    overflow: hidden;
    text-align: center;
}

.dishes .box-container .box .fa-heart,
.dishes .box-container .box .fa-eye{
    position: absolute;
    top:1.5rem;
    background:#eee;
    border-radius: 50%;
    height: 5rem;
    width:5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:var(--black);
}

.dishes .box-container .box .fa-heart:hover,
.dishes .box-container .box .fa-eye:hover{
    background: var(--green);
    color:#fff;
}

.dishes .box-container .box .fa-heart{
    right:-15rem;
}

.dishes .box-container .box .fa-eye{
    left:-15rem;
}

.dishes .box-container .box:hover .fa-heart{
    right:1.5rem;
}

.dishes .box-container .box:hover .fa-eye{
    left:1.5rem;
}

.dishes .box-container .box img{
    height:17rem;
    margin:1rem 0;
}

.dishes .box-container .box h3{
    color:var(--black);
    font-size: 2.5rem;
}

.dishes .box-container .box .stars{
    padding:1rem 0;
}

.dishes .box-container .box .stars i{
    font-size: 1.7rem;
    color:var(--green);
}

.dishes .box-container .box span{
    color:var(--green);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}

.about .row{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    align-items: center;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width: 100%;
}

.about .row .content{
    flex:1 1 45rem;
}

.about .row .content h3{
    color:var(--black);
    font-size: 4rem;
    padding:.5rem 0;
}

.about .row .content p{
    color:var(--light-color);
    font-size: 1.5rem;
    padding:.5rem 0;
    line-height: 2;
}

.about .row .content .icons-container{
    display: flex;
    gap:1rem;
    flex-wrap: wrap;
    padding:1rem 0;
    margin-top: .5rem;
}

a {
    text-decoration: none;
}
.about .row .content .icons-container .icons{
    background:#eee;
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.2);
    display: flex;
    align-items: center;
    justify-content: center;
    gap:1rem;
    flex:1 1 17rem;
    padding:1.5rem 1rem;
}

.about .row .content .icons-container .icons i{
    font-size: 2.5rem;
    color:var(--green);
}

.about .row .content .icons-container .icons span{
    font-size: 1.5rem;
    color:var(--black);
}

.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.menu .box-container .box{
    background: #fff;
    border:.1rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
}

.menu .box-container .box .image{
    height: 25rem;
    width: 100%;
    padding:1.5rem;
    overflow: hidden;
    position: relative;
}

.menu .box-container .box .image img{
    height: 100%;
    width: 100%;
    border-radius: .5rem;
    object-fit: cover;
}

.menu .box-container .box .image .fa-heart{
    position: absolute;
    top:2.5rem; right: 2.5rem;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    background: #fff;
    border-radius: 50%;
    color:var(--black);
}

.menu .box-container .box .image .fa-heart:hover{
    background-color: var(--green);
    color:#fff;
}

.menu .box-container .box .content{
    padding:2rem;
    padding-top: 0;
}

.menu .box-container .box .content .stars{
    padding-bottom: 1rem;
}

.menu .box-container .box .content .stars i{
   font-size: 1.7rem;
   color:var(--green);
}

.menu .box-container .box .content h3{
    color:var(--black);
    font-size: 2.5rem;
}

.menu .box-container .box .content p{
    color:var(--light-color);
    font-size: 1.6rem;
    padding:.5rem 0;
    line-height: 1.5;
}

.menu .box-container .box .content .price{
    color:var(--green);
    margin-left: 1rem;
    font-size: 2.5rem;
}

.review .slide{
    padding:2rem;
    box-shadow:var(--box-shadow);
    border:.1rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    position: relative;
}

.review .slide .fa-quote-right{
    position: absolute;
    top:2rem; right:2rem;
    font-size: 6rem;
    color:#ccc;
}

.review .slide .user{
    display: flex;
    gap:1.5rem;
    align-items: center;
    padding-bottom: 1.5rem;
}

.review .slide .user img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}

.review .slide .user h3{
    color:var(--black);
    font-size: 2rem;
    padding-bottom: .5rem;
}

.review .slide .user i{
    font-size: 1.3rem;
    color:var(--green);
}

.review .slide p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:var(--light-color);
}

.orders{
    display: flex;
}



.order form{
    max-width:50rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:.1rem solid rgba(0,0,0,.2);
    background:#fff;
    padding:1.5rem;
    margin:0 auto;
}

.order form .inputBox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.order form .inputBox .input{
    width:49%;
}

.order form .inputBox .input span{
    display:block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.order form .inputBox .input input,
.order form .inputBox .input textarea{
    background:#eee;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
    margin-bottom: 1rem;
    width:100%;
}

.order form .inputBox .input input:focus,
.order form .inputBox .input textarea:focus{
    border:.1rem solid var(--green);
}

.order form .inputBox .input textarea{
    height:20rem;
    resize: none;
}

.order form .btn{
    margin-top: 0;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    padding:.5rem 0;
    font-size: 2.5rem;
    color:var(--black);
}

.footer .box-container .box a{
    display: block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.footer .box-container .box a:hover{
    color:var(--green);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    border-top: .1rem solid rgba(0,0,0,.1);
    font-size: 2rem;
    color:var(--black);
    padding:.5rem;
    padding-top: 1.5rem;
    margin-top: 1.5rem;
}

.footer .credit span{
    color:var(--green);
}

.loader-container{
    position: fixed;
    height:100%;
    width:100%;
    z-index: 10000;
    background:#fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.loader-container img{
    width:35rem;
}

.loader-container.fade-out{
    top:-110%;
    opacity:0;
}
#dropdown-content{
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
#dropbtn{
    /* background-color: #04AA6D; */
  /* color: white; */
  /* padding: 16px; */
  font-size: 16px;
  border: none;
}
#dropdown{
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
/*  */

.dropbtn {
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #991224;;
  min-width: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.fas:hover .dropdown-content{
display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
/*  */


/* rating */
.rating-css div {
    color: #ffe400;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 60px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

  .checked{
      color:#991224;
  }

/* End of Star Rating */





media queries

@media (max-width:991px){

html{
    font-size: 55%;
}

header{
    padding:1rem 2rem;
}

section{
    padding:2rem;
}


}

@media (max-width:768px){

header .icons #menu-bars{
    display: inline-block;
}

header .navbar{
    position: absolute;
    top:100%; left:0; right:0;
    background:#fff;
    border-top: .1rem solid rgba(0,0,0,.2);
    border-bottom: .1rem solid rgba(0,0,0,.2);
    padding:1rem;
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .navbar.active{
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
}

header .navbar a{
    display: block;
    padding:1.5rem;
    margin:1rem;
    font-size: 2rem;
    background:#eee;
}

#search-form #search-box{
    width:90%;
    margin:0 1rem;
}

.home .home-slider .slide .content h3{
    font-size: 5rem;
}

}

@media (max-width:450px){

html{
    font-size: 50%;
}

.dishes .box-container .box img{
    height:auto;
    width: 100%;
}

.order form .inputBox .input{
    width:100%;
}

.ui-menu-item{

    background-color: darkblue;
    font-size: 100%;
}

}
</style>
</head>
</html>
