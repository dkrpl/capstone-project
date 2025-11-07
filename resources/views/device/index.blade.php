@extends('layouts.main')

@section('content')
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Device
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>UUID</th>
                                            <th>Nama Device</th>
                                            <th>Lokasi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($devices as $d)
                                        <tr>
                                            <td>{{ $d->uuid }}</td>
                                            <td>{{ $d->nama_device }}</td>
                                            <td>{{ $d->lokasi }}</td>
                                            <td>{{ $d->status }}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection
