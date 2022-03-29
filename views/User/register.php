<h1 class="text-white">Join us</h1>

<div class="containerFORM text-white">
    <form class="row g-3" action="<?=base_url?>User/save" method="POST">
        <div class="col-md-6">
            <label for="name" class="form-label">First Name</label>
            <input type="text" class="form-control is-invalid" name="name" id="formName" aria-describedby="descriptionName" required>
            <div id="descriptionName" class="invalid-feedback">
                Please enter a correct Name
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control is-invalid" name="lastname" id="formLastName" aria-describedby="descriptionLastName" required>
            <div id="descriptionLastName" class="invalid-feedback">
                Please enter a correct Last name
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <div class="input-group has-validation">
                <input type="email" class="form-control is-invalid" name="email" id="emailValidation" aria-describedby="descriptionEmail" required>
                <div id="descriptionEmail" class="invalid-feedback">
                    Please enter a correct Email
                </div>
                <div id="descriptionEmail" class="valid-feedback">
                    looks good!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <div class="input-group has-validation">
                <input type="password" class="form-control is-invalid" name="password" id="passwordValidation" aria-describedby="descriptionPassword" required>
                <div id="descriptionPassword" class="invalid-feedback">
                    Please enter a correct Password
                </div>
                <div id="descriptionPassword" class="valid-feedback">
                    looks good!
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit" value="Register">Submit</button>
        </div>
    </form>
</div>