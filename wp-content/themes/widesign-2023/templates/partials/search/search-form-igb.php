<form action="/" method="get" class="border-0 relative max-w-sm mb-1">
    <input class="h-full w-28 py-1 pl-2 pr-6 leading-snug rounded-full appearance-none text-blue-500 text-xs focus:outline-none" type="text" placeholder="Search" aria-label="search" name="s" placeholder="Search" id="search" value="<?php the_search_query(); ?>" required>
    <!-- <input type="hidden" name="post_type" value="young-drivers-guides" /> -->
    <!-- // hidden 'young-drivers-guides' value -->

    <button class="absolute h-full right-0 top-0 inline-block px-2 text-xs" type="submit">
        <svg class="absolute top-0 right-0 inline-block w-4 h-4 m-1 fill-current text-blue-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
    </button>

</form>