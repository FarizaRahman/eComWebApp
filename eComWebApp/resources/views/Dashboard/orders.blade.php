<x-adminheader title="Orders" />
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">



        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Our Orders</p>



                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        {{-- <th>Email</th>
                                        <th>Customer Status</th>--}}
                                        <th>Bill</th>
                                        <th>Phone#</th>
                                        <th>Address</th>
                                        <th>Order Status</th>
                                        <th>Order Date</th>
                                        <th>
                                            Products
                                        </th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp

                                @foreach($orders as $item)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{$item->fullname}}</td>
                                        {{--<td>{{$item->email}}</td>
                                        <td class="text-info">{{$item->userStatus}}</td>--}}

                                        <td class="font-weight-bold">${{$item->bill}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->address}}</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">{{$item->status}}</div>
                                        </td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-info">{{$item->created_at}}</div>
                                        </td>
                                        <td class="font-weight-medium">

                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#updateModel{{$i}}">
                                                Products
                                            </button>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="updateModel{{$i}}" tabindex="-1" role="dialog"
                                                aria-labelledby="modalLabel{{$i}}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel{{$i}}">Order Products
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            <table class="table table-bordered table-striped">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th>Product</th>
                                                                        <th>Picture</th>
                                                                        <th>Price/Item</th>
                                                                        <th>Quantity</th>
                                                                        <th>Sub Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($orderItems as $oItem)
                                                                        @if ($oItem->orderId == $item->id)
                                                                            <tr>
                                                                                <td>{{ $oItem->title }}</td>
                                                                                <td>
                                                                                    <img src="{{ asset('uploads/products/' . $oItem->picture) }}"
                                                                                        width="100" alt="Product Image">
                                                                                </td>
                                                                                <td>${{ number_format($oItem->price, 2) }}</td>
                                                                                <td>{{ $oItem->quantity }}</td>
                                                                                <td>${{ number_format($oItem->price * $oItem->quantity, 2) }}
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            @if ($item->status == 'Paid')
                                                <a href="{{URL::to('changeOrderStatus/Accepted/' . $item->id)}}"
                                                    class="btn btn-success">Accept</a>
                                                <a href="{{URL::to('changeOrderStatus/Rejected/' . $item->id)}}"
                                                    class="btn btn-danger">Reject</a>
                                            @elseif ($item->status == 'Accepted')
                                                <a href="{{ route('changeOrderStatus', ['status' => 'Delivered', 'id' => $item->id]) }}"
                                                    class="btn btn-success">Completed</a>

                                            @elseif ($item->status == 'Delivered')
                                                Already Completed

                                            @else
                                                <a href="{{ route('changeOrderStatus', ['status' => 'Accepted', 'id' => $item->id]) }}"
                                                    class="btn btn-success">Accept</a>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <x-adminfooter />