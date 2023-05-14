@extends('admin.master')
@section('title', "Khách hàng")
@section('style')
<style>

</style>
@endsection
@section('content')
            <!-- Title -->
            <h1 class="h2">
                Khách hàng
            </h1>
            <div class="row">
                <div class="col">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100"
                        data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}'
                        id="users">
                        <div class="card-header border-0 card-header-space-between">
                            <!-- Fillter -->
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-2">
                                    
                                    <input type="number" class="form-control" id="id" placeholder="#001">
                                </div>
                                <div class="col-md-3">
                                  
                                    <input type="text" class="form-control" id="username" placeholder="Nguyễn Văn A">
                                </div>
                                <div class="col-md-3">
                                   
                                    <input type="text" class="form-control" id="email" placeholder="domain@gmail.com">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success col-12" type="submit">Lọc</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger col-12" type="submit">Hủy</button>
                                </div>
                            </form>
                            
                           
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table align-middle table-edge table-hover table-nowrap mb-5 mt-5">
                                <thead class="thead-light">
                                    <tr>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="id">
                                                Mã khách hàng
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="username">
                                                Tên đăng nhập
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="email">
                                                Email
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="ip">
                                                IP
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                      
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="list">
                                    @foreach( $data as $item)
                                    <tr>
                                        <td class="id">#{{ $item->id }}</td>
                                        <td class="username">{{ $item->username }}</td>
                                        <td class="email" >{{ $item->email }}</td>
                                        <td class="ip" >{{ $item->ip }}</td>
                                        <td class="status" >
                                            <div class="dropdown ms-4">
                                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14"
                                                        width="14">
                                                        <g>
                                                            <circle cx="12" cy="3.25" r="3.25"
                                                                style="fill: currentColor" />
                                                            <circle cx="12" cy="12" r="3.25"
                                                                style="fill: currentColor" />
                                                            <circle cx="12" cy="20.75" r="3.25"
                                                                style="fill: currentColor" />
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="javascript: void(0);" class="dropdown-item">
                                                        Export report
                                                    </a>
                                                    <a href="javascript: void(0);" class="dropdown-item">
                                                        Share
                                                    </a>
                                                    <a href="javascript: void(0);" class="dropdown-item">
                                                        Action
                                                    </a>
                                                </div>
                                            </div>
                                        </td>   
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-5 text-secondary small">
                                    Showing: <span class="list-pagination-page-first"></span> - <span
                                        class="list-pagination-page-last"></span> of <span
                                        class="list-pagination-pages"></span>
                                </div>

                                <!-- Pagination -->
                                <ul class="pagination list-pagination mb-0"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
@endsection
@section('javascript')

@endsection