<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 contact-header">
            <h1>Contact details for GnarlySunset</h1>
        </div>        
    </div>
    <row>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-left">
            <h3>Have you thought about contacting GnarlySunset.com?<br>
                Listed below are some methods to contact the site.</h3>
            <h4>Email</h4>
            <p>Email is generally the preferred way of contacting the author of this site.
                There is a feedback link on every page on this site so please use that link for comments, questions or feedback.
                You could also use the address webmaster@GnarlySunset.com for general queries.
                About 90 percent of incoming emails are answered within one week, 
                if you have not received a reply within two weeks, please resend the message. 
                Note that support for this site is limited therefore we might not be able to help with special queries.</p>
            <h4>Mail</h4>
            <p>You can contact Time and Date AS at this address. However, email is preferred.</p>
            <p class="margin-top-30">                
            <p>GnarlySunset</p>
            <p>PO Box 27 Forus</p>
            <p>NO-4064 Stavanger</p>
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-right">
            <h3>Send a message:</h3>
            <form role="form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="reason">Reason</label>
                    <select name="reason" class="form-control" id="reason">
                        <option>General</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                </div>
                <button type="submit" class="btn">SEND MESSAGE</button>
            </form>
        </div>
    </row>
</div>

<?php require 'footer.php'; ?>