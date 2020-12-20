<div {{ $attributes->merge(['class' => 'flex gap-1']) }}>

    @for ($i = 1; $i <= $rating; $i++)
        <svg aria-hidden="true" focusable="false" width="1em" height="1em" viewBox="0 0 512 512">
        <path d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3z"
            fill="currentColor" /></svg>
    @endfor

    @if ($half===1)
        <svg aria-hidden="true" focusable="false" width="1em" height="1em" viewBox="0 0 512 512">
            <path d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29
            480l-58.61-171.3zM274.63 347.82L256 334.49v-200.1l26 78.91l7.24 22h105.39l-67.32 47.2l-19.69
            13.81l7.78 22.75l26.26 76.75z" fill="currentColor" /></svg>
    @endif

    @for ($i = ($rating + $half); $i < 5; $i++)
        <svg aria-hidden="true" focusable="false" width="1em" height="1em" viewBox="0 0 512 512">
            <path d="M480 208H308L256 48l-52 160H32l140 96l-54 160l138-100l138 100l-54-160z" fill="none"
                stroke="currentColor" stroke-linejoin="round" stroke-width="32" /></svg>
    @endfor

</div>
