<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class HargaProduk extends Component
{
    public function __construct(
        public int $nilai,
        public bool $diskon = false
    ) {}

    public function format(): string
    {
        $harga = $this->diskon
            ? $this->nilai * 0.9
            : $this->nilai;

        return 'Rp ' . number_format($harga, 0, ',', '.');
    }

    public function render(): View
    {
        return view('components.harga-produk');
    }
}
