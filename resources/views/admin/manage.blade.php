@extends("layouts.backend_layout")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Joined Users</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle" style="min-width: 400px;">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">User name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total downloads</th>
                                        <th scope="col">Created date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>David</td>
                                        <td>david@gmail.com</td>
                                        <td>2123</td>
                                        <td>2020/1/02</td>
                                        <td>
                                           <span>
                                              <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                 data-placement="top" title="" data-original-title="Edit"><i
                                                 class="fa fa-pencil color-muted"></i> </a>
                                              <a href="javascript:void()" data-toggle="tooltip"
                                                 data-placement="top" title="" data-original-title="Close"><i
                                              class="fa fa-close color-danger"></i></a>
                                           </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection