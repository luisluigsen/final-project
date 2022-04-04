<div class="row">
            <div class="col-md-4  pt-0 mb-3">
                <div class="card bg-success bg-gradient">
                    <div class="card-header">
                        <h1>Sign in</h1>
                    </div>
                    <div class="card-body bg-white bg-opacity-50">
                        <form action="<?=base_url ?>User/login" method="POST">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="email" class="form-control" name="email" id="name" aria-describedby="emailHelpId" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="mb3">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                        <br />
                        <br />
                    </div>
                </div>
            </div>