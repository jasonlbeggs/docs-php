---
path: /
is_home: true
exclude_pagenav: true
extends: _layouts.master
title: Maizzle PHP - Framework for Rapid Email Prototyping
description: Maizzle PHP is an email framework that helps you quickly build emails with utility-first CSS and advanced, email-specific post-processing.
---

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@maizzlemail">
<meta name="twitter:creator" content="@cossssmin">
<meta name="twitter:title" content="{{ $page->title }}">
<meta name="twitter:description" content="{{ $page->description }}">
<meta property="twitter:image" content="{{ $page->baseUrl . '/img/maizzle-card.jpg' }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $page->baseUrl }}" />
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:description" content="{{ $page->description }}" />
<meta property="og:image" content="{{ $page->baseUrl . '/img/maizzle-card.jpg' }}" />
@endsection

@section('body')

    <div class="bg-gradient-maizzle">
        <div class="hidden md:block absolute w-full text-right pt-2 px-4 md:pt-4 md:px-8">
            <a href="{{ $page->social->github }}" target="_blank" rel="noopener" class="text-sm text-white font-medium antialiased px-4 hover:text-grey-lighter">GitHub</a>
            <a href="/docs/introduction/" class="text-sm text-white font-medium antialiased px-4 hover:text-grey-lighter">Documentation</a>
        </div>
        <div class="container h-screen flex items-center justify-center">
            <div class="text-center">
                <a href="/docs/introduction/" class="block mx-auto sm:w-96 mb-6 text-white">
                    <svg class="fill-current" viewBox="0 0 150 100" role="img" xmlns="http://www.w3.org/2000/svg"><path d="M149.47 71.38c-.37-1.32-1.62-2.24-2.92-2.48-.3-.06-.64-.05-.95-.07l-1.04-.07-2.29-.15-4.27-.27c-3.23-.2-6.47-.4-9.7-.58-6.13-.35-12.26-.57-18.39-.8l-2.62 5.54h2.2c2.9.03 5.8.07 8.7.13 2.93.05 5.87.06 8.8.2 6.24.28 12.48.63 18.72.94.76.04 1.5.08 2.27.08.5-.07.92-.3 1.24-.7a2 2 0 0 0 .25-1.77zM77.73 67.35l.27-.36-1.64.06c-1.32.04-2.64.15-3.95.22-1.42.08-2.84.14-4.25.25l-5.6.43c-2.94.22-5.86.53-8.79.82-.55.05-1.1.14-1.64.21l-3.3.44c-.51.06-1.03.11-1.54.2l-2.32.4c-1.4.24-2.8.45-4.18.75l-1.17.26-.07.1c-2.33 3.07-3.76 8.55-3.84 8.83a14.08 14.08 0 0 0-.22.94l.23-.08 3.78-1.22c.46-.15.93-.26 1.4-.39l3.1-.82c1.33-.36 2.68-.63 4.03-.92 1.28-.28 2.55-.55 3.83-.77l5.08-.86c.58-.1 1.17-.16 1.75-.23l3.29-.44c3.01-.4 6.04-.7 9.07-1.03.89-.1 1.78-.17 2.68-.25l.06-.15.48-1.05c1.36-2.67 3.2-5 3.46-5.34zM25.22 80.1l.2-.4.18-.4.17-.37a11.39 11.39 0 0 1 .42-1.08l-.03.08.2-.47.15-.34.14-.34.12-.25.14-.37.15-.4a6.75 6.75 0 0 1 .37-.83l.14-.37.1-.24.05-.12-1 .32c-1.81.57-3.58 1.26-5.36 1.9-.65.23-1.29.52-1.93.78-.62.25-1.25.48-1.85.76-2.07.96-4.16 1.88-6.15 3l-1.72.98c-.5.28-.98.62-1.47.94-.45.28-.87.61-1.28.95a17.4 17.4 0 0 0-2.24 2.1 5.7 5.7 0 0 0-1.36 4.93 6.4 6.4 0 0 0 2.48 3.45 6.45 6.45 0 0 0 4.76 1.38c1.8-.4 2.67-1.55 2.93-2.4l.01-.02.2-.32c.33-.57.78-1.08 1.27-1.54 1.1-.87 2.28-1.63 3.44-2.4.7-.47 1.46-.87 2.18-1.3.54-.33 1.1-.63 1.67-.94l.74-.41v-.15l.07-.38.07-.3.08-.36a3.08 3.08 0 0 1 .1-.4c.04-.27.1-.54.19-.8l.13-.38.15-.38.28-.66.14-.35.21-.46.2-.42.38-.8.18-.41zM55.66 56.23l-.02.02.03.01.02.01a.35.35 0 0 1-.03-.04z"/><path d="M109.76 62.35l2.32-1.45 2.75-1.7c.1.75.52 1.46 1.14 1.91a3.1 3.1 0 0 0 2.28.49l.5-.18.11-.05.05-.02.2-.09.09-.04.26-.1a1.38 1.38 0 0 1 .2-.12l.2-.1.34-.13.07-.03.23-.1.2-.1.07-.03.19-.09.28-.13.09-.04.05-.03.04-.02.04-.02.06-.03.2-.09.07-.03.2-.09h.04a29.24 29.24 0 0 1 .48-.22l.03-.02a.1.1 0 0 1 .02-.02l.07-.05.03-.01.05-.03.4-.18v-.02l.33-.14.31-.13.03-.01.08-.04.37-.16c.24-.1.48-.23.71-.34a13 13 0 0 1 .44-.19 2.76 2.76 0 0 1 .46-.13.24.24 0 0 1 .24.27c0 .4.01.8.06 1.19.07.52.18 1.04.41 1.5a8 8 0 0 0 .8 1.29 3.35 3.35 0 0 0 2.08 1.11l.1.03h.08l.1.01h.26l.02-.02h.19l.1-.01h.1l.03-.03h.03c.2-.03.4-.05.6-.1a9.1 9.1 0 0 0 2.37-1.1 27.63 27.63 0 0 0 3.16-2.27c.5-.4.98-.8 1.46-1.21.52-.44.98-.94 1.49-1.4.43-.38.65-1.04.7-1.6.02-.28 0-.55-.09-.8-.32-.65-1.24-.61-2.66.5-.67.52-1.45.9-2.18 1.37-.74.44-1.48.86-2.26 1.24-.76.37-1.55.66-2.39.76-.94-1.32-.52-3.17-.52-3.2.48-.24.96-.47 1.43-.73.43-.25.87-.5 1.32-.71.32-.16.65-.32.96-.5l.89-.58c.61-.4 1.2-.84 1.77-1.29 1.4-1.1 2.74-2.28 4.05-3.49a30.1 30.1 0 0 0 3.1-3.29c.65-.8 1.17-1.7 1.75-2.56a11.3 11.3 0 0 0 1.8-7.33 4.29 4.29 0 0 0-.09-.34c-.08-.24-.22-.45-.34-.66a2.45 2.45 0 0 0-2.02-1.06 4.49 4.49 0 0 0-1.3.19 9.1 9.1 0 0 0-1 .36l-.06.03a1.36 1.36 0 0 1-.1.04l-.12.05-.24.1-.15.07-.07.03-.2.1-.38.21-.4.22-.12.06-.2.1-.14.07a3.43 3.43 0 0 1-.18.09 20.12 20.12 0 0 0-2.42 1.74l-.15.12-.37.25c-.13.1-.24.2-.34.33a21.8 21.8 0 0 0-4.46 5.11c-.48.72-.95 1.44-1.38 2.18-.5.87-.98 1.76-1.46 2.65l-.17.3.16-.3c0 .03-.02.05-.03.07l-.2.38-.02.03v-.01c-.41.75-.8 1.5-1.14 2.3a34.66 34.66 0 0 0-1.15 3.28 232.29 232.29 0 0 1-1.88.92l-.45.24-.43.21-.47.24c-.17.1-.35.17-.52.26l-.84.4c-.25.13-.5.25-.73.39a28.44 28.44 0 0 1-1.07.56c.55-1.14 1.06-2.29 1.64-3.4 1.31-2.6 2.62-5.19 3.88-7.8 1.25-2.63 2.52-5.25 3.92-7.8 1.39-2.55 2.8-5.09 4.17-7.65 1.41-2.64 2.79-5.3 4-8.04.35-.83.72-1.66 1.03-2.5.18-.48.36-.94.5-1.42a16.74 16.74 0 0 0 .5-1.84c.02-.12 0-.25 0-.37l-.05-.79a3.59 3.59 0 0 0-.82-1.57 3.26 3.26 0 0 0-2.48-1.19c-.42.03-.8.18-1.1.44l-.05.05-.17.18a9.9 9.9 0 0 0-1.25 2.03l-1.08 2.18c-.62 1.27-1.2 2.54-1.82 3.8a902.25 902.25 0 0 1-4 8.01c-1.32 2.65-2.6 5.33-3.85 8.02-1.2 2.6-2.28 5.27-3.4 7.92-.55 1.34-1.12 2.69-1.7 4.02-.59 1.35-1.18 2.7-1.74 4.07-.19.44-.36.89-.52 1.33-.06.03-.16.29-.84.8-.11.09-.24.15-.36.23-.1.08-.22.15-.33.22l-.4.19c-.12.06-.23.11-.36.15-.27.08-.57.12-.84.04l-.04-.01a.92.92 0 0 1-.12-.05l-.12-.07a.64.64 0 0 1-.14-.14c-.08-.1-.12-.22-.16-.34-.07-.21-.1-.43-.05-.65l.11-.52.08-.3.13-.38.16-.4a14.52 14.52 0 0 0 1.49-6.03c0-.21-.03-.44-.06-.65a4.58 4.58 0 0 0-.25-1.07 4.48 4.48 0 0 0-2.76-2.65c.84-1.43 1.66-2.87 2.49-4.3l.58-.74 1.31-1.7c.2-.26.41-.52.6-.79l.3-.37.23-.3c.4-.53.48-1.17.28-1.8-.1-.35-.42-.89-.68-1.14-.22-.2-.42-.41-.67-.56a3.88 3.88 0 0 0-2.05-.67 2.8 2.8 0 0 0-1.7.51c-.1.07-.2.16-.3.25-.26.23-.54.48-.79.75-.39.41-.7.87-1.03 1.34-.19.26-.36.52-.52.8-.18.29-.37.57-.54.87-.72 1.28-1.42 2.58-2.12 3.87a409.89 409.89 0 0 1-3.73 6.63l-1.65 1.79c-.8.85-1.58 1.72-2.4 2.56.04-.37.07-.73.08-1.1 0-.22-.03-.44-.06-.66a4.6 4.6 0 0 0-.25-1.07 4.48 4.48 0 0 0-2.76-2.65c.85-1.42 1.66-2.86 2.49-4.29l.58-.75 1.32-1.7.6-.78.29-.37.23-.3c.4-.54.48-1.17.29-1.8-.11-.35-.43-.9-.7-1.14-.2-.2-.4-.41-.66-.56a3.88 3.88 0 0 0-1.66-.65 2.8 2.8 0 0 0-2.1.48l-.28.25c-.27.24-.55.49-.8.75-.39.42-.7.88-1.03 1.34-.19.26-.35.53-.52.8l-.54.87c-.72 1.29-1.42 2.58-2.12 3.87a407.76 407.76 0 0 1-3.73 6.64l-1.65 1.78c-1.29 1.4-2.57 2.8-3.95 4.1a13.6 13.6 0 0 1-3.69 2.51l-.41.12c.16-.86.41-1.7.74-2.5l.59-1.43.79-1.64c.33-.69.72-1.36 1.08-2.04.18-.34.37-.67.57-1a409.94 409.94 0 0 0 5.07-7.38c.82-1.23 1.6-2.48 2.48-3.67a12.4 12.4 0 0 1 .56-.7c.37-.36.39-1.07.22-1.52l-.23-.5a2.94 2.94 0 0 0-.82-.86c-.36-.29-.91-.5-1.37-.55a2.42 2.42 0 0 0-1.51.37c-.22.13-.4.3-.6.46-.34.3-.67.62-1 .94-.58.57-1.1 1.2-1.63 1.82-.98 1.16-1.85 2.42-2.74 3.65-.39.54-.79 1.07-1.15 1.63l-1.28 2a77.75 77.75 0 0 0-2.32 3.9c-.36.64-.68 1.31-1.01 1.97-.4.76-.72 1.56-1.08 2.33-.17.38-.32.76-.45 1.15l-.12.14c-.9 1.06-1.82 2.1-2.8 3.07l-1.06 1.07-1.27 1.14a22.83 22.83 0 0 1-2.63 2l.23-.9c.08-.27.14-.56.24-.84l.41-1.21c.39-1.13.88-2.21 1.36-3.3.25-.52.5-1.05.77-1.57l1.12-2.1c.74-1.31 1.52-2.58 2.35-3.83l.3-.44c.22-.31.47-.64.63-.99l.1-.26c.08-.31.06-.62-.05-.93a2.77 2.77 0 0 0-1.63-1.65c-.42-.16-.9-.26-1.35-.17-.21.05-.52.18-.74.3-.1.06-.18.14-.26.21-.23.2-.3.27-.45.42l-.46.5c-.24.28-.46.58-.69.87-.43.55-.82 1.14-1.2 1.72-.43.63-.81 1.28-1.2 1.93-.2.31-.35.64-.53.96l-.4.76-.26.53-.1.1c.01.02.02.03 0 .04l-.02.04c0 .02-.02.03-.03.05v.01a.98.98 0 0 0 .1-.15l.03-.02h.02c.02.02.02.04.01.05a1.14 1.14 0 0 1-.12.18l-.12.16-.13.17a7.92 7.92 0 0 1-.28.34l-.1.15-.09.1a.3.3 0 0 1-.08.16l-.28.3-.07.1a7.83 7.83 0 0 1-.53.66c-.16.2-.31.4-.47.58-.17.22-.36.42-.54.62l-.52.55-.06.08-.1.12a.3.3 0 0 1-.05.03l-.2.22-.23.28-.21.2-.46.45c-.14.13-.3.24-.45.36l-.45.36-.27.22a3.5 3.5 0 0 1-.36.22c-.1.06-.22.1-.33.15a2.43 2.43 0 0 1-.5.18h-.02l-.08.03-.06.02h-.03a.67.67 0 0 1-.12.03.46.46 0 0 1-.08.01c-.04 0-.08 0-.12-.02a.28.28 0 0 1-.09-.03l-.04-.02-.04.02.01-.04-.02-.03v-.02l.02-.02h.03a101.9 101.9 0 0 0 .1-.32l.74-2.12c.33-.91.72-1.8 1.12-2.68 1.16-2.46 2.33-4.92 4-7.08.4-.53.83-1.04 1.26-1.55.42-.5.82-1.03 1.26-1.51.47-.51.98-.98 1.47-1.47l1.08-1.04a61.9 61.9 0 0 1 5.64-4.22c.75-.49 1.51-1 2.34-1.34l.29-.07c.16.18.33.35.55.48.5.3.93.5 1.52.58.24.03.5.04.73-.02.4-.12.57-.2.84-.52.1-.12.15-.3.2-.45.05-.17.05-.33.07-.51a.96.96 0 0 0-.07-.39v-.05c-.06-.52-.11-1.05-.22-1.57a2.6 2.6 0 0 0-.18-.52 2.6 2.6 0 0 0-.58-.88 4.1 4.1 0 0 0-1.34-.87 4.7 4.7 0 0 0-2.4-.12 17.07 17.07 0 0 0-1.73.64c-.95.4-1.86.9-2.7 1.5-.9.61-1.72 1.3-2.56 2-.26.2-.51.42-.76.64a110.06 110.06 0 0 0-17.53 17.11c-.97 1.16-1.9 2.35-2.83 3.55-.25.3-.49.62-.73.93l4.7-9.13a1240.91 1240.91 0 0 1 14.76-27.74c.84-1.49 1.7-2.96 2.56-4.44.39-.67.78-1.34 1.15-2.03.3-.56.62-1.12.89-1.7l.32-.67c.08-.17.12-.36.16-.54.06-.26.1-.52.1-.79.04-.69-.39-1.35-.81-1.85a3.43 3.43 0 0 0-2.46-1.19c-.35 0-.68.08-1 .25a1.62 1.62 0 0 0-.68.7 17.2 17.2 0 0 0-.26.37l-.45.47c-.3.31-.62.61-.94.91l-1.73 1.66c-.67.64-1.32 1.3-1.97 1.96-.65.66-1.28 1.34-1.9 2.02-1.2 1.3-2.33 2.65-3.47 4-1.11 1.31-2.2 2.64-3.29 3.97a359.75 359.75 0 0 1-6.77 7.94 247.86 247.86 0 0 1-3.81 4.23c-.45.49-.92.96-1.4 1.44-.5.5-1 1.03-1.52 1.54l-.86.76a25.77 25.77 0 0 1-2.1 1.59 9.86 9.86 0 0 1-2.86 1.1c-.13-.47-.2-.95-.26-1.43a14.45 14.45 0 0 1 .18-2.94c.14-1 .34-1.98.57-2.96.72-2.67 1.64-5.28 2.5-7.9.45-1.38.92-2.75 1.5-4.07.57-1.31 1.2-2.6 1.82-3.88.32-.68.64-1.37.98-2.04l.84-1.4.06-.11 1.24-1.74.2-.21c.11-.12.2-.25.24-.4l.11-.15.4-.54.2-.28c.2-.28.34-.57.5-.88a1.7 1.7 0 0 0-.02-.97c-.11-.36-.3-.69-.55-.97-.3-.34-.67-.6-1.1-.8l-.65-.18c-.4-.06-.8 0-1.17.19-.31.23-.52.43-.73.73l-.13.2-.29.4-.19.24-.8 1.04a76.2 76.2 0 0 0-1.42 1.93 292.55 292.55 0 0 0-3.1 4.44c-2.01 2.93-3.98 5.88-5.97 8.83-2 2.98-4.03 5.95-6.04 8.93-1.95 2.9-3.88 5.8-5.81 8.71-1.95 2.93-3.95 5.83-5.93 8.74l-1.2 1.73c-.48.69-.95 1.4-1.46 2.08L4.2 56c-.5.67-1.03 1.31-1.55 1.97-.33.42-.68.83-1.05 1.22-.26.2-.85.69-1.02 1.16a2.18 2.18 0 0 0 .03 1.28 3.7 3.7 0 0 0 3.76 2.51h.05a2.68 2.68 0 0 0 .7-.21c.23-.1.46-.21.66-.38a1.49 1.49 0 0 0 .37-.45 11.77 11.77 0 0 0 1.36-1.43l1-1.26c.52-.66 1-1.33 1.5-2 .42-.6.85-1.19 1.26-1.8l1.94-2.85c.97-1.44 1.9-2.92 2.84-4.38.82-1.26 1.61-2.53 2.41-3.8l5.8-9.29c1.05-1.68 2.1-3.35 3.17-5.02l-.38 1.69c-.2.87-.34 1.74-.5 2.62l-.18 1.37c-.08.65-.17 1.3-.21 1.95-.1 1.32-.04 2.76.71 3.9a4.56 4.56 0 0 0 4.86 1.99c1.35-.2 3.7-1.42 5.37-2.82a47.61 47.61 0 0 0 3.57-3.16l.99-1 1.3-1.34.53-.55 2.08-2.33c1.16-1.29 2.27-2.62 3.38-3.94 1.96-2.3 3.86-4.64 5.76-6.98l-.7 1.33c-1.63 3.09-3.22 6.19-4.82 9.29-1.58 3.06-3.13 6.14-4.68 9.22l-1.84 3.64a1961.4 1961.4 0 0 0-5.2 10.31c-.78 1.55-1.53 3.1-2.3 4.66-.7 1.42-1.4 2.85-2.07 4.3-.74 1.59-1.48 3.18-2.2 4.78-.7 1.55-1.38 3.11-2.04 4.68a883.1 883.1 0 0 0-3.01 7.2c-.54 1.28-1.32 2.65-.77 4.07l.35.84a4.9 4.9 0 0 0 3.5 2.44c.7.11 1.36 0 1.99-.3l.08-.08a2.3 2.3 0 0 0 1.1-1.35l.14-.32c.04-.1.06-.21.08-.3l.17-.69a89.04 89.04 0 0 1 .93-3.64 171 171 0 0 1 2.22-7.31l.05-.12.02-.07.27-.65.2-.4.04-.07.04-.07c.27-.57.55-1.13.87-1.67.16-.26.32-.51.46-.78l.46-.82c.15-.28.31-.56.49-.83l.5-.75c.15-.25.31-.5.48-.73l.56-.8.55-.76c.18-.26.36-.52.56-.77a16.48 16.48 0 0 1 .28-.42l.12-.18.07-.1.1-.11a2.62 2.62 0 0 1 .08-.07l1.32-1.86c.84-1.17 1.75-2.3 2.65-3.42a179.2 179.2 0 0 1 6.95-8.15l-.09.2c-.54 1.4-1.1 2.8-1.45 4.25-.17.67-.36 1.33-.4 2.02-.04.45.13.88.33 1.27a3.3 3.3 0 0 0 .97 1.07c.24.13.47.3.74.38.27.08.52.15.79.17.4.02.8-.02 1.18-.14.56-.16 1.11-.37 1.64-.61.47-.21.92-.48 1.35-.75.85-.52 1.62-1.15 2.36-1.8l-.05.4c-.07.67-.15 1.36-.03 2.03.06.37.12.73.27 1.08.1.24.21.48.34.7.12.23.35.49.48.66.4.5.92.77 1.47 1.05.21.1.87.23.88.23.31.06.61.03.94.01.23 0 .45-.05.67-.13.37-.11.74-.26 1.1-.41.49-.22.94-.53 1.37-.83.96-.67 1.84-1.48 2.7-2.27.64-.6 1.25-1.23 1.88-1.84l.6-.65a6.2 6.2 0 0 0 1.48 1.53c.29.2.93.51 1.07.58.1.06.21.1.32.14a9.72 9.72 0 0 0 1.47.34c.48.06 1 .01 1.47-.01.48-.03.96-.14 1.42-.3.7-.23 1.36-.5 1.99-.88 1.02-.6 1.9-1.45 2.75-2.28.7-.69 1.35-1.42 1.97-2.18l.55-.69.04.01.33-.36c.5-.51 1.05-.95 1.59-1.4a13.24 13.24 0 0 1 2.48-1.73c.27-.16.54-.33.82-.47a9.74 9.74 0 0 1 .73-.33l.11-.05a.4.4 0 0 1 .13-.02c.08 0 .17.03.24.1.06.06.1.14.11.23a31 31 0 0 1-.7 2.18l-.96 2.71-1.13 3.17-1.02.65c-.89.59-1.78 1.17-2.62 1.83-1.01.8-1.97 1.67-2.9 2.56-.76.73-1.44 1.51-2.15 2.3-.2.21-.41.42-.6.66l-.57.73c-.55.7-1.13 1.39-1.65 2.11a36.73 36.73 0 0 0-3.25 5.38 27.41 27.41 0 0 0-1.55 3.77c-.4 1.3-.64 2.67-.68 4.03-.03.75.08 1.46.24 2.19.05.24.15.48.25.7.13.29.24.56.39.82.15.29.43.62.61.84.18.21.38.42.61.6.13.04.24.13.33.22l.13.08c.65.35 1.33.75 2.1.75h.21c.27 0 .48 0 .73-.07.32-.09.63-.21.92-.36a9.72 9.72 0 0 0 .64-.53c.8-.7 1.55-1.46 2.2-2.3.31-.4.6-.83.89-1.24.44-.65.86-1.3 1.28-1.97.8-1.26 1.5-2.58 2.2-3.9.34-.63.64-1.28.96-1.93l.97-2.09a229.12 229.12 0 0 0 4.07-9.74l.04-.11c.02 0 .03-.02.04-.03l.08-.12.4-.8c.14-.3.28-.6.44-.88.15-.3.3-.61.48-.9a19.14 19.14 0 0 1 1.19-1.83l.61-.87c.2-.28.41-.56.63-.83l2.31-2.94.5-.56.44-.5a10.73 10.73 0 0 1 1.7-1.47c.28-.21.55-.44.84-.65l.55-.4.6-.45c.2-.13.39-.24.59-.34.26-.17.52-.35.78-.5.32-.18.64-.34.97-.49.32-.15.63-.3.96-.44l.99-.36.16.05c-.02.08-.44 1.55-.57 1.92l-.96 2.72c-.38 1.06-.76 2.1-1.13 3.17l-1.02.65c-.89.58-1.78 1.17-2.62 1.82-1.01.8-1.97 1.67-2.9 2.56-.76.73-1.44 1.52-2.15 2.3-.2.22-.41.43-.6.66l-.57.73c-.56.7-1.13 1.4-1.65 2.11a36.7 36.7 0 0 0-3.25 5.39 27.4 27.4 0 0 0-1.55 3.77 15.2 15.2 0 0 0-.69 4.03 8.8 8.8 0 0 0 .25 2.18c.05.25.15.49.25.71.13.28.24.55.39.81.15.3.43.62.6.84.3.36.67.68 1.08.9.65.35 1.33.76 2.1.75h.21c.27 0 .48 0 .73-.07.32-.09.63-.2.92-.36a8.37 8.37 0 0 0 .64-.54c.8-.69 1.55-1.45 2.2-2.28.3-.4.6-.83.89-1.25.44-.64.86-1.3 1.28-1.97.8-1.25 1.5-2.58 2.2-3.89.34-.63.64-1.29.96-1.93l.97-2.1a229.1 229.1 0 0 0 4.11-9.85c.18-.1.35-.22.52-.33zm22.25-12.52l.15-.28c.25-.44.46-.9.7-1.34.23-.45.5-.87.77-1.3l.66-1.02c.41-.53.88-1.02 1.33-1.53.25-.3.5-.6.75-.87.26-.28.54-.55.82-.8l.57-.53.66-.57c.02 0 .03-.02.05-.03.69-.49 1.4-.94 2.16-1.32h.01c.11.05.22.1.33.17.09.1.16.2.23.3a3.1 3.1 0 0 1 .08.41v.02l-.09.23c-.11.21-.23.41-.36.61V42l-.15.22-.26.39-.3.38-.14.19-.18.2-.32.38-.31.32-.07.07-.1.1-.24.24-.38.33-.38.34-.76.65c-.13.1-.27.2-.4.32-.13.1-.25.22-.37.33l-.1.08-.16.14-.1.08-.2.15v.01c-.52.45-3.7 2.76-3.9 2.91zM89.36 35.27h0zM85.5 73.22l-.93 1.96c-.32.66-.7 1.3-1.06 1.95-.34.64-.74 1.24-1.12 1.86-.38.61-.81 1.18-1.22 1.77-.2.28-.44.55-.66.82l-.52.61c.28-1.1.69-2.2 1.16-3.24a36.56 36.56 0 0 1 4.12-6.63l.9-1.1.38-.48c-.34.83-.7 1.66-1.05 2.48zm15.38-1.52l-.93 1.95c-.32.67-.7 1.3-1.06 1.95-.34.64-.74 1.25-1.12 1.87-.38.6-.81 1.18-1.22 1.76-.2.29-.44.55-.66.82a20 20 0 0 1-.52.62c.28-1.12.68-2.2 1.16-3.25a36.48 36.48 0 0 1 5.4-8.2c-.34.83-.7 1.65-1.05 2.48zM97.57 27.94z"/><path d="M96.38 28.46l-.05.05.15-.05a1 1 0 0 1-.1 0zM87.84 28.76l.86.5c.55.24 1.13.33 1.72.25 2.2-.26 2.66-1.67 2.75-2.02.06-.32.09-.64.08-.96a5.72 5.72 0 0 0-.18-1.12 5.09 5.09 0 0 0-.43-.98 3.1 3.1 0 0 0-.33-.4 2.14 2.14 0 0 0-.23-.17 3.94 3.94 0 0 0-.48-.17c-1.2.12-2.36.34-3.53.6-.54.07-.97.31-1.31.73-.4.55-.44 1.24-.27 1.87.21.75.74 1.41 1.35 1.87zM102.53 23.26l.04-.07-.02-.02-.01-.02-.02.04a7.4 7.4 0 0 1-.03.1l.02-.02.02-.01zM141.23 58.61l-.2.08c-.1.05-1.25.73-1.76 1.56a2.42 2.42 0 0 0-.14 2.37c.12.19.24.35.4.5.4.44.95.73 1.55.72.07 0 .14 0 .22-.02.08 0 .16-.01.23-.05.14-.04.27-.1.4-.18 1.3-.71 1.6-1.67 1.66-1.81a4.86 4.86 0 0 0 .25-1.23c0-.1 0-.18-.02-.27-.02-.2-.41-1.78-1.75-1.77H141.62c-.12.02-.23.04-.34.08l-.05.02z"/></svg>
                </a>
                <a href="{{ $page->social->github }}/releases" target="_blank" rel="noopener" class="bg-transparent hover:bg-white text-sm text-white font-semibold hover:text-indigo py-1 px-2 rounded no-underline">
                    {{ $page->version }}
                </a>
                <h1 class="text-blue-lightest text-3xl md:text-4xl font-roboto font-light pt-8 pb-2">Organize. Prototype. Deliver.</h1>
                <p class="text-blue-lightest text-lg mb-12">Build HTML emails fast with utility-first CSS</p>
                <a href="/docs/introduction/" class="text-white hover:text-indigo bg-transparent hover:bg-white hover:shadow-lg text-base py-3 px-10 border border-white rounded inline-flex items-center">Get Started &rarr;</a>
            </div>
        </div>
    </div>

    <div class="container pt-24">
        <div class="md:flex md:flex-wrap -mx-4">
            <div class="md:w-1/3 px-4">
                <h2 class="font-roboto text-2xl">What is it?</h2>
                <p class="text text-grey-darker">
                    Maizzle is a <abbr title="Bring Your Own HTML" class="cursor-help">BYOHTML</abbr> framework for rapid HTML email development. It's like a static site generator, but tailored to email.
                </p>
            </div>
            <div class="md:w-1/3 px-4">
                <h2 class="font-roboto text-2xl">Who is it for?</h2>
                <p class="text text-grey-darker">
                    Developers. Whether you're an email or web developer, you can use Maizzle to create solid, great looking emails for your app or clients.
                </p>
            </div>
            <div class="md:w-1/3 px-4">
                <h2 class="font-roboto text-2xl">Where can I get it?</h2>
                <p class="text text-grey-darker">
                    <a href="{{ $page->social->github }}" class="border-b hover:border-indigo">GitHub</a>. Maizzle is currently a project, not a package. Simply clone the repo on your machine, and you're ready to go. Learn more in the <a href="/docs/introduction/" class="border-b hover:border-indigo">documentation</a>.
                </p>
            </div>
        </div>
    </div>

    <hr class="h-px w-1/2 bg-grey-light my-16">

    <h2 class="font-roboto text-center text-3xl lg:mt-32">Key Features</h2>

    <div class="pt-12 pb-16">
        <div class="container block  md:flex items-center md:h-96">
            <div class="md:w-1/2 pr-12 pl-4">
                <h3 class="font-roboto text-2xl">Jigsaw-powered</h3>
                <p class="text-grey-darker">
                    Maizzle uses the <a href="http://jigsaw.tighten.co" target="_blank" rel="noopener" class="border-b hover:border-indigo">Jigsaw static site generator</a> to build your emails.
                    Jigsaw uses the <a href="https://laravel.com/docs/5.6/blade" target="_blank" rel="noopener" class="border-b hover:border-indigo">Laravel Blade</a> templating engine, and it includes many awesome features like master layouts, partials, <a href="https://laravel.com/docs/5.6/collections" target="_blank" rel="noopener" class="border-b hover:border-indigo">collections</a>, <a href="https://laravel.com/docs/5.6/blade" target="_blank" rel="noopener" class="border-b hover:border-indigo">Laravel Mix</a> for asset compilation, and even Markdown support.
                </p>
            </div>
            <div class="md:w-1/2 px-4 text-right">
                <img src="img/jigsaw-logo-440.png" class="max-w-full" alt="Jigsaw logo">
            </div>
        </div>
    </div>
    <div class="bg-grey-lighter py-12 md:py-24">
        <div class="container block md:flex items-center">
            <div class="md:w-1/2 px-4">
                <svg class="sm:w-96" viewBox="0 0 112 86" aria-labelledby="tailwindTitle" role="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title id="tailwindTitle">TailwindCSS</title><defs><circle id="b" cx="48" cy="28" r="28"/><linearGradient x1="0%" y1="0%" y2="100%" id="c"><stop stop-color="#2383AE" offset="0%"/><stop stop-color="#6DD7B9" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><g transform="translate(8 16)"><use fill="#000" filter="url(#a)" xlink:href="#b"/><use fill="#FFF" xlink:href="#b"/></g><path d="M38 24c1.333-5.333 4.667-8 10-8 8 0 9 6 13 7 2.667.667 5-.333 7-3-1.333 5.333-4.667 8-10 8-8 0-9-6-13-7-2.667-.667-5 .333-7 3zM28 36c1.333-5.333 4.667-8 10-8 8 0 9 6 13 7 2.667.667 5-.333 7-3-1.333 5.333-4.667 8-10 8-8 0-9-6-13-7-2.667-.667-5 .333-7 3z" fill="url(#c)" transform="translate(8 16)"/></g></svg>
            </div>
            <div class="md:w-1/2 px-4">
                <h3 class="font-roboto text-2xl">TailwindCSS</h3>
                <p class="text-grey-darker">Who said CSS frameworks should only be used for web development?</p>
                <p class="text-grey-darker">
                Maizzle uses the <a href="https://tailwindcss.com/" target="_blank" rel="noopener" class="border-b hover:border-indigo">TailwindCSS utility-first CSS framework</a>, so you can rapidly prototype HTML emails by just adding classes to your markup.
                Once satisfied with the dev preview, run the production script to generate clean HTML with inlined styles and many other, email-specific adjustments (configurable).
                </p>
            </div>
        </div>
    </div>
    <div class="py-12 md:py-24">
        <div class="container block md:flex items-center">
            <div class="md:w-1/2 pr-16 pl-4">
                <h3 class="font-roboto text-2xl">BYOHTML&trade;</h3>
                <p class="text-grey-darker">
                    <em>When did we forget how to write tables?</em>
                    Unlike other email frameworks, Maizzle doesn't require writing made-up markup - you write your own, real HTML.
                    So there's one less thing to learn, and you're also in full control: there is no code hidden behind proprietary tags.
                </p>
                <p class="text-grey-darker">
                    Bring Your Own HTML.
                </p>
            </div>
            <div class="md:w-1/2 px-4 text-right">
                <img src="img/byohtml.png" alt="HTML email markup">
            </div>
        </div>
    </div>
    <div class="bg-grey-lighter py-12 md:py-24">
        <div class="container block md:flex items-center">
            <div class="md:w-1/2 px-4">
                <img src="img/style-guide.png" alt="Tailwind custom colours">
            </div>
            <div class="md:w-1/2 px-4 md:pr-4 md:pl-16">
                <h3 class="font-roboto text-2xl">Centralised Style Guide</h3>
                <p class="text-grey-darker">
                Thanks to TailwindCSS, you have a single config file where you can define style guides for all your projects.
                Whether you're developing for one client or 100, you can use the <code class="bg-grey-light rounded">tailwind.js</code> file
                as a design system, to organise branding for all your email templates.
                </p>
            </div>
        </div>
    </div>
    <div class="pt-12 md:pt-24">
        <div class="container block md:flex items-center">
            <div class="md:w-1/2 pr-16 pl-4">
                <h3 class="font-roboto text-2xl">Clean Code</h3>
                <p class="text-grey-darker">
                Maizzle includes email-tailored markup post-processing.
                After inlining takes place, it will clean up unused CSS in every file, both in the style tag and inside HTML attributes.
                Optionally enable code prettify, minification, or uglify class names.
                You can even choose if and when HTML attributes should be used instead of inline CSS.
                </p>
            </div>
            <div class="md:w-1/2 px-4 text-right">
                <img src="img/clean-code.png" alt="">
            </div>
        </div>
    </div>

    <hr class="h-px w-1/2 bg-grey-light my-16">

    <h2 class="font-roboto text-center text-3xl mb-16">Maizzle PHP Features</h2>

    <div class="container flex flex-wrap text-grey-darker pb-4 sm:pb-10">
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Static Site Generator</h4>
            <p>Jigsaw is very powerful and highly customisable. Use it as-is, or extend it to match your workflow as needed.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Centralised Style Guide</h4>
            <p>Tailwind's config generates all your CSS classes and media queries, so you can keep all projects in one place.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">BYOHTML</h4>
            <p>No need to learn custom tags or attributes. Write your own HTML structure, then style it with Tailwind.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Rapid Prototyping</h4>
            <p>Quickly build HTML emails with CSS utility classes. You won't need to write inline CSS for most of the time.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Automatic Inlining</h4>
            <p>When you build for production, Maizzle automatically inlines CSS for you. And it's configurable.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Minify</h4>
            <p>You can optionally turn on email-optimised minification, so your emails will weigh even less.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Prettify</h4>
            <p>Need to send the HTML to a human? Maizzle can prettify the code for you, so it's more readable.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Uglify Classes</h4>
            <p>Rewrite CSS class names to be as few characters as possible, so your production emails are even lighter!</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Clean Code</h4>
            <p>Production emails built with Maizzle include zero unused code. Say goodbye to Gmail clipping.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Mobile or Desktop-first?</h4>
            <p>Prefer coding responsive emails, but need to do hybrid for a certain client? No problem: you own your markup.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Partials, Components, Directives</h4>
            <p>Build reusable or dynamic sections for your emails with Laravel Blade partials, components, and directives.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">CDN-friendly</h4>
            <p>Already using a CDN for images? Define a base image URL and Maizzle will prepend it to all image paths.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Google Fonts</h4>
            <p>Google Fonts support is included out of the box, and it's very easy to customise.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Markdown</h4>
            <p>Optionally write newsletter content in Markdown only. Supports Markdown Extra and Front Matter.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Laravel Blade</h4>
            <p>Use the power of the Laravel Blade templating language to create loops, conditionals, or even write plain PHP.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Plaintext Versions</h4>
            <p>Optionally generate plaintext versions from your HTML emails. Or have your ESP do it. Your call.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Build Environments</h4>
            <p>Local, staging, and production. But you can have as many as you'd like, and they're fully configurable.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Browsersync</h4>
            <p>Run the <code class="rounded">watch</code> command to develop locally and have the browser automatically refresh for you.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Localhost Tunneling</h4>
            <p>Live-share a (customisable) URL to an email that you're working on, with a colleague or a client.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Screenshots</h4>
            <p>Need a quick screenshot of your layout? Maizzle supports all of Puppeteer's <a href="https://github.com/GoogleChrome/puppeteer/blob/master/DeviceDescriptors.js" target="_blank" rel="noopener nofollow" class="border-b hover:border-indigo">device descriptors</a>.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Collections</h4>
            <p>Custom data structures that you can pull into your templates, like ESP tags or personalisation variables.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">RSS To Email</h4>
            <p>Use Collections and Jigsaw's events bus to generate emails with content from an RSS feed or an API.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Easy Configuration</h4>
            <p>The Jigsaw and Tailwind config files are commented and easy to understand. Setup in minutes.</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Extensible</h4>
            <p>You can extend both Jigsaw and Tailwind. Blog articles to newsletter? CSS grid in email? No problem!</p>
        </div>
        <div class="md:w-1/4 px-4 pb-6">
            <h4 class="font-roboto font-bold">Custom Tailwind plugins</h4>
            <p>From custom borders to background gradients and HTML email-specific utilities.</p>
        </div>
    </div>

    <div class="flex justify-center pt-12 pb-16 md:py-32 px-4 bg-gradient-maizzle">
        <div class="text-center">
            <h2 class="font-roboto text-white text-3xl mb-4 md:mb-10">💪 your email development</h2>
            <a href="/docs/introduction/" class="py-3 px-6 bg-white text-blue rounded border hover:shadow-lg">Get Started &rarr;</a>
        </div>
    </div>

     <div class="container flex flex-wrap items-center text-grey-darker p-8">
        <div class="w-full md:w-1/2">
            <p class="text-sm text-center md:text-left mb-6 md:mb-0">
                Maizzle is open source software made with <span class="text-red">❤</span> for 📧
            </p>
        </div>
        <div class="w-full md:w-1/2">
            <div class="flex justify-center md:justify-end">
                @foreach($page->social as $name => $url)
                    <a href="{{ $url }}" class="text-grey-dark hover:text-indigo mx-6 md:mr-0 md:ml-8" target="_blank" rel="noopener nofollow">
                        @fileContents('source/img/icons/'.$name.'.svg')
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
