


<form action="{{ route('email') }}" method="POST" class="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="email_body" placeholder="Enter your message here..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
</form>