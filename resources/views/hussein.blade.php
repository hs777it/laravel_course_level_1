<div>
  Here is Hussein blade file

  {{ $data }}
  {!! $data !!}

  {{-- ======================= --}}
  @if ($data == 'Hussein')
    <h1>Hussein</h1>
  @elseif ($data == 'Ali')
    <h1>Ali</h1>
  @else
    <h1>Someone else</h1>
  @endif
  {{-- ======================= --}}

  @for ($i = 0; $i <= 10; $i++)
    <h3>The value is: {{ $i }}</h3>
  @endfor

  @foreach ($data as $element)
    <h3>The Value is: {{ $element }}</h3>
  @endforeach

  {{-- ======================= --}}

  @switch($data3)
    @case('Hussein')
      <h1>Hussein</h1>
    @break

    @case('Ali')
      <h1>Ali</h1>
    @break

    @default
      <h1>Someone else</h1>
  @endswitch

</div>
