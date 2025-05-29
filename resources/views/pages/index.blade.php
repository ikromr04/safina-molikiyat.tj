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
          class="relative z-10 flex items-center uppercase border-none rounded-[5px] duration-150 text-onyx cursor-pointer group/parent hover:bg-khaki active:bg-khaki leading-none text-[calc(12px+3*((100vw-375px)/(768-375)))] p-[calc(8px+2*((100vw-375px)/(768-375)))] md:rounded-[6px] md:text-[15px] md:p-[10px] xl:text-[clamp(15px,calc(15px+3*((100vw-1280px)/(1536-1280))),18px)] xl:p-[clamp(10px,calc(10px+2*((100vw-1280px)/(1536-1280))),12px)] xl:rounded-[clamp(6px,calc(6px+2*((100vw-1280px)/(1536-1280))),8px)]"
          type="button"
        >
          Узнайте больше
          <span class="absolute left-1/2 top-[calc(100%+6px)] -translate-x-1/2 h-[1px] w-0 duration-150 bg-khaki rounded-full group-hover/parent:w-3 group-active/parent:w-3 md:top-[calc(100%+8px)] md:group-hover/parent:w-4 md:group-active/parent:w-4 xl:group-active/parent:w-5 xl:top-[calc(100%+10px)]"></span>
        </button>

        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[160%] overflow-hidden bg-center bg-[url('/public/images/pattern.svg')] pattern md:bg-[length:34px_auto] xl:bg-[length:42px_auto] 2xl:bg-[length:52px_auto] after:absolute after:top-0 after:left-0 after:z-10 after:w-full after:h-full after:bg-[linear-gradient(to_bottom,#1f2937_0,transparent_50%,#1f2937_100%)]"></div>
      </div>
    </div>

    <x-blocks.statistics />

    <x-blocks.services />

    <div class="relative z-0 h-[100px] overflow-hidden bg-center bg-[url('/public/images/pattern.svg')] after:absolute after:top-0 after:left-0 after:z-10 after:w-full after:h-full after:bg-[linear-gradient(to_bottom,#1f2937_0,transparent_50%,#1f2937_100%)] md:hidden"></div>

    <x-blocks.business-center />
  </main>
@endsection
