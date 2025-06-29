<x-header />

<section class="contact spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 mx-auto">
                <div class="section-title text-center">
                    <h2>My Order History</h2>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Total Bill</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            <th>View Products</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->bill }}</td>
                                <td>{{ $order->fullname }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#orderModal{{ $order->id }}">
                                        Products
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modalLabel{{ $order->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel{{ $order->id }}">Products in
                                                        Order #{{ $order->id }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($items as $product)
                                                                @if ($product->orderId == $order->id)
                                                                    <tr>
                                                                        <td>
                                                                            <img src="{{ asset('uploads/products/' . $product->picture) }}"
                                                                                width="50" alt="">
                                                                            {{ $product->title }}
                                                                        </td>
                                                                        <td>{{ $product->quantity }}</td>
                                                                        <td>{{ $product->price }}</td>
                                                                        <td>{{ $product->quantity * $product->price }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

<x-footer />