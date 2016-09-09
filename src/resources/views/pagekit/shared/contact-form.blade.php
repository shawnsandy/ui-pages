<form id="contact-form" action="/page/send/mail" method="post">
    {{ csrf_field() }}
    <p>
        {{--<label for="full_name">Your Name</label>--}}
        <input type="text" name="full_name" class="form-control" placeholder="Enter your name">
    </p>
    <p>
        {{--<label for="email">Email</label>--}}
        <input type="email" name="email" class="form-control" placeholder="Email address">
    </p>
    <p>
        {{--<label for="subject">Subject</label>--}}
        <input type="text" name="subject" class="form-control" placeholder="Subject">
    </p>
    <p>
        {{--<label for="subject">Message</label>--}}

        <textarea name="message" id="subject" cols="30" rows="8" class="form-control" placeholder="Message"></textarea>
    </p>
    <p class="text-right">
        <button class="btn btn-success text-capitalize" type="submit">Send And Lets Talk</button>
    </p>
</form>
