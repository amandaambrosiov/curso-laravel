<h1>Nova dúvida</h1>

@if ($errors->any())
    @foreach($errors->all() as $error)
    {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.store')}}" method="POST">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>