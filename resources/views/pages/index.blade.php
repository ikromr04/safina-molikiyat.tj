@extends('layouts.app')

@section('content')
  <main class="flex flex-col text-khaki">
    <x-blocks.about />

    <x-blocks.renters />

    <x-blocks.owners />

    <x-blocks.brokers />

    <x-forms.contact />
  </main>
@endsection
