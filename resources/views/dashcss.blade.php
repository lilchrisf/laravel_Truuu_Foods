<html>
<head>
<style>

@import url('https://fonts.googleleapis.com/css2?family=Popp:wght@300;400;500;600&display=swap');

:root {
    --main-color: rgb(21, 21, 41);
    --color-dark:  #1D2231;
    --text-grey:   #8390A2;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'poppins', sans-serif;
}

body{
    background-color: grey;
}

.sidebar {
    width: 345px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background-color:  var(--main-color);
    z-index: 100;
    transition: width 300ms;

}

.sidebar-brand{
    height: 90px;
    padding: 1rem 0rem 1rem 2rem;
    color: #fff;
}

.sidebar-brand span {
    display: inline-block;
    padding-right: 1rem
}

.sidebar-menu {
    margin-top: 1rem;
}

.sidebar-menu li{
    width: 100%;
    margin-bottom: 1.3rem;
    padding-left: 2rem;
}

.sidebar-menu a{
   display: block;
   color: #fff;
   font-size: 1.1rem;
}

.sidebar-menu a.active {
   background: #fff;
   padding-top: 1rem;
   padding-bottom: 1rem;
   color: var(--main-color);
   border-radius: 30px 0px 0px 30px;
}

.sidebar-menu a span:first-child {
   font-size: 1.5rem;
   padding-right: 1rem;
}

#nav-toggle:checked + .sidebar {
    width: 80px;
}

#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
    padding-left: 1rem;
    text-align: center;
}

#nav-toggle:checked + .sidebar li a {
    padding-left: 0rem;
}

#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child{
    display: none;
}

#nav-toggle:checked ~ .main-content {
    margin-left: 70px;
}

#nav-toggle:checked ~ .main-content header {
    width: calc(100% - 70px);
    left: 80px;
}

.main-content {
    transition: 300ms;
    margin-left: 345px;
}


header {
    display: flex;
    justify-content: space-between;
    padding: 1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 345px;
    width: calc(100% - 345px);
    top: 0;
    z-index: 100;
    transition: width 300ms;
    background: #fff;
}

#nav-toggle {
    display: :none;
}

.header h1 {
    color: #222;
}

.header label span {
    font-size: 1.7rem;
    padding-right: 1rem;
}

.search-wrapper {
    border: 1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
    width: 200px;
}

.search-wrapper span{
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}

.search-wrapper input {
    border: none;
    padding: .5rem;
    display: flex;
    outline: none;
}

.user-wrapper {
    display: flex;
    align-items: center;
}

.user-wrapper img {
    border-radius: 50%;
    margin-right: 1rem;
}

.user-wrapper small {
    display: inline-block;
    color: var(--text-grey);
}

.main {
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}

.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
    margin-top: 5.5rem;
    margin-left: 3rem;
    width: 90%;
    height: 50px;
}




.card-single {
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding:2rem;
    border-radius: 2px;
    margin-bottom: 50px;
}

.card-single div:last-child span{
    font-size: 3rem;
    color: var(--main-color);
}

.card-single div:first-child span{
    color: var(--text-grey);
}

.card-single:last-child {
    background: var(--main-color);
}

.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span {
    color: #fff;
},

.recent-grid {
    margin-top: 3.5rem;
    display: grid;
    grid-gap: 2rem;
    grid-template-columns: 65% auto;
    display: flex;
    flex-wrap: wrap;
}

.projects {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin-top: 70px;
}

.customers{
    width: 400px;
}

a{
   text-decoration: none;
}

.card {
    background: #fff;
    border-radius: 5px;
    margin-top: 20px;
    width: 50%;
    margin-left: 47px;
    height: auto;

}

.card-header,
.card-body {
    padding: 1rem;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}

.card-header button {
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
}

.card-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}


.card-head button {
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
    margin: 15px;
}

table {
    border-collapse: collapse;
}

thead tr{
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
}

thead td {
    font-weight: 700;
}

td {
    padding: .5rem 1rem;
    font-size: .9rem;
    color: #222;
    background-color: white;
}

.td .status {
    display: inline-block;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    margin-right: 1rem;
}


tr td:last-child {
    /* display: flex; */
    align-items: center;
}

.status-purple {
    background: rebeccapurple;
    display: inline-block;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    margin-right: 1rem;
    background: rebeccapurple;
}

.status-pink {
    background: deeppink;
    display: inline-block;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    margin-right: 1rem;
}

.status-orange {
    background: orangered;
    display: inline-block;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    margin-right: 1rem;
}

.table-responsive {
    width: 100%;
    height: 300px;
    overflow-x: auto;
}

.customer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .5rem 1rem;
}

.div2{
       width: 100%;
       height: 60px;
       font-size: 20px;
       margin-top: 0px;
       margin-left:0px;
       border:2px solid black;
       flex-wrap: wrap;
       display: flex;
   }

.td{
    border-right: 2px solid black;
    margin-bottom: 20px;
    margin-left: 10px;
    height: 65px;
    padding-top: 20px;
    width: 100px;
    font-size: medium;
}

th{
    border: 2px solid black;
    margin: 0px;
    width: 300px;
    background-color: white;
}

.inputform{
    height: 30px;
    width: 67%;
    margin-top: 14px;
    margin-left: 20px;
    padding-left: 10px;
    font-size: medium;
}

.button{
    background-color: rgb(110, 13, 13);
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .7rem;
    padding: 10px;
    width: 100%;
    border: 1px solid var(--main-color);
    margin-top:5px;
    margin-right: 10px;
}

.w-5{
    height: 100px;
    margin-top: 300px;
    flex-wrap: wrap;
    display: flex;
}

.flex{
    height: 50px;
    margin-top: 300px;
    flex-wrap: wrap;
    display: flex;
}

table{
    background-color:  rgb(133, 127, 127);
    border-radius: 5px;
    border: 2px solid black;
    width: 98%;
}
.form{
    width: 88%;
    height: 370px;
    font-size: 25px;
    margin-top: 45px;
    margin-left: 5%;
    border-radius: 5px;
    border: 2px solid black;
}



.info {
    display: flex;
    align-items: center;
}

.info img {
    border-radius:  50%;
    margin-right: 1rem;
}

.info h4 {
    font-size: .8rem;
    font-weight: 700;
    color: #222;
    width: 150px;
}

.info small {
    font-weight: 600;
    color: var(--text-grey);
}

.contact span {
    font-size: 1.2rem;
    display: inline-block;
    margin-left: .4rem;
    color: var(--main-color);
}

.contact {
    font-size: 1.2rem;
    display: inline-block;
    color: var(--main-color);
    display: flex;
    flex-wrap: wrap;
    width: 300px;
}

@media only screen and (max-width: 1200px) {
    .sidebar {
    width: 80px;
}

.sidebar .sidebar-brand,
.sidebar li {
    padding-left: 1rem;
    text-align: center;
}

#.sidebar li a {
    padding-left: 0rem;
}

.sidebar .sidebar-brand h2 span:last-child,
.sidebar li a span:last-child{
    display: none;
}

.main-content {
    margin-left: 70px;
}

.main-content header {
    width: calc(100% - 70px);
    left: 70px;
}



</style>
</head>
</html>
