<div class="dropdown p-2">
    <a class="dropdown-toggle" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown"
       aria-expanded="false">
        <i class="fi fi-{{ $current_locale == 'en' ? 'gb' : $current_locale}} fis m-0"></i>
    </a>

    <ul class="dropdown-menu mw-5rem" aria-labelledby="Dropdown">

        <li>
            <a class="dropdown-item" href="#"><i
                    class="fi fi-{{ $current_locale == 'en' ? 'gb' : $current_locale }} fis"></i> <i
                    class="fa fa-check text-success ms-2"></i></a>
        </li>

        <li>
            <hr class="dropdown-divider"/>
        </li>

        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale !== $current_locale)

                <li>
                    <a class="dropdown-item" href="{{ route('changeLang', $available_locale) }}"><i
                            class="fi fi-{{ $available_locale == 'en' ? 'gb' : $available_locale }} fis"></i></a>
                </li>

            @endif
        @endforeach

    </ul>
</div>
