<x-layout>
  <x-slot name="heading">
    Jobs Listings.
  </x-slot>
  
  <h1>Hello from the Contact Jobs Page.</h1>
  <ul>
  @foreach ($jobs as $job)
    <li>
      <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
        <strong>{{ $job['title']}}:</strong> Pays {{ $job['salary'] }} per year.
      </a>
    </li>
  @endforeach
</x-layout>