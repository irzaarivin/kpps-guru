@csrf
<div class="mb-3">
    <label for="setting-input-1" class="form-label">Nama Lengkap</label>
    <input type="text" name="name" class="form-control" id="setting-input-1" value="{{ auth()->user()->name }}" readonly>
</div>
<div class="mb-3">
    <label for="setting-input-2" class="form-label">Alamat Email</label>
    <input type="text" name="email" class="form-control" id="setting-input-2" value="{{ auth()->user()->email }}" readonly>
</div>
<div class="mb-3">
    <label for="setting-input-3" class="form-label">NIKKI</label>
    <input type="text" name="nikki" class="form-control" id="setting-input-3" value="{{ auth()->user()->nikki }}">
</div>
<button type="submit" class="btn app-btn-primary">Simpan Perubahan</button>