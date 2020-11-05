@extends('layouts/main',['selected' => 'news'])
@section('title')
Danh sách hóa đơn
@endsection
@section("css")
<style>
    .text-center {
        text-align: center;
    }

    table th:first-child {
        /*border-color: white !important;*/
        border-radius: 10px 0 0 0;
    }

    table th:last-child {
        border-radius: 0 10px 0 0;
        /*border-color: white !important;*/
    }

    .table-hover tbody tr:hover td,
    .table-hover tbody tr:hover th {
        background-color: #ffe4e1;
    }

    table tr:last-child {
        border-radius: 0 10px 0 0;
        border-color: white !important;
    }

    .table thead th {
        vertical-align: unset !important;
        border: none !important;
    }

    table {
        border-bottom: #f6546a 1px solid !important;
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 95%;
        }
    }

    .dataTables_filter input {
        border: 1px solid black;
        border-radius: 3px;
        padding: 5px;
        background-color: transparent;
        margin-left: 3px;
    }
</style>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thống kê</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>3</h3>
                            <p>Đang chờ xử lý</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>3<sup style="font-size: 20px">%</sup></h3>
                            <p>Tỉ lệ đơn hoàn thành</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>3</h3>
                            <p>Người dùng mới</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>3<sup style="font-size: 20px">%</sup></h3>
                            <p>Tỉ lệ hủy hoàn thành</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title float-left">Danh sách các đơn hàng</h3>
                            <div class="col-md-2" style="left: 0;right: 0;margin: auto;">
                                <div class="form-group m-0">
                                    <select class="form-control" id="checkstatusOrder">
                                        <option value="0">Chờ khách check đơn</option>
                                        <option value="1">Đã gửi hàng</option>
                                        <option value="2">Đang vận chuyển</option>
                                        <option value="3">Đã nhận</option>
                                        <option value="4">Hủy đơn</option>
                                        <option value="5">Đã thanh toán</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="model-add-order" class="btn btn-success btn-sm float-right"
                                    data-toggle="modal" data-target="#modal-xl-add">Thêm mới</button>
                            </div>
                        </div>
                        <modal-body></modal-body>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table  table-hover">
                                <thead style="background-color: #f6546a;color: white" class="rounded-right">
                                    <tr style="text-align: center">
                                        <th class="">Tên sản phẩm(Link Order)</th>
                                        <th>Số lượng</th>
                                        <th>Cần mua</th>
                                        <th>Địa chỉ ship</th>
                                        <th>Ngày lên đơn</th>
                                        <th>Shiper</th>
                                        <th style="width: 95px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            {{-- <ul class="pagination pagination-sm" style="float: right;">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul> --}}
                            <div class="demo" style="float:right;">
                                <ul id="custom-paginate" class="pagination-sm">

                                </ul>
                            </div>
                            <div style="text-align: right " class="col-md-12 d-none">
                                <b>Tổng tiền cần thanh toán:</b> <span class="total">#</span> $
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.model edit order -->
    <div class="modal fade" id="modal-xl-order">
        <div class="modal-dialog modal-md" style="max-width: 1111px !important;">
            <form class="modal-content" name="add-category">
                <div class="modal-header">
                    <h4 class="modal-title">Chi tiết order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="nation">Quốc gia</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="JP1" value="JP"
                                            name="nation1" />
                                        <label for="JP1" class="custom-control-label">JP</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" id="US1" type="radio" value="US"
                                            name="nation1" />
                                        <label for="US1" class="custom-control-label">US</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" id="DE1" type="radio" value="DE"
                                            name="nation1" />
                                        <label for="US1" class="custom-control-label">US</label>
                                    </div>
                                </div>
                                <label for="link">Link sản phẩm</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control" disabled id="link1" name="link1"
                                    placeholder="Link sản phẩm" required />
                            </div>
                            <div class="form-group">
                                <label for="nameProduct">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="nameProduct1" name="nameProduct1"
                                    placeholder="Tên sản phẩm sẽ tự load" disabled required />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Giá sản phẩm</label>
                                        <input type="text" class="form-control" disabled id="price1" name="price1"
                                            placeholder="Giá sản phẩm sẽ tự load" required />
                                        {{--                                            <input type="text" class="pay_price">--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pay_price3">Giá ship</label>
                                        <input type="text" class="form-control" disabled id="pay_price3"
                                            name="pay_price3" placeholder="Giá sản phẩm sẽ tự load" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <input type="text" class="form-control" id="size1" name="size1" disabled
                                            placeholder="Size" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="quantity"> Số lượng</label> <span class="text-danger">*</span>
                                        <input type="number" class="form-control" id="quantity1" name="quantity1"
                                            placeholder="Số lượng" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="colorProduct">Màu</label>
                                        <input type="text" class="form-control" id="colorProduct1" disabled
                                            name="colorProduct1" placeholder="Có thể trống" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address_ship1">Địa chỉ ship</label> <span
                                            class="text-danger">*</span>
                                        <input type="text" class="form-control" id="address_ship1" name="address_ship1"
                                            placeholder="Địa chỉ ship" required />
                                    </div>
                                </div>

                                <input type="hidden" id="id" />
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="position-relative divdesimg">
                                <img style="height: 440px" class="form-control desimg" src="../default.png">
                            </div>
                            <div class="form-group">
                                <label for="idShiper1">Shiper</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control" id="idShiper1" name="idShiper1" disabled
                                    placeholder="Nếu chưa có shiper nhận sẽ thấy dòng này" />

                            </div>

                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-submitedit">Sửa đơn</button>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- model add order -->
<div class="modal fade" id="modal-xl-add">
    <div class="modal-dialog modal-lg">
        <!-- /.modal-content -->
        <form class="modal-content" name="add-service">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Tạo hóa đơn</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="nation">Quốc gia</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="JP" value="JP" name="nation" />
                                    <label for="JP" class="custom-control-label">JP (Japan)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="US" value="US" name="nation" />
                                    <label for="US" class="custom-control-label">US (United States)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="GER" value="GER"
                                        name="nation" />
                                    <label for="GER" class="custom-control-label">GER (Germany)</label>
                                </div>
                            </div>
                            <label for="link">Link sản phẩm</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" maxlength="255" disabled id="link" name="link"
                                placeholder="Link sản phẩm" required />
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Tên sản phẩm</label>
                            <input type="text" class="form-control" maxlength="255" id="nameProduct" name="nameProduct"
                                placeholder="Tên sản phẩm sẽ tự load" disabled required />
                        </div>
                        <div class="form-group">
                            <label for="price">Giá sản phẩm</label>
                            <input type="number" min="0" class="form-control" disabled id="price" name="price"
                                placeholder="Giá sản phẩm sẽ tự load" required />
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" class="form-control" maxlength="255" id="size" name="size"
                                placeholder="Size" />
                        </div>
                        <div class="form-group">
                            <label for="quantity"> Số lượng</label> <span class="text-danger">*</span>
                            <input type="number" class="form-control" min="1" max="20000000" id="quantity"
                                name="quantity" placeholder="Số lượng" required />
                        </div>
                        <div class="form-group">
                            <label for="colorProduct">Màu</label>
                            <input type="text" class="form-control" maxlength="255" id="colorProduct"
                                name="colorProduct" placeholder="Màu" />
                        </div>

                    </div>
                    <div class="col-md-8">
                        <label for="name">Hình ảnh</label>
                        <div class="position-relative divdesimg">
                            <img style="height: 408px" class="form-control desimg" src="../default.png">
                        </div>
                        <div class="form-group" style="margin-top: 25px;">
                            <label for="idShiper">Shiper</label> <span class="text-danger">*</span>
                            <div class="row">
                                <div class="col-md-12">
                                    <select id="inputState" class="form-control">
                                    </select>
                                    <input type="hidden" name="nameShip">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address_ship">Địa chỉ ship</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" id="address_ship" name="address_ship"
                                placeholder="Địa chỉ ship" required />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-submit">Tạo đơn</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
</div>

<!-- /.modal-order-detail -->
<div class="modal fade" id="modal-xl-detail">
    <div class="modal-dialog modal-xl">
        <form class="modal-content" name="order-detail">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Chi tiết hóa đơn</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>ID Order</th>
                                    <th>Số hàng đặt được</th>
                                    <th>TrackFedex</th>
                                    <th>Thời gian</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{--                    <button type="submit" class="btn btn-primary btn-submit">Tạo đơn</button>--}}
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
</div>
<!-- /.modal-dialog -->

@endsection
@section('js')
<!-- DataTables -->

<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
{{--    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>--}}
{{--    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>--}}
{{--    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>--}}
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
{{--    swal--}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    let DT, total=0, listShip = [];
        $(function () {
            if ($info.permission != 10){
                window.location = "login";
            }
            DT = $("#example1").DataTable({
                // "autoWidth": false,
                "bSort": true,
                "pageLength": 10,
                "paging" : false,
                "language": {
                    "info": "Hiển thị _START_ đến _END_ của _TOTAL_ bản",
                    "lengthMenu": "Hiển thị _MENU_ bản ghi",
                    "paginate": {
                        "first": "Đầu tiên",
                        "last": "Cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    },
                },
            });
            loaddon();

        });

        //load don
        function loaddon(page){
           
            DT.clear().draw(true);
            $statusOrder = $('#checkstatusOrder').val();
            if (page == null) {
                 page = 1;
                 console.log(page);
            }
            //console.log(page);
            $.ajax({
                url     :'http://45.76.153.75:403/api/getorderbystatus?page='+page,
                type    :'post',
                data    : {
                    token :   $info['token'],
                    status:    $statusOrder
                },
                success : function(data){
                    console.log(data);
                    $data = data.data;
                    console.log($data);
                    //console.log(DT);

                    $.each($data, function( index, value ) {
                        $a = "";
                        if(value.realquantity != 0){
                            $a = "<td style=\"text-align: center\"><button type=\"button\" class=\"btn btn-sm btn-primary btn-order-detail mr-1\" data-data='"+JSON.stringify(value)+"' data-toggle=\"modal\"  data-target=\"#modal-xl-detail\"><i class=\"far fa-eye\"></i></button><button type=\"button\" class=\"btn btn-sm btn-warning text-white btn-order mr-1\" data-data='"+JSON.stringify(value)+"' data-toggle=\"modal\"  data-target=\"#modal-xl-order\"><i class=\"far fa-edit\"></i></button><button type=\"button\" class=\"btn btn-sm btn-danger btn-cancelorder\" data-data='"+JSON.stringify(value)+"'  data-data='"+JSON.stringify(value)+"'><i class=\"fas fa-power-off\"></i></button><input type='hidden' class='pay_price11' value='"+(value.pay_price+value.price)+"'></td>"
                        }else{
                            $a = "<td style=\"text-align: center\"><button type=\"button\" class=\"btn btn-sm btn-primary btn-order-detail mr-1\" data-data='"+JSON.stringify(value)+"' data-toggle=\"modal\"  data-target=\"#modal-xl-detail\"><i class=\"far fa-eye\"></i></button><input type='hidden' class='pay_price11' value='"+(value.pay_price+value.price)+"'></td>"
                        }
                        
                        DT.row.add( [
                            value.nameProduct+"<br>"+"<a href='"+value.linkOrder+"'>"+value.linkOrder+"</td>",
                            "<div style='text-align: center'>"+value.quantity+"</div>",
                            "<div style='text-align: center'>"+value.realquantity+"</div>",
                            value.address_ship,
                            value.data_order,
                            ""+value.nameShiper+"",
                            $a,
                           
                        ] ).draw( false );
                    });
                   
                    
                   // console.log(data.meta.totalPage);
                    totalPage = data.meta.totalPage;
                    $("#custom-paginate").twbsPagination({ 
                        totalPages: totalPage,
                        visiblePages: 5,
                        first: 'Đầu',
                        prev: '<<',
                        next: '>>',
                        last: 'Cuối',
                    });
                                
            

                    // $("#custom-paginate").pxpaginate({
                    // currentpage: page,
                    // totalPageCount: totalPage,
                    // maxBtnCount: 7,
                    // nextPrevBtnShow: false,
                    // firstLastBtnShow: false,
                    // prevPageName: '<',
                    // nextPageName: '>',
                    // lastPageName: '<<',
                    // firstPageName: '>>',
                    // callback: function(pagenumber){ 
                    //     page = pagenumber;
                    //     console.log(page);
                    //     loaddon(pagenumber);
                    //     // console.log(page);
                    // }
                    // });

                    totalOrder = data.meta.totalOrder;
                    $('#example1_info').html("Hiển thị 1 đến 10 của "+ totalOrder + " bản")
                },
                error   : function(){
                    toastr["error"]("Lỗi");
                }
                
            })
           
        }
        // $("#custom-paginate").on("click",".page-item", function() {
        //     alert("success");
        // });
        $(document).on('click', '.page-item', function(){
            console.log($(this).children('a').text());
            //page = $(this).children('a').text();
            page = $('#custom-paginate').find('.active').children('a').text();
            loaddon(page);
            
        });
             

        $('#example1').on('search.dt', function() {
                $.each($(".pay_price11"),function(){
                    total += parseFloat($(this).val());
                });
                $(".total").text(total);
        });

        $("#checkstatusOrder").change(function(){
            if ($(this).val()=="2"){
            }
           loaddon();
        });

        //link enter
        var _changeInterval = null;
        $("#link").keyup(function() {
            console.log("wait I am still typing, clear my previous Interval, If any exists")
            // wait untill user type in something
            // Don't let call setInterval - clear it, user is still typing
            clearInterval(_changeInterval)
            _changeInterval = setInterval(function() {
                console.log("User finished typing, clear interval again. We don;t want to repeat our task for indefinitely")
                // Typing finished, now you can Do whatever after 2 sec
                clearInterval(_changeInterval)
                console.log("now search")
                if($("input[name=nation]:checked").val() == "JP"){
                    $link = $("input[name=link]").val();
                    $water=    '<div class="position-absolute d-flex align-items-center water w-100 h-100" style="top: 0;text-align: center;background-color: #343a40a1"><div class="w-100" style="text-align: center"><img src="../loading.gif" alt=""></div></div>'
                    $('.divdesimg').append($water);
                    $.ajax({
                        url     :'http://45.76.153.75:403/api/getinfojp',
                        type    :'post',
                        data    : {
                            url :   $link,
                        },
                        success : function(data){
                            $("input[name=nameProduct]").val(data.data['name']);
                            $("input[name=price]").val(data.data['price']);
                            $(".desimg").attr("src",data.data['image']);
                            toastr["success"]("Link hợp lệ");
                            $('.water').remove();
                        },
                        error   : function(){
                            toastr["error"]("Link không hợp lệ");
                            $('.water').remove();
                            $("input[name=nameProduct]").val("");
                            $("input[name=price]").val("");
                            $(".desimg").attr("src","data.data['image']");
                        }
                    })
                }else if($("input[name=nation]:checked").val() == "US"){
                    $link = $("input[name=link]").val();
                    $water=    '<div class="position-absolute d-flex align-items-center water w-100 h-100" style="top: 0;text-align: center;background-color: #343a40a1"><div class="w-100" style="text-align: center"><img src="../loading.gif" alt=""></div></div>'
                    $('.divdesimg').append($water);
                    $.ajax({
                        url     :'http://45.76.153.75:403/api/getinfousa',
                        type    :'post',
                        data    : {
                            url :   $link,
                        },
                        success : function(data){
                            $("input[name=nameProduct]").val(data.data['name']);
                            $("input[name=price]").val(data.data['price']);
                            $(".desimg").attr("src",data.data['image']);
                            toastr["success"]("Link hợp lệ");
                            $('.water').remove();
                        },
                        error   : function(){
                            toastr["error"]("Link không hợp lệ");
                            $('.water').remove();
                            $("input[name=nameProduct]").val("");
                            $("input[name=price]").val("");
                            $(".desimg").attr("src","data.data['image']");
                        }
                    })
                }else{
                    $link = $("input[name=link]").val();
                    $water=    '<div class="position-absolute d-flex align-items-center water w-100 h-100" style="top: 0;text-align: center;background-color: #343a40a1"><div class="w-100" style="text-align: center"><img src="../loading.gif" alt=""></div></div>'
                    $('.divdesimg').append($water);
                    $.ajax({
                        url     :'http://45.76.153.75:403/api/getinfoger',
                        type    :'post',
                        data    : {
                            url :   $link,
                        },
                        success : function(data){
                            $("input[name=nameProduct]").val(data.data['name']);
                            $("input[name=price]").val(data.data['price']);
                            $(".desimg").attr("src",data.data['image']);
                            toastr["success"]("Link hợp lệ");
                            $('.water').remove();
                        },
                        error   : function(){
                            toastr["error"]("Link không hợp lệ");
                            $('.water').remove();
                            $("input[name=nameProduct]").val("");
                            $("input[name=price]").val("");
                            $(".desimg").attr("src","data.data['image']");
                        }
                    })
                }
            }, 500);
        });
        //load shiper
        $("input[name=nation]").click(function() {
            clearInterval(_changeInterval)
            _changeInterval = setInterval(function() {
                clearInterval(_changeInterval)
                // console.log("now search")
                $('input[name=link]').attr('disabled',false);
                $('input[name=link]').val('');
                $('input[name=nameProduct]').val('');
                $('input[name=price]').val('');
                $('img.desimg').attr('src','../default.png');
                if($("input[name=nation]:checked").val() == "JP"){
                    $.ajax({
                        url     :'http://45.76.153.75:403/api/getaccbynation',
                        type    :'post',
                        data    : {
                            token :   $info['token'],
                            nation:   "JP"
                        },
                        success : function(data){
                            console.log(data);
                            $shiper = "";
                            $.each(data.data, function (key,value) {
                                $shiper += "<option value='"+value._id+"'>" + value.full_name+"</option>";
                            });
                            $('#inputState').append($shiper);
                            toastr["success"]("Tìm thấy shiper ở khu vực vừa chọn");
                        },
                        error   : function(){
                            toastr["error"]("Lỗi");
                        }
                    })
                }else if($("input[name=nation]:checked").val() == "US"){
                    $.ajax({
                        url     :'http://45.76.153.75:403/api/getaccbynation',
                        type    :'post',
                        data    : {
                            token :   $info['token'],
                            nation:   "US"
                        },
                        success : function(data){
                            // console.log(data.data);
                            $('#inputState option').remove();
                            $shiper = "";
                            $.each(data.data, function (key,value) {
                                $shiper += "<option value='"+value._id+"'>" + value.full_name + ' - ' + value.nation + "</option>";
                            });
                            $('#inputState').append($shiper);

                            toastr["success"]("Tìm thấy shiper ở khu vực vừa chọn");
                        },
                        error   : function(){
                            toastr["error"]("Lỗi");
                        }
                    })
                }else if($("input[name=nation]:checked").val() == "GER"){
                    $.ajax({
                        url     :'http://45.76.153.75:403/api/getaccbynation',
                        type    :'post',
                        data    : {
                            token :   $info['token'],
                            nation:   "GER"
                        },
                        success : function(data){
                            // console.log(data.data);
                            $('#inputState option').remove();
                            $shiper = "";
                            $.each(data.data, function (key,value) {
                                $shiper += "<option value='"+value._id+"'>" + value.full_name + ' - ' + value.nation + "</option>";
                            });
                            $('#inputState').append($shiper);

                            toastr["success"]("Tìm thấy shiper ở khu vực vừa chọn");
                        },
                        error   : function(){
                            toastr["error"]("Lỗi");
                        }
                    })
                }
            }, 500);
        });
        //submit them
        $(".btn-submit").click(function(e){
            e.preventDefault();
            DT = $("#example1").DataTable();
            $soluong = $("input[name=quantity]").val();
            if($soluong < 1){
                toastr['error']("Số lượng phải lớn hơn 0");
                return;
            }
            $nation         = $("input[name=nation]:checked").val();
            $link           = $("input[name=link]").val();
            $size           = $("input[name=size]").val();
            $quantity       = $("input[name=quantity]").val();
            $address_ship   = $("input[name=address_ship]").val();
            $image          = $(".desimg").attr("src");
            $idShiper       = $("#inputState").val();
            $nameProduct    = $("input[name=nameProduct]").val();
            $token          = $info['token'];
            $price          = $("input[name=price]").val();
            $colorProduct   = $("input[name=colorProduct]").val();
            $.ajax({
                url     :'http://45.76.153.75:403/api/bookorder',
                type    :'post',
                data    : {
                    token       :   $info['token'],
                    nation      :   $nation,
                    linkOrder   :   $link,
                    size        :   $size,
                    quantity    :   $quantity,
                    address_ship:   $address_ship,
                    image       :   $image,
                    idShiper    :   $idShiper,
                    nameProduct :   $nameProduct,
                    price       :   $price,
                    colorProduct:   $colorProduct,
                    nameShiper  :   $("#inputState option:selected").text()
                },
                success : function(data){
                    swal(data.message, {
                        icon   : "success",
                        buttons: {
                            catch: {
                                text: "Ok",
                                value: "ok",
                            },
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                case "ok": loaddon();

                            }
                            $('#modal-xl-add').modal('hide');
                            $('form[name=add-service]').trigger('reset');
                            
                        });
                },
                error  : function(data){
                    let value = JSON.parse(JSON.stringify(data));
                    console.log(value.responseJSON.message);
                    toastr["error"](value.responseJSON.message);
                }
            })
        });
        //cancel order
        $(document).on('click','.btn-cancelorder',function(){
            $id = $(this).data('data')._id;
            page  = $('#custom-paginate').children('.selected').text();

            //console.log($page);
           // console.log($('.px-btn').prop('selected', true));
            swal({
                title: "Cảnh báo?",
                text: "Bạn có chắc sẽ cancel order này!",
                icon: "warning",
                buttons: true,
                dangerMode: true,   
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url     :'http://45.76.153.75:403/api/cancelorder',
                            type    :'post',
                            data    : {
                                token       :   $info['token'],
                                _id         :   $id,
                            },
                            success : function(data){
                                swal(data.message, {
                                    icon: "success",
                                    buttons: {
                                        catch: {
                                            text: "Ok",
                                            value: "ok",
                                        },
                                    },
                                })
                                    .then((value) => {
                                        switch (value) {
                                            case "ok": loaddon(page);
                                        }
                                    },"success");
                            },
                            error   : function(){
                                toastr["error"]("Lỗi");
                            }
                        })
                        swal("Cancel thành công!", {
                            icon: "success",
                        });
                    }
                });
        })
        
        //btn--order edit
        $(document).on('click','.btn-order',function(){
            $data = $(this).data('data');
            $("input[name=link1]").val($data.linkOrder);
            $("input[name=nameProduct1]").val($data.nameProduct);
            $("input[name=price1]").val($data.price);
            $("input[name=size1]").val($data.size);
            $("input[name=quantity1]").val($data.quantity);
            $("input[name=colorProduct1]").val($data.colorProduct);
            $("input[name=trackDas]").val($data.trackDas);
            $("input[name=trackFedex]").val($data.trackFedex);
            $("input[name=idShiper1]").val($data.nameShiper);
            $("#address_ship1").val($data.address_ship);
            $("input[name=nation1][value=" + $data.nation + "]").attr('checked', 'checked');
            $(".desimg").attr("src",$data.image);
            $("#id").val($data._id);
            $("#pay_price3").val($data.pay_price);
        });
        //
        $(document).on('click','.btn-order-detail',function(){
            $data = $(this).data('data');
            $.ajax({
                url         : "http://45.76.153.75:403/api/getbyidorder",
                type        : "post",
                data        : {
                    token               : $info['token'],
                    idOrders_mother     : $data._id
                }
                ,success    : function(data){
                    $child = (data.data_child);
                    console.log($child);
                    $a = "";
                    $.each($child,function(key,value){
                        $a += "<tr>\n" +
                            "<td>"+value.email+"</td>\n" +
                            "<td>"+value.idOrder+"</td>"+
                            "<td>"+value.order_quantity+"</td>\n" +
                            "<td><a href="+value.trackFedex+">"+value.trackFedex+"</td>\n" +
                            "<td>"+value.data_order+"</td>\n"
                            "</tr>";
                    });
                    $("#modal-xl-detail tbody tr").remove();
                    $("#modal-xl-detail tbody").append($a);
                }
            })
        });
        $(".btn-submitedit").click(function(e){
            e.preventDefault();
            $quantity       = $("input[name=quantity1]").val();
            $address_ship   = $("#address_ship1").val();
            $id             = $("#id").val();
            $.ajax({
                url     :'http://45.76.153.75:403/api/editorder',
                type    :'post',
                data    : {
                    token       :   $info['token'],
                    _id         :   $id,
                    quantity    :   $quantity,
                    address_ship:   $address_ship
                },
                success : function(data){
                    swal(data.message, {
                        icon: "success",
                        buttons: {
                            catch: {
                                text: "Ok",
                                value: "ok",
                            },
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                case "ok": location.reload();
                            }
                        },"success");
                },
                error   : function(){
                    toastr["error"]("Lỗi");
                }
            })
        });

</script>

@endsection