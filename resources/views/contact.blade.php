<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Contact Us Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https;//stachpath.bootstrapcd.com/font-awesome/4.7.0.css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PV1QNHSoD2xbE+QKPxCAFINEevoEH3S10siVcQVnN" crossorigin="anonymous">

    @include('contactcss')

    <style>
        h3{
            style="color: var(--black);"
        }

        p{
            font-size: 20px;
        }


    </style>
</head>
@include('header')
<section class="contact" style="background-color: rgba(0, 0, 0, 0.589)">
    <div class="content">
        <h2>Contact Us</h2>
        <p> We are lloking forward to your feedback and ready to
            answer any questions you might of about our company
        </p>
    </div>

    <div class="container">
        <div class="contactInfo">
            <div class="box">
            <div class="icons">
                <div class="icon"><i class="las la-user-circle" aria-hidden="tru"></i></div>
                <div class="text">
                <h3> Address </h3>
                <p>1676 sugar Camp Road,<br>Lilchris,f truuu<br>467784</p>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                <div class="icon"><i class="las la-user-circle" aria-hidden="tru"></i></div>
                <div class="text">
                <h3> Phone</h3>
                <p>123-4673-784</p>
                </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                <div class="icon"><i class="las la-user-circle" aria-hidden="tru"></i></div>
                <div class="text">
                <h3> Email</h3>
                <p>lilchris@gmail.com</p>
                </div>
               </div>
            </div>
        </div>
    </div>

    <div class="contactForm">
        <form method="POST" action="{{ route('booking.custom') }}">

            {{ csrf_field() }}
            <h2>Send Message</h2>
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>Full Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email" required="required">
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input type="text" name="phone" required="required">
                <span>Phone</span>
            </div>
            <div class="inputBox">
                <input type="text" name="subject" required="required">
                <span>Subject</span>
            </div>
            <div class="inputBox">
                <textarea required="required" name="message"></textarea>
                <span>type your Message...</span>
            </div>
            <div class="inputBox" style="background-color: rgba(255, 255, 255, 0.452);">
                <input type="submit">
            </div>
        </form>
    </div>

</section>

@include('javascript')
</body>
</html>
