<div>
    User controller Index View

    @isset($anInteger)
        {{ $anInteger }}
    @else
        The variable $anInteger is not defined.
    @endisset


    {{-- <livewire:first-livewire-component /> --}}
</div>

<script language="JavaScript" type="module">

    // window.anime({
    //   targets: 'h2',
    //   translateX: 250,
    //   rotate: '1turn',
    //   backgroundColor: '#FFF',
    //   duration: 800
    // });

    const jsConfetti = new window.JSConfetti()
    jsConfetti.addConfetti()
</script>


