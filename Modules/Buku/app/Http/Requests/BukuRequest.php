<?php

namespace Modules\Buku\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'judul' => ['required', 'string', 'max:255'],
            'penulis' => ['required', 'string', 'max:255'],
            'penerbit' => ['required', 'string', 'max:255'],
            'tahun_terbit' => ['required', 'integer', 'between:1900,'.date('Y')],
            'stok' => ['required', 'integer', 'min:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'tahun_terbit.between' => 'Tahun terbit harus antara 1900 dan '.date('Y').'.',
            'stok.min' => 'Stok tidak boleh negatif.',
        ];
    }

    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }
}