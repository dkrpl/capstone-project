@extends('layouts.main')

@section('content')
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Device
                                <a href="{{ route('devices.create') }}" class="btn btn-primary float-end">Tambah Data</a>
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
                                            <td>
                                                <a href="{{ route('devices.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('devices.destroy', $d->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection
