@extends('layouts/mainuser',['selected' => 'news'])
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

    #example1_filter {
        float: right;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title float-left">Danh sách các đơn hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>Tên sản phẩm(Link Order)</th>
                                        <th>Địa chỉ ship</th>
                                        <th>Số lượng cần mua</th>
                                        <th>Ngày lên đơn</th>
                                        <th style="width: 200px"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
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
</div>

@endsection
@section('js')
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
{{--    swal--}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    let DT, total, check = 1;
        $(function () {
            if ($info.permission != 1) {
                window.location = "login";
            }
            DT = $("#example1").DataTable({
                "autoWidth": false,
                "bSort": false,
                "pageLength": 10,
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
        function loaddon() {
            total = 0;
            $.ajax({
                url: 'http://45.76.153.75:403/api/getorderbystatus',
                type: 'post',
                data: {
                    token: $info['token'],
                    status: 0
                },
                success: function (data) {
                    $data = data.data;
                    console.log($data);
                    $.each($data, function (index, value) {
                        $temp = "";
                        if (value.realquantity != 0) {
                            $temp = "<div style=\"text-align: center\"><button type=\"button\" class=\"btn btn-sm btn-primary btn-detail mr-1\" data-data='" + JSON.stringify(value) + "' data-toggle=\"modal\"  data-target=\"#modal-xl-detail\"><i class=\"far fa-eye\"></i></button><button type=\"button\" class=\"btn btn-sm btn-warning btn-order text-white mr-1\" data-data='" + JSON.stringify(value) + "' data-toggle=\"modal\"  data-target=\"#modal-xl-order\"><i class=\"far fa-edit\"></i></button></div>"
                        } else {
                            $temp = "<div class='text-center'><button type=\"button\" class=\"btn btn-sm btn-primary btn-detail mr-1\" data-data='" + JSON.stringify(value) + "' data-toggle=\"modal\"  data-target=\"#modal-xl-detail\"><i class=\"far fa-eye\"></i></button><small class=\"badge p-1 badge-success\">Done!</small></div>"
                        }
                        total += value.pay_price;
                        DT.row.add([
                            value.nameProduct + "<br>" + "<a href='" + value.linkOrder + "'>" + value.linkOrder + "</td>",
                            "<div class='text-center'>" + value.address_ship + "</div>",
                            "<div class='text-center'>" + value.realquantity + "/" + value.quantity + "</div>",
                            "<div class='text-center'>" + value.data_order + "</div>",
                            $temp,
                        ]).draw(false);
                    });
                    console.log("a" + total);
                    // toastr["success"](data.message);
                },
                error: function (data) {
                    toastr["error"](data.responseJSON['message']);
                }
            })
        }

        $(document).on('click', '.btn-order', function () {
            $(".linkjp").addClass("d-none");
            $(".linkus").addClass("d-none");
            $data = $(this).data('data');
            $("input[name=link1]").val($data.linkOrder);
            $("input[name=nameProduct1]").val($data.nameProduct);
            $("input[name=price1]").val($data.price);
            $("input[name=size1]").val($data.size);
            $("input[name=quantity1]").val($data.realquantity);
            $("input[name=colorProduct1]").val($data.colorProduct);
            $("input[name=trackDas]").val($data.trackDas);
            $("input[name=trackFedex]").val($data.trackFedex);
            $("input[name=idShiper1]").val($data.nameShiper);
            $("#address_ship1").val($data.address_ship);
            $("input[name=nation1][value=" + $data.nation + "]").attr('checked', 'checked');
            $("input[name=nation1][value=" + $data.nation + "]").attr('disabled', false);
            $(".desimg").attr("src", $data.image);
            $("#id").val($data._id);
            $("input[name=idOrder]").val($data.idOrder);
            $("input[name=email]").val($data.email);
            if ($data.nation == "JP") {
                $(".linkjp").removeClass("d-none");
            } else if ($data.nation == "US" || $data.nation == "GER") {
                $(".linkjp").removeClass("d-none");
                $(".linkus").removeClass("d-none");
            }
        });
        $("#done").keyup(function () {
            $task = parseInt($("#quantity1").val());
            $done = parseInt($(this).val());
            if ($done > $task) {
                $(this).addClass("is-invalid");
                check = 0;
            } else {
                $(this).removeClass("is-invalid");
                check = 1;
            }
        });
        $(".btn-submitedit").click(function (e) {
            e.preventDefault();
            $trackDas = $("input[name=trackDas]").val();
            $trackFedex = $("input[name=trackFedex]").val();
            $idOrder = $("input[name=idOrder]").val();
            $token = $info['token'];
            $email = $("input[name=email]").val();
            $id = $("#id").val();
            if (check == 1) {
                $.ajax({
                    url: 'http://45.76.153.75:403/api/childorder',
                    type: 'post',
                    data:
                        {
                            token: $info['token'],
                            idOrders_mother: $id,
                            idOrder: $idOrder,
                            order_quantity: $("#done").val(),
                            email: $email,
                            trackDas: $trackDas,
                            trackFedex: $trackFedex,
                        },
                    success: function (data) {
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
                                    case "ok":
                                        location.reload();
                                }
                            }, "success");
                    },
                    error: function (data) {
                        // console.log();
                        toastr["error"](data.responseJSON['message']);
                    }
                })
            } else {
                toastr["error"]("Số lượng đã mua không được lớn hơn số lượng đặt hàng");
            }

            // console.log("$trackDas: "+$trackDas+"\n");
            // console.log("$trackFedex: "+$trackFedex+"\n");
            // console.log("$idOrder: "+$idOrder+"\n");
            // console.log("$token: "+$token+"\n");
            // console.log("$email: "+$email+"\n");
            // console.log("$id: "+$id+"\n");
            // return;

        });
        $(document).on('click', '.btn-detail', function () {
            $data = $(this).data('data');
            $.ajax({
                url: "http://45.76.153.75:403/api/getbyidorder",
                type: "post",
                data: {
                    token: $info['token'],
                    idOrders_mother: $data._id
                }
                , success: function (data) {
                    $child = (data.data_child);
                    // console.log($child);
                    $a = "";
                    $.each($child, function (key, value) {
                        $a += "<tr>\n" +
                            "                                        <td>" + value.email + "</td>\n" +
                            "                                        <td>" + value.idOrder + "</td>\n" +
                            "                                        <td>" + value.order_quantity + "</td>\n" +
                            "                                        <td> <a href=" + value.trackFedex + ">" + value.trackFedex + "</td>\n" +
                            "                                        <td> " + value.data_order + "</td>\n" +
                            "                                    </tr>";
                    });
                    $("#modal-xl-detail tbody tr").remove();
                    $("#modal-xl-detail tbody").append($a);
                }
            })
        });
</script>
@endsection