@extends('admin.layout.master')
@section('title', 'Event List | Admin')
@section('breadcrumb')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form action="/admin/event/list" role="search" class="sr-input-func" method="get" name="search-form">
                                        <input type="search" name="keyword" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">List</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
@endsection
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="product-status-wrap drp-lst">
                            <h4>Event list</h4>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="asset-inner">
                                <table class="table-mailbox">
                                    <tr>
                                        <th data-field="id"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Event name</th>
                                        <th data-field="email" data-editable="true">Band names</th>
                                        <th data-field="phone" data-editable="true">Start date</th>
                                        <th data-field="complete">End date</th>
                                        <th data-field="task" data-editable="true">Portfolio</th>
                                        <th data-field="date" data-editable="true">Ticket price</th>
                                        <th data-field="price" data-editable="true">Status</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                    @foreach($datas as $data)
                                        <tr>
                                            @php
                                                $s_date = \Carbon\Carbon::parse()
                                            @endphp
                                            <td><input type="checkbox"></td>
                                            <td>{{ $data['id'] }}</td>
                                            <td>{{ $data['event_name'] }}</td>
                                            <td>{{ $data['band_names'] }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data['start_date'])->format('d/m/Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data['end_date'])->format('d/m/Y') }}</td>
                                            <td>{{ $data['portfolio'] }}</td>
                                            <td>{{ $data['ticket_price'] }}</td>
                                            <td>{{ $data['status'] }}</td>
                                            <td>
                                                <a href="/admin/event/detail?id={{ $data['id'] }}">
                                                    <button data-toggle="tooltip" title="Detail"
                                                            class="pd-setting-ed"><i class="fa fa-info"
                                                                                     aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/event/edit?id={{ $data['id'] }}">
                                                    <button data-toggle="tooltip" title="Edit"
                                                            class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                                                     aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/event/delete?id={{ $data['id'] }}">
                                                    <button data-toggle="tooltip" title="Trash"
                                                            class="pd-setting-ed"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="col-12 col-md-4"></div>
                                <div class="col-12 col-md-8">
                                    @include('pagination.default', ['paginator' => $datas])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

