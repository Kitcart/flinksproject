@extends('admin.master_layout')
@section('title')
<title>{{__('admin.Refund Request')}}</title>
@endsection
@section('admin-content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{__('admin.Refund Request')}}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{__('admin.Dashboard')}}</a></div>
              <div class="breadcrumb-item">{{__('admin.Refund Request')}}</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive table-invoice">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th >{{__('admin.SN')}}</th>
                                    <th >{{__('admin.Client')}}</th>
                                    <th >{{__('admin.Total Amount')}}</th>
                                    <th >{{__('admin.Order Id')}}</th>
                                    <th >{{__('admin.Status')}}</th>
                                    <th >{{__('admin.Action')}}</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($refundRequests as $index => $refundRequest)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>
                                            <a href="{{ route('admin.customer-show', $refundRequest->client_id) }}">{{ $refundRequest->client->name }}</a>
                                        </td>
                                        <td>{{ $currency_icon->icon }}{{ $refundRequest->order->total_amount }}</td>
                                        <td>{{ $refundRequest->order->order_id }}</td>

                                        <td>
                                            @if ($refundRequest->status == 'awaiting_for_admin_approval')
                                                    {{__('admin.awaiting for admin approval')}}
                                                @elseif ($refundRequest->status == 'decliened_by_admin')
                                                    {{__('admin.Decliened by admin')}}
                                                @else
                                                    {{__('admin.Complete')}}
                                                @endif
                                        </td>
                                        <td>

                                        <a href="{{ route('admin.booking-show',$refundRequest->order->order_id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </tr>
                                  @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
      </div>

      <script>
        function deleteData(id){
            $("#deleteForm").attr("action",'{{ url("admin/delete-provider-withdraw/") }}'+"/"+id)
        }
    </script>
@endsection
