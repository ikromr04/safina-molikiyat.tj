@extends('layouts.app')

@section('content')
  <main class="flex flex-col text-khaki">
    <h1 class="sr-only">Safina Molikiyat</h1>

    <div class="flex flex-col min-h-[calc(100vh-230px)] md:h-auto">
      <div class="relative container z-10 flex mt-auto min-h-40 aspect-[320/240] overflow-hidden md:aspect-[1440/652]">
        <div
          class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 h-full w-auto aspect-[1440/652]"
          id="lottie-container"
        ></div>
      </div>

      <div class="relative flex justify-center pt-14 pb-16 mb-auto md:p-0 md:h-[370px] md:items-center md:-mt-24 md:-mb-11">
        <button
          class="relative z-10 flex items-center uppercase border-none h-7 px-2 rounded-[5px] duration-150 text-xs text-onyx cursor-pointer group/parent hover:bg-khaki active:bg-khaki md:h-9 md:text-[15px] md:px-[10px]"
          type="button"
        >
          Узнайте больше
          <span class="absolute left-1/2 top-[calc(100%+6px)] -translate-x-1/2 h-[1px] w-0 duration-150 bg-khaki rounded-full group-hover/parent:w-3 group-active/parent:w-3 md:top-[calc(100%+8px)] md:group-hover/parent:w-4 md:group-active/parent:w-4 xl:group-active/parent:w-5 xl:top-[calc(100%+10px)]"></span>
        </button>

        <div
          class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[160%] overflow-hidden bg-center pattern md:bg-[length:34px_auto] xl:bg-[length:42px_auto] 2xl:bg-[length:52px_auto]"
          style="background-image: url('/images/pattern.svg');"
        >
          <div class="absolute top-0 left-0 z-10 w-full h-full bg-[linear-gradient(to_bottom,#1f2937_0,transparent_50%,#1f2937_100%)]"></div>
        </div>
      </div>
    </div>

    <x-blocks.statistics />

    <x-blocks.services />
  </main>
@endsection
