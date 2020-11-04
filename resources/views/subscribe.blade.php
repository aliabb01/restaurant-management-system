<!-- Subscribe Modal -->
<div class="subscribe-div">

    <div class="text-center">
        <button type="button" class="btn btn-subscribe" style="background-color:red; " data-toggle="modal" data-target="#subscribeModal">Subscribe
            to
            get
            mails
            from us
        </button>
    </div>

    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribeModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Enter your email:</label>
                            <input type="email" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>By confirming you give consent for getting promotional emails from us time to
                        time</small>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Confirm</button>
                </div>
            </div>
        </div>
    </div>

</div>