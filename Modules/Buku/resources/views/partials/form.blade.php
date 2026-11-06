@foreach ([
  'judul' => ['Judul', 'text'],
  'penulis' => ['Penulis', 'text'],
  'penerbit' => ['Penerbit', 'text'],
  'tahun_terbit' => ['Tahun Terbit', 'number'],
  'stok' => ['Stok', 'number'],
] as $name => [$label, $type])
  <div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }} <span class="text-danger">*</span></label>
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}"
           value="{{ old($name, $buku?->{$name}) }}" @if ($type === 'number') min="0" @endif required>
    @error($name)
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
@endforeach