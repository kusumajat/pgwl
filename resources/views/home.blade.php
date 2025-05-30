@extends('layouts/template')

@section('content')
<style>
    .terminal-box {
        background-color: #000;
        color: #fff;
        font-family: 'Courier New', Courier, monospace;
        padding: 1.5rem;
        border-radius: 0.75rem;
        max-width: 600px;
        margin: 3rem auto;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }

    .terminal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .terminal-dots {
        display: flex;
        gap: 0.5rem;
    }

    .dot {
        width: 12px;
        height: 12px;
        border-radius: 9999px;
    }

    .dot.red {
        background-color: #f87171;
    }

    .dot.yellow {
        background-color: #facc15;
    }

    .dot.green {
        background-color: #4ade80;
    }

    .terminal-body {
        margin-top: 1.5rem;
    }

    .terminal-line {
        margin-bottom: 0.5rem;
        white-space: pre-line;
    }

    .terminal-line.command {
        color: #4ade80;
    }
</style>

<div class="terminal-box">
    <div class="terminal-header">
        <div class="terminal-dots">
            <div class="dot red"></div>
            <div class="dot yellow"></div>
            <div class="dot green"></div>
        </div>
        <p class="text-sm">praktikum-info</p>
    </div>
    <div class="terminal-body">
        <p class="terminal-line command">$ Informasi Peserta Praktikum</p>
        <p class="terminal-line"><strong>Nama:</strong> Risma Kusumajati</p>
        <p class="terminal-line"><strong>NIM:</strong> 23/518881/SV/23080</p>
        <p class="terminal-line"><strong>Kelas:</strong> A</p>
        <p class="terminal-line"><strong>Praktikum:</strong> Pemrograman Geospasial Web Lanjut</p>
        <p class="terminal-line command">$</p>
    </div>
</div>
@endsection
