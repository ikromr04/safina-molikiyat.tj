@extends('layouts.app')

@section('content')
  <main class="flex flex-col text-khaki">
    <x-blocks.about />

    <x-blocks.renters />

    <x-blocks.owners />

    <x-blocks.brokers />

    {{-- <div class="relative z-0 h-[100px] overflow-hidden bg-center bg-[url('/public/images/pattern.svg')] after:absolute after:top-0 after:left-0 after:z-10 after:w-full after:h-full after:bg-[linear-gradient(to_bottom,#1f2937_0,transparent_50%,#1f2937_100%)] md:h-[220px] md:bg-[length:34px_auto] xl:h-[380px] xl:bg-[length:42px_auto] xl:mb-[88px] 2xl:bg-[length:52px_auto]"></div> --}}

    <x-forms.contact />
  </main>
@endsection
