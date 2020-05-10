@extends("layouts.backend_layout")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card forms-card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Update Credential</h4>
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <label for="validationDefaultUsername10" class="text-label">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend2"> <i
                                                            class="fa fa-user" aria-hidden="true"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="validationDefaultUsername10"
                                                   placeholder="Username" aria-describedby="inputGroupPrepend2"
                                                   required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationDefaultUsername10" class="text-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend2">
                                                    <i class="mdi mdi-email-outline"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="User Email"
                                                   required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Password*</label>
                                        <div class="input-group transparent-append">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3"> <i
                                                            class="fa fa-lock" aria-hidden="true"></i> </span>
                                            </div>
                                            <input type="password" class="form-control" id="validationDefaultUsername11"
                                                   placeholder="Password" aria-describedby="inputGroupPrepend3"
                                                   required="">
                                            <div class="input-group-append c-pointer">
                                                <span class="input-group-text" id="inputGroupPrepend4"> <i
                                                            class="fa fa-eye-slash" aria-hidden="true"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input styled-checkbox" type="checkbox"
                                                   id="inlineFormCheck09">
                                            <label class="form-check-label mr-sm-5" for="inlineFormCheck09">Check me
                                                out</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-form">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection