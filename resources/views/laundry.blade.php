@extends('layouts.app')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Progress Laundry </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laundries as $laundry)
                    <tr>
                        <td>{{$laundry->customer_name}}</td>
                        <td>
                            <div class="">
                                <span>
                                   Dibuat pada {{$laundry->created_at}}
                                </span>
                                <span>
                                   Selesai pada {{$laundry->finish_date}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="">
                                <span>
                                   status bayar {{$laundry->laundry_payment_statuses_id}}
                                </span>
                                <span>
                                   status progres {{$laundry->laundry_progress_statuses_id}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="">
                                <span>
                                   Harga : {{$laundry->sub_price}} x {{$laundry->total_unit}}
                                </span>
                                <span>
                                   total bayar =  {{$laundry->total_price}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection


