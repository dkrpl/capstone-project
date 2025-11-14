@extends('layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-plus me-1"></i>
        Edit Device
    </div>
    <div class="card-body">
        <form action = "{{ route ('devices.update', $devices->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="uuid" class="form-label">UUID</label>
                <input type="text" class="form-control" id="uuid" name="uuid" value="{{ $devices->uuid }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_device" class="form-label">Nama Device</label>
                <input type="text" class="form-control" id="nama_device" name="nama_device" value="{{ $devices->nama_device }}" required>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $devices->lokasi }}" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="aktif" {{ $devices->status=='aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ $devices->status=='nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection
