<style>
    .btn-sub{
        background-color:var(--primary-blue);
        border:0.1px solid white;
        border-radius:25px;
        color:white;
        transition: 0.3s;
        
    }
    .btn-sub:hover{
        background-color:var(--primary-red);  
        border:0.1px solid var(--primary-red);      
        color:white;
        transition: 0.3s;
    }
</style>

<!-- Subscribe Modal -->
<div class="subscribe-div">

    <div class="text-center">
        <button type="button" class="btn btn-sub" data-toggle="modal" data-target="#subscribeModal">Subscribe
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
                            <input type="email" class="form-control" id="recipient-name" name="email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer ml-3">
                    <small>By confirming you give consent for getting promotional emails from us time to
                        time</small>
                    
                     <a href="/welcome" class="btn btn-danger " data-dismiss="modal"> Confirm</a>
                   
                </div>
            </div>
        </div>
    </div>

</div>