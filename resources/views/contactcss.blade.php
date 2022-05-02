<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}


.contact{
    position: relative;
    min-height: 100vh;
    padding: 80px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: url(https://i.pinimg.com/originals/22/8e/05/228e05b70a5104e25ad495119d09f59b.jpg);
    background-size: cover;
}


.contact .content {
    max-width: 800px;
    text-align: center;
}

.contact .content h2 {
    font-size: 36px;
    font-weight: 500;
    color: #a52a2a;
}

.contact .content p {
    font-weight: 300;
    color:#fff;
}

.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}

.container .contactInfo {
    width: 50%;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.container .contactInfo .box{
    position: relative;
    padding: 20px 0;
}

.icons{
    display: flex;
    color: #a52a2a;
    transform: rotate(360deg);
}

.container .contactInfo .box .icon{
    width: 60px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 100%;
    font-size: 22px;
}

.container .contactInfo .box .text{
    /* display: flex; */
    margin-left: 20px;
    font-size: 16px;
    color: #fff;
    flex-direction: column;
    font-weight: 300;
}

.container .contactInfo .box .text h3{
    color: #fff;
    font-weight: 300;
}

.box{
    height: 100%;
}

.contactForm{
    width: 40%;
    padding: 40px;
    background: rgba(0,0,0,0.8);
    border-radius: 10px;
}

.contactForm h2{
    font-size: 30px;
    color: #a52a2a;
    font-weight: 500;
}

.contactForm .inputBox {
    position: relative;
    width: 100%;
    margin-top: 10px;
}

.contactForm .inputBox input,
.contactForm .inputBox textarea {
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin-top: 10px;
    border: none;
    border-bottom: 2px solid #333;
    outline:none;
    background: rgba(255, 255, 255, 0);
    resize: none;
    color: #a52a2a;
}

.contactForm .inputBox span {
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 0px 0;
    pointer-events: none;
    transition: 0.5s;
    color: white;
}


.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span {
    color: #e91e63;
    font-size: 12px;
    transition: translatey(-20px);
}

.contactform .inputBox input[type="sbmit"]{
    width: 100px;
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
    border-radius: 10px;
}

.button{
    background-color: #e91e63;
}



@media (max-width:991px) {
    .contact{
        padding: 50px;
    }

    .container{
        flex-direction: column;
    }

    .container .contactInfo,
    .contactForm {
        width: 100%;
    }
}






</style>
</head>
</html>
