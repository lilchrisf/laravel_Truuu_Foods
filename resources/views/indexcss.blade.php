<html>
<head>
<style>
    *{
    margin: 0;
    padding: 0;

}

.main{
    width: 100%;
    /* background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg); */
    background-position: center;
    background-size: cover;
    height: 100vh;
    /* background: url(https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F38%2F2019%2F07%2F10154847%2FGettyImages-463374569.jpg&w=380&h=254&c=sc&poi=%5B2592%2C1728%5D&q=60); */
    /* background: url(https://i.ytimg.com/vi/dip_8dmrcaU/maxresdefault.jpg); */
    background-size: cover;
}

.navbar{
    /* width: 1200px; */
    height: 75px;
    margin: auto;
    background-color: black;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #a52a2a;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 14px;
    width: auto;
    display: flex;
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}



ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #a52a2a;
}

.search{
    width: 330px;
    float: left;
    margin-left: 400px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #a52a2a;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #a52a2a;
    border: 2px solid #a52a2a;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #a52a2a;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;

}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #a52a2a;
    font-size: 65px
}

.form{
    width: 300px;
    height: auto;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 70%;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    margin-top: 200px;
}

/* .form{
    width: 300px;
    height: auto;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 35%;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    margin-top: 80px;
} */

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #a52a2a;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #a52a2a;;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #a52a2a;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #a52a2a;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
    color: white;
}
.form .link a{
    text-decoration: none;
    color: #a52a2a;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
    color: white;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #a52a2a;
}

.text-danger{
    color: white;
}


.elementdiv{
    height: 700px;
    background-color: #a52a2a;
    width: 449px;
    flex-wrap: wrap;
    text-align: center;

}

.element{
    height: auto;
    flex-wrap: wrap;
    display: flex;
    background-color:rgb(49, 48, 48);
}

.elementwrap{
    background: url(https://www.telegraph.co.uk/content/dam/Travel/2018/January/white-plane-sky.jpg?imwidth=680);
    height: 700px;
    background-color: #a52a2a;
    width: 50%;
    flex-wrap: wrap;
    display: flex;
    background-size: cover;
    background-repeat: no-repeat;
}

.elementwrap1{
    height: 700px;
    background-color: #a52a2a;
    width: 50%;
    width: 50%;
    flex-wrap: wrap;

}

.elementsection{
    /* background-color: #beb3b3; */
    width: 200px;
    flex-wrap: wrap;
    display: flex;
    margin-left: 2%;
    margin-top: 50%;
    height: 150px;
    text-align: center;
    padding: 10px;
}

.divlogo{
    height: 50px;
    width: 100%;
}

.elementtile{
    margin-top: 30px;
}

.elementsection1{
    /* width: 400px; */
    flex-wrap: wrap;
    display: flex;
    margin-left: 20%;
    margin-top: 30%;
    height: auto;
    padding: 10px;
}

.section{
    height: 100px;
    margin-left: 100px;
    margin-top: 5%;
    font-size: 31px;
}



</style>
</head>
</html>
